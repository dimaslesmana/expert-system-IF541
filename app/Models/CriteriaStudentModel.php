<?php

namespace App\Models;

use CodeIgniter\Model;

class CriteriaStudentModel extends Model
{
    protected $primaryKey = 'criteria_id';
    protected $table = 'criteria_student';
    protected $useTimestamps = true;
    protected $allowedFields = ['criteria_name', 'criteria_weight', 'criteria_attribute'];

    public function getAll()
    {
        return $this->findAll();
    }
}
