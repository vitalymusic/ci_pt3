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
}
