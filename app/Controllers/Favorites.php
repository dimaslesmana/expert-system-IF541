<?php

namespace App\Controllers;

class Favorites extends BaseController
{
    public function index()
    {
        $userId = session()->get('user_id');

        $data = [
            'title' => "Laptop Guide | Favorites",
            'request' => $this->request,
            'favorites' => $this->favoritesModel->getFavoritesByUserId($userId),
        ];

        return view('favorites', $data);
    }

    public function add()
    {
        $data = [
            'user_id' => session()->get('user_id'),
            'laptop_name' => htmlspecialchars($this->request->getPost('laptop_name'), ENT_QUOTES, 'UTF-8'),
        ];

        $favorite = $this->favoritesModel->getFavoriteByLaptopName($data['laptop_name'], $data['user_id']);

        if (!empty($favorite)) {
            return redirect()->to('/favorites');
        }

        $this->favoritesModel->insertNewFavorites($data);

        return redirect()->to('/favorites');
    }

    public function delete($id = null)
    {
        if (empty($id)) {
            return redirect()->to('/favorites');
        }

        $favorite = $this->favoritesModel->getFavoriteById($id);

        if (empty($favorite) || $favorite['user_id'] != session()->get('user_id')) {
            return redirect()->to('/favorites');
        }

        $this->favoritesModel->deleteFavoriteById($favorite['id']);

        return redirect()->to('/favorites');
    }
}
