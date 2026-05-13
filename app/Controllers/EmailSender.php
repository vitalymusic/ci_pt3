<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmailSender extends BaseController
{
    public function index()
    {
        // 1. Ielādēt kontaktu formu
        // 2. Noteikt formas apstrādes routu
        // 3. Pievienot Epasta sūtīšanas klasi un veikt iestatījumus SMTP protokols

        return view('email/form',["page_name"=>"Epastu sūtītājs"]);

    }



    public function sendEmail(){
            $data = $this->request->getPost();


            $email = service('email');

            $email->setFrom('vitaly.music@inbox.lv', 'CI4 mājaslapa');
            $email->setTo('vitaly.music@inbox.lv');
            $email->setReplyTo($data["epasts"], $data["vards"]);


            $email->setSubject('Email Test');


            $emailHTML = "
                <h2 style=\"color:red\">Šis epasts ir no lapas CI4 mājaslapa</h2>
                    Epasta sūtītājs ir: {$data["vards"]}
                    <p>Pilsēta kurā dzīvo: {$data["pilseta"]}</p>
                    <p>Ziņojums:<br>{$data["zinja"]}</p>
            ";    


            $email->setMessage($emailHTML);

            try{
               $email->send();
               return redirect()->to('/email');

            }catch(e){
                echo "Kļūda:, " . e . $email->printDebugger(['headers','body']);     
            }
        
    }
}
