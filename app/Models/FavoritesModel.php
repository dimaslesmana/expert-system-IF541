<?php

namespace App\Models;

use CodeIgniter\Model;

class FavoritesModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'favorites';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'laptop_name'];

    public function insertNewFavorites($data)
    {
        $this->save([
            'user_id' => $data['user_id'],
            'laptop_name' => $data['laptop_name'],
        ]);
    }

    public function getFavoritesByUserId($userId)
    {
        return $this->where(['user_id' => $userId])->findAll();
    }

    public function getFavoriteById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getFavoriteByLaptopName($laptopName, $userId)
    {
        return $this->where(['laptop_name' => $laptopName])
            ->where(['user_id' => $userId])
            ->first();
    }

    public function deleteFavoriteById($id)
    {
        $this->delete($id);
    }
}
