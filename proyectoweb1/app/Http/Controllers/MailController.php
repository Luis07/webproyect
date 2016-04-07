<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Cache;
use DB;
use Illuminate\Http\Request;
use App\Email;
use Redirect;	
use App\Http\Requests;

class MailController extends Controller
{
	//para enviar el correo de confirmacion de registro al usuario
	public function Send_mail_confirm_registro($para,$asunto,$contenido,$desde)
	{
		$desde="From:".$desde;
		Mail($para,$asunto,$contenido,$desde);
		return view('login');	
	}
	/*metodo que va a traer los correos de borrador*/
	public function Correosborrador(){
		$value = Cache::get('user');
		$correos= DB::table('emails')->select('id','destino','asunto','contenido')->where('email',$value)->where('borrador','1')->get();
		return view('correo')->with(['emails' => $correos]);
	}
	/*metodo va a traer los correos envíados*/
	public function CorreosEnviados(){
		$value = Cache::get('user');
		echo "$value";
		$correos= DB::table('emails')->select('id','destino','asunto','contenido')->where('email',$value)->where('enviados','1')->get();
		$tabla=$this->Crearformatabla($correos);
	}
	/*metodo que va a traer los correos de salida*/
	public function CorreosSalida(){
		$value = Cache::get('user');
		echo "$value";
		$correos= DB::table('emails')->select('id','destino','asunto','contenido')->where('email',$value)->where('salida','1')->get();
		$tabla=$this->Crearformatabla($correos);
	}
	/*metodo que lleva la estructura de una tabla con los correos*/
	public function Crearformatabla($correos){
		$tabla="<br>";
		echo $tabla;
		foreach ($correos as $campo) {
			break;
			$tabla = $tabla +"<tr id="+"c"+$campo->id+" onclick=LOGIN.mostrarmensajesborrador("+$campo->id+")"+"<td><div class=divmarcado>"+"<p>"+"<h4>"+$campo->destino+"</h4>"+"<h4>"+$campo->asunto+"</h4>"+"<p>"+
			$campo->contenido+"</p>"
    +"</p>"+"</div>"+"<div  id="+$campo->id+" class=divbtn ><button onclick=LOGIN.eliminarcorreosborrador("+$campo->id+") type=button class='btn btn-default' aria-label=Left Align><span class="+"'glyphicon glyphicon-trash'"+" aria-hidden=true></span></button></div>"+
    "</td>+</tr>";
	}	
	}
	/*metodo para guardar los correos en la bd*/
	public function safemails($para,$asunto,$contenido,$enviado,$borrador,$salida){
		$user = Cache::get('user');
		$message=new Email;
		$message->email =$user;
		$message->destino = $para;
		$message->asunto =$asunto;
		$message->contenido =$contenido;
		$message->enviado =$enviado;
		$message->borrador =$borrador;
		$message->salida =$salida;
		$message->save();
	}
	/*para guardar los correos en borrador*/
	public function safesalida($a,$b,$c)
	{
		$this->safemails($a,$b,$c,0,1,0);
			return redirect('/correo');
	}
	/*para guardar los correos en salida*/
	public function sendsalida($a,$b,$c)
	{
		$this->safemails($a,$b,$c,0,0,1);
			return redirect('/correo');
	}
}
