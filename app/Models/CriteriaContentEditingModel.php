<?php

namespace App\Models;

use CodeIgniter\Model;

class CriteriaContentEditingModel extends Model
{
    protected $primaryKey = 'criteria_id';
    protected $table = 'criteria_content_editing';
    protected $useTimestamps = true;
    protected $allowedFields = ['criteria_name', 'criteria_weight', 'criteria_attribute'];

    public function getAll()
    {
        return $this->findAll();
    }
}
