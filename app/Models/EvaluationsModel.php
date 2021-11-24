<?php

namespace App\Models;

use CodeIgniter\Model;

class EvaluationsModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'wp_evaluations';
    protected $useTimestamps = true;
    protected $allowedFields = ['alternative_id', 'criteria_id', 'value'];

    public function getAll()
    {
        return $this->findAll();
    }
}
