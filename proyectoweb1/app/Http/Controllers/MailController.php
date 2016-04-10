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
		return view('/correo')->with(['emails' => $correos,'metodo'=>'Webmail.Mostrarbo']);
	}
	/*metodo va a traer los correos envíados*/
	public function CorreosEnviados(){
		$value = Cache::get('user');
		echo "$value";
		$correos= DB::table('emails')->select('id','destino','asunto','contenido')->where('email',$value)->where('enviados','1')->get();
		return view('/correo')->with(['emails' => $correos,'metodo'=>'Webmail.Mostrarbe']);
	}
	/*metodo que va a traer los correos de salida*/
	public function CorreosSalida(){
		$value = Cache::get('user');
		echo "$value";
		$correos= DB::table('emails')->select('id','destino','asunto','contenido')->where('email',$value)->where('salida','1')->get();
		return view('correo')->with(['emails' => $correos,'metodo'=>'Webmail.Mostrarbs']);
	}
	/*para actualizar la tabla emails*/
	public function updatemails($para,$asunto,$contenido,$enviado,$borrador,$salida,$id)
	{
		DB::table('emails')
            ->where('id', $id)
            ->update(['destino' => $para,'asunto'=> $asunto,'contenido'=>$contenido,'enviado' =>$enviado,'borrador' =>$borrador,'salida' =>$salida]);
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
	public function safesalida($a,$b,$c,$d)
	{
		echo $d;
		if($d==="undefined"){
			$this->safemails($a,$b,$c,0,1,0);
		}else{
			$this->updatemails($a,$b,$c,0,1,0,$d);
		}
			return redirect('/correo');
	}
	/*para guardar los correos en salida*/
	public function sendsalida($a,$b,$c,$d)
	{
		if($d==="undefined"){
		$this->safemails($a,$b,$c,0,0,1);
		}else{
			$this->updatemails($a,$b,$c,0,0,1,$d);
		}

	    return redirect('/correo');
	}
	/*metodo para eliminar correos*/
	public function eliminar($ide)
	{
		DB::table('emails')->where('id', '=',$ide)->delete();
	    return redirect('/correo');
	}
}
