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
    public function all_users()
    {
        // 
        $data = [
            "title"=>"Sistēmas lietotāji",
            "content" => "Te ir teksts",
            "images" =>["img1.jpg","img2.jpg","img3.jpg"],
            "users" => [
                [
                    "id"=>"1",
                    "username"=>"Pēteris",
                    "email"=>"peteris@inbox.lv"
                ],
                [
                    "id"=>"2",
                    "username"=>"Jānis",
                    "email"=>"jānis@inbox.lv"
                ]
            ]
        ];
         
        $this->response->setHeader('Content-Type','application/json');
        return $this->response->setJSON($data);
    }


        public function page($pageName="Galvenā"){
                $db = \Config\Database::connect();
                $builder = $db->table('pages');
                $query = $builder->getWhere(['page_name' => $pageName]);

                $result = $query->getRowArray();
                // dd($result);
                return view('front/page_template1',  $result);    
               
        }


        public function getNav(){
                $db = \Config\Database::connect();
                $builder = $db->table('pages');
                $query = $builder->select('id,page_name')->get();
                
                $result = [];

                foreach ($query->getResultArray() as $row) {
                   $result[] = $row;
                }

                 return $this->response->setJSON($result);


        }




}
