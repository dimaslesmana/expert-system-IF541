<?php

namespace App\Controllers;

class Guide extends BaseController
{
    public function index()
    {
        $data = [
			'title' => "Laptop Guide | Guide",
			'request' => $this->request,
            'custom_js' => [
                view('custom-js/guide'),
            ],
		];

        return view('guide', $data);
    }
}
