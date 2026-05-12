<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Front extends BaseController
{
    public function index()
    {
        // 
        $data = [
            "title"=>"Jaunā lapa ar CI4",
            "content" => "Te ir teksts",
            "images" =>["img1.jpg","img2.jpg","img3.jpg"]
        ];
        return view('front/start',$data);
    }
    public function users()
    {
        // 
        $data = [
            "title"=>"Sistēmas lietotāji",
            "content" => "Te ir teksts",
            "images" =>["img1.jpg","img2.jpg","img3.jpg"],
            "users" => [
                [
                    "username"=>"Pēteris",
                    "email"=>"peteris@inbox.lv"
                ],
                [
                    "username"=>"Jānis",
                    "email"=>"jānis@inbox.lv"
                ]
            ]
        ];
        return view('front/start',$data);
    }




}
