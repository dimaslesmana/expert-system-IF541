<?php

namespace App\Models;

use CodeIgniter\Model;

class CriteriasModel extends Model
{
    protected $primaryKey = 'criteria_id';
    protected $table = 'wp_criterias';
    protected $useTimestamps = true;
    protected $allowedFields = ['criteria_name'];

    public function getAll()
    {
        return $this->findAll();
    }
}
