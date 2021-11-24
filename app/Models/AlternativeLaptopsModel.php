<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternativeLaptopsModel extends Model
{
    protected $primaryKey = 'alternative_id';
    protected $table = 'alternative_laptops';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'brand',
        'model',
        'cpu_brand',
        'cpu_model',
        'ram_size',
        'ram_type',
        'gpu_brand',
        'gpu_model',
        'gpu_vram_size',
        'storage_size',
        'storage_type',
        'refresh_rate',
        'weight',
        'price',
        'function',
        'image',
    ];

    public function getAll()
    {
        return $this->findAll();
    }

    public function getLaptopsByFunction($function)
    {
        return $this->where('function', $function)->findAll();
    }

    public function getLaptopsByModel($laptop_models)
    {
        /**
         * SELECT
         * brand AS brand,
         * CONCAT(al.brand , ' ', al.model) AS laptop_name,
         * al.cpu_model AS cpu,
         * CONCAT(al.ram_size, '', 'GB', ' ', al.ram_type) AS ram,
         * CONCAT(al.gpu_brand, ' ', al.gpu_model, ' ', al.gpu_vram_size, 'MB') AS gpu,
         * CONCAT(al.storage_size, 'GB', ' ', al.storage_type) AS storage,
         * CONCAT(al.refresh_rate, 'Hz') AS refresh_rate,
         * CONCAT(al.weight, ' kg') AS weight,
         * al.price AS price
         * FROM alternative_laptops al
         * WHERE al.`model` IN ('Pavilion 14-ec0008AU', 'BR1100F');
         */

        return $this->select(
            "
            brand AS brand,
            CONCAT(alternative_laptops.brand , ' ', alternative_laptops.model) AS laptop_name,
            alternative_laptops.cpu_model AS cpu,
            CONCAT(alternative_laptops.ram_size, '', 'GB', ' ', alternative_laptops.ram_type) AS ram,
            CONCAT(alternative_laptops.gpu_brand, ' ', alternative_laptops.gpu_model, ' ', alternative_laptops.gpu_vram_size, 'MB') AS gpu,
            CONCAT(alternative_laptops.storage_size, 'GB', ' ', alternative_laptops.storage_type) AS storage,
            CONCAT(alternative_laptops.refresh_rate, 'Hz') AS refresh_rate,
            CONCAT(alternative_laptops.weight, ' kg') AS weight,
            alternative_laptops.price AS price,
            alternative_laptops.image AS image
            "
        )->whereIn('alternative_laptops.model', $laptop_models)->findAll();
    }

    public function getLaptopBrands()
    {
        /**
         * SELECT brand
         * FROM alternative_laptops al
         * GROUP BY al.brand;
         */
        return $this->select('brand')
            ->groupBy('alternative_laptops.brand')
            ->findAll();
    }
}
