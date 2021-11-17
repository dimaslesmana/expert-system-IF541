<?php

namespace App\Controllers;

class Results extends BaseController
{
    public function index()
    {
        $data = [
			'title' => "Laptop Guide | Results",
			'request' => $this->request,
		];

        return view('results', $data);
    }
}
