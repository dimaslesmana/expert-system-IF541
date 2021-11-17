<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
			'title' => "Laptop Guide | Home",
			'request' => $this->request,
		];

        return view('index', $data);
    }
}
