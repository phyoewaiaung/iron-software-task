<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $json = file_get_contents(ROOTPATH . 'public/assets/data/content.json');
        $data = json_decode($json, true);

        return view('home', $data);
    }
}