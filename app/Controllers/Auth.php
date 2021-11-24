<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to('/');
    }

    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => "Laptop Guide | Login",
            'validation' => $this->validation,
        ];

        return view('auth/login', $data);
    }

    /**
     * * Handle login request
     */
    public function doLogin()
    {
        $loginRules = [
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email address is required!',
                    'valid_email' => 'Email address is not valid!',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is required!',
                ]
            ],
        ];

        if (!$this->validate($loginRules)) {
            return redirect()->to('/auth/login')->withInput();
        }

        $data = [
            'email' => htmlspecialchars($this->request->getPost('email'), ENT_QUOTES, 'UTF-8'),
            'password' => $this->request->getPost('password'),
        ];

        $user = $this->usersModel->getUserByEmail($data['email']);

        if (is_null($user)) {
            /**
             * Email not found.
             * Do not explicitly tell email not found.
             */
            session()->setFlashdata('alert_error', 'Email or password invalid!');

            return redirect()->to('/auth/login')->withInput();
        }

        if (!password_verify($data['password'], $user['password'])) {
            /**
             * Password incorrect.
             * Do not explicitly tell password incorrect.
             */
            session()->setFlashdata('alert_error', 'Email or password invalid!');

            return redirect()->to('/auth/login')->withInput();
        }

        $sessionData = [
            'logged_in' => TRUE,
            'user_id' => $user['id'],
            'full_name' => join(' ', [$user['first_name'], $user['last_name']]),
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'email' => $user['email'],
        ];

        session()->set($sessionData);

        return redirect()->to('/');
    }

    public function register()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => "Laptop Guide | Register",
            'validation' => $this->validation,
        ];

        return view('auth/register', $data);
    }

    /**
     * * Handle register request
     */
    public function doRegister()
    {
        $registerRules = [
            'first_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'First name is required!',
                ]
            ],
            'last_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Last name is required!',
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[users.email]|valid_email',
                'errors' => [
                    'required' => 'Email address is required!',
                    'is_unique' => 'Email address already exists!',
                    'valid_email' => 'Email address is not valid!',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password is required!',
                    'min_length' => 'Password must be at least 6 characters long!',
                ]
            ],
        ];

        if (!$this->validate($registerRules)) {
            return redirect()->to('/auth/register')->withInput();
        }

        $data = [
            'email' => htmlspecialchars($this->request->getPost('email'), ENT_QUOTES, 'UTF-8'),
            'first_name' => htmlspecialchars($this->request->getPost('first_name'), ENT_QUOTES, 'UTF-8'),
            'last_name' => htmlspecialchars($this->request->getPost('last_name'), ENT_QUOTES, 'UTF-8'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $this->usersModel->insertNewUser($data);

        session()->setFlashdata('alert_success', 'Congratulations! Your account has been created!');

        return redirect()->to('/auth/login');
    }

    /**
     * * Handle logout request
     */
    public function logout()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/auth/login');
        }

        session()->destroy();

        return redirect()->to('/');
    }
}
