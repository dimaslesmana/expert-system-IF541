<?php

namespace App\Models;

use CodeIgniter\Model;

class CriteriaBusinessModel extends Model
{
    protected $primaryKey = 'criteria_id';
    protected $table = 'criteria_business';
    protected $useTimestamps = true;
    protected $allowedFields = ['criteria_name', 'criteria_weight', 'criteria_attribute'];

    public function getAll()
    {
        return $this->findAll();
    }
}
