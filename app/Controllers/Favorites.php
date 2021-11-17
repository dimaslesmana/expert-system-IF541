<?php

namespace App\Controllers;

class Favorites extends BaseController
{
    public function index()
    {
        $data = [
			'title' => "Laptop Guide | Favorites",
			'request' => $this->request,
		];

        return view('favorites', $data);
    }
}
