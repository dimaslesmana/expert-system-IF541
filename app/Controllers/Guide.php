<?php

namespace App\Controllers;

class Guide extends BaseController
{
    private $laptop_prices = [
        'price_1' => '4.000.000 - 6.000.000',
        'price_2' => '6.000.000 - 10.000.000',
        'price_3' => '10.000.000 - 15.000.000',
        'price_4' => '15.000.000 - 20.000.000',
        'price_5' => '&gt; 20.000.000',
    ];

    private $laptop_functions = [
        'business' => 'Business',
        'content' => 'Content / Editing',
        'gaming' => 'Gaming',
        'student' => 'Student',
    ];

    public function index()
    {
        $laptop_brands = $this->alternativeLaptopsModel->getLaptopBrands();

        $data = [
            'title' => "Laptop Guide | Guide",
            'request' => $this->request,
            'laptop_prices' => $this->laptop_prices,
            'laptop_brands' => $laptop_brands,
            'laptop_functions' => $this->laptop_functions,
            'custom_js' => [
                view('custom-js/guide'),
            ],
        ];

        return view('guide', $data);
    }

    public function submit()
    {
        $submitRules = [
            'price_submit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required!',
                ]
            ],
            'brand_submit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required!',
                ]
            ],
            'function_submit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required!',
                ]
            ],
        ];

        if (!$this->validate($submitRules)) {
            return redirect()->to('/guide')->withInput();
        }

        $data = [
            'price_submit' => htmlspecialchars($this->request->getPost('price_submit'), ENT_QUOTES, 'UTF-8'),
            'brand_submit' => htmlspecialchars($this->request->getPost('brand_submit'), ENT_QUOTES, 'UTF-8'),
            'function_submit' => htmlspecialchars($this->request->getPost('function_submit'), ENT_QUOTES, 'UTF-8'),
        ];

        switch ($data['function_submit']) {
            case array_search($this->laptop_functions['business'], $this->laptop_functions):
                $temp = $this->calculate($this->criteriaBusinessModel->getAll(), array_search($this->laptop_functions['business'], $this->laptop_functions));
                $result['scores'] = $temp['scores'];
                $result['laptops'] = $temp['laptops'];
                break;
            case array_search($this->laptop_functions['content'], $this->laptop_functions):
                $temp = $this->calculate($this->criteriaContentEditingModel->getAll(), array_search($this->laptop_functions['content'], $this->laptop_functions));
                $result['scores'] = $temp['scores'];
                $result['laptops'] = $temp['laptops'];
                break;
            case array_search($this->laptop_functions['gaming'], $this->laptop_functions):
                $temp = $this->calculate($this->criteriaGamingModel->getAll(), array_search($this->laptop_functions['gaming'], $this->laptop_functions));
                $result['scores'] = $temp['scores'];
                $result['laptops'] = $temp['laptops'];
                break;
            case array_search($this->laptop_functions['student'], $this->laptop_functions):
                $temp = $this->calculate($this->criteriaStudentModel->getAll(), array_search($this->laptop_functions['student'], $this->laptop_functions));
                $result['scores'] = $temp['scores'];
                $result['laptops'] = $temp['laptops'];
                break;
        }

        foreach ($result['laptops'] as $laptop) {
            $laptops[] = $this->alternativeLaptopsModel->getLaptopByModel($laptop);
        }

        $data['unfiltered_laptops'] = $laptops;
        $data['filtered_laptops'] = array_filter($laptops, function ($laptop) use ($data) {
            if ($data['price_submit'] === 'price_1') {
                return $laptop['price'] >= 4000000 && $laptop['price'] <= 6000000 && $laptop['brand'] === $data['brand_submit'];
            } else if ($data['price_submit'] === 'price_2') {
                return $laptop['price'] >= 6000000 && $laptop['price'] <= 10000000 && $laptop['brand'] === $data['brand_submit'];
            } else if ($data['price_submit'] === 'price_3') {
                return $laptop['price'] >= 10000000 && $laptop['price'] <= 15000000 && $laptop['brand'] === $data['brand_submit'];
            } else if ($data['price_submit'] === 'price_4') {
                return $laptop['price'] >= 15000000 && $laptop['price'] <= 20000000 && $laptop['brand'] === $data['brand_submit'];
            } else if ($data['price_submit'] === 'price_5') {
                return $laptop['price'] > 20000000 && $laptop['brand'] === $data['brand_submit'];
            }
        });

        session()->setFlashdata('unfiltered_laptops', $data['unfiltered_laptops']);
        session()->setFlashdata('filtered_laptops', $data['filtered_laptops']);

        return redirect()->to('/results');
    }

    private function calculate($criteria, $laptopFunction)
    {
        $result['scores'] = [];
        $result['laptops'] = [];

        // Mengambil nilai data kriteria
        $jumlah_kriteria = 0;

        foreach ($criteria as $item) {
            $bobot[] = $item['criteria_weight'];
            $kriteria[] = $item['criteria_name'];
            $atribut[] = $item['criteria_attribute'];
            $jumlah_kriteria++;
        }

        // Menghitung jumlah alternatif dan memasukkan nilai alternatif ke dalam array
        $jumlah_alternatif = 0;
        // $alternatif_laptop = $this->alternativeLaptopsModel->getAll();
        $alternatif_laptop = $this->alternativeLaptopsModel->getLaptopsByFunction($laptopFunction);

        foreach ($alternatif_laptop as $item) {
            $alternatif[] = $item['model'];
            $jumlah_alternatif++;
        }

        // Menghitung bobot dalam persen
        $total_bobot = array_sum($bobot);

        for ($col = 0; $col < $jumlah_kriteria; $col++) {
            $bobot_persen[$col] = $bobot[$col] / $total_bobot;
        }

        // Menghitung vektor S
        $kolom = 0;
        $baris = 0;
        $evaluasi = $this->evaluationsModel->getAll();

        foreach ($evaluasi as $item) {
            $nilai[$baris][$kolom] = $item['value'];
            $kolom++;

            if ($kolom == $jumlah_kriteria) {
                $baris++;
                $kolom = 0;
            }
        }

        for ($row = 0; $row < $jumlah_alternatif; $row++) {
            for ($col = 0; $col < $jumlah_kriteria; $col++) {
                if ($atribut[$col] === 'cost') {
                    $pangkat[$row][$col] = pow($nilai[$row][$col], -$bobot_persen[$col]);
                } else if ($atribut[$col] === 'benefit') {
                    $pangkat[$row][$col] = pow($nilai[$row][$col], $bobot_persen[$col]);
                }
            }
        }

        $jumlah_vektor_S = 0;
        for ($row = 0; $row < $jumlah_alternatif; $row++) {
            $S = 1;
            for ($col = 0; $col < $jumlah_kriteria; $col++) {
                $S *= $pangkat[$row][$col];
            }

            $vektor_S[$row] = $S;
            $jumlah_vektor_S += $vektor_S[$row];
        }

        // Mengitung vektor V
        for ($row = 0; $row < $jumlah_alternatif; $row++) {
            $vektor_V[$row] = $vektor_S[$row] / $jumlah_vektor_S;
        }

        // Hasil
        array_multisort($vektor_V, SORT_DESC, SORT_NUMERIC, $alternatif);

        for ($i = 0; $i < $jumlah_alternatif; $i++) {
            // number_format($vektor_V[$i], 3);
            // echo $alternatif[$i] . " = " . number_format($vektor_V[$i], 3);
            // echo "<br>";
            array_push($result['scores'], $vektor_V[$i]);
            array_push($result['laptops'], $alternatif[$i]);
        }

        return $result;
    }
}
