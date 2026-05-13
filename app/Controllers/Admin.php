<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function __construct(){
           $this->db = \Config\Database::connect();
           $this->builder = $this->db->table('pages');
    }

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


    public function pages(): string
    {
                $query = $this->builder->select('id,page_name')->get();
                
                $result = [];

                foreach ($query->getResultArray() as $row) {
                   $result[] = $row;
                }

                $data = [
                    "title"=>"Sadaļas",
                    "pages"=> $result
                ];

                return view('admin/admin3',$data);


    }
}
