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
            "title"=>"Administrēšanas panelis",
            "pageNumber"=>1
        ];

        return view('admin/admin1',$data);
    }
    public function pasutijumi(): string
    {
        $data = [
            "title"=>"Mani pasūtījumi",
             "pageNumber"=>2
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
                    "pageNumber"=>3,
                    "pages"=> $result
                ];

                return view('admin/admin3',$data);


    }


    public function page($pageId){
                $query = $this->builder->getWhere(['id'=>$pageId]);
                $result = $query->getRowArray();
                return $this->response->setJSON($result);
    }



    public function updatePage(){
             $data = $this->request->getPost();
           
            $query = $this->builder->where('id', $data["id"])->update($data);

            if( $query){
                return $this->response->setJSON(["message"=>"success"]);
            }else{
                return $this->response->setJSON(["message"=>"error"]);
            }

    }

    public function createPage(){
              $data = $this->request->getPost();
              $query =  $this->builder->insert($data);
    }

    // Pievienot jaunas sadaļas pievienošanu un esošo sadaļu dzēšanu
    
}
