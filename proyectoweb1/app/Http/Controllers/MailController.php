<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Redirect; 

use Illuminate\Http\Request;

use App\Http\Requests;

class MailController extends Controller
{
	//para enviar el correo de confirmacion de registro al usuario
 public function Send_mail_confirm_registro($para,$asunto,$contenido)
 {
 $desde="From:". "luisbrenes250594@gmail.com";
 Mail($para,$asunto,$contenido,$desde);
    return view('login');	
}
}
