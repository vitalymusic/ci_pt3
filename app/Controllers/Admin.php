<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Administrēšanas panelis"
        ];

        return view('admin/admin1',$data);
    }
    public function pasutijumi(): string
    {
        $data = [
            "title"=>"Mani pasūtījumi"
        ];

        return view('admin/admin2',$data);
    }
}
