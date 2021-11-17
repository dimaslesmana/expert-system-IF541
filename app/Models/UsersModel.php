<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['email', 'first_name', 'last_name', 'password'];

    public function insertNewUser($user)
    {
        $this->save([
            'email' => $user['email'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'password' => $user['password'],
        ]);
    }

    public function getUserByEmail($email)
    {
        return $this->where(['email' => $email])->first();
    }
}
