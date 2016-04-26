<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Mail;
use Crypt;
use App\Http\Requests;
use Cache;
class UserController extends Controller
{
    // metodo para pasar los datos de registro y guardarlos
	public function save(Request $request)
	{
		$name=$request->input("nombre");
		$lastname=$request->input("apellido");
		if($this->compararemail($request->input("correo"))=="si"){
			return view('registro', ['name' => $name,'lastname' =>$lastname,'error' =>'El correo ya existe']);
		}else{
			$arreglo=[1];
			$user=new User;
			$user->name = $request->input("nombre");
			$user->lastname = $request->input("apellido");
			$user->email = $request->input("correo");
			$user->password=Crypt::encrypt($request->input("contraseña"));
			$user->save();
			$this->sendmail($request->input("correo"));
			       //Mail::send('emails',$arreglo,function($message)use ($request) {
            //$message->to($request->input("correo"), $request->input("nombre"))->subject('Verify your email address');});
			return redirect('/login');
		}
	}
	public function compararemail($correo){
		
		$users = DB::table('users')->get();

		foreach ($users as $user)
		{
			if($user->email==$correo)
			{
				return "si";
			}
		}
	}
	public function sendmail($correo){
		$data=[];
		Mail::send('emails', $data, function ($message) use ($correo){
   
    $message->subject('Confirmar cuenta');

    $message->to($correo);
});	
	}
	public function validarregistro(Request $request){
		$email = $request->input("correo");
		$user= DB::table('users')
		->where('email',$email)
		->update(array('state' => 'true'));
		
		if($user<1){
			return view('confirm_register', ['email' =>'Correo invalido']);
		}else{
		return redirect('/login');
		}
		
	}
	public function Login(Request $request){
		$user= DB::table('users')->select('password')->where('email',$request->input("email"))->where('state','true')->get();
		foreach ($user as $user) {
			$contraseña= Crypt::decrypt($user->password);
			if ($contraseña==$request->input("password")) {
				Cache::add('user',$request->input("email"),60);
						return redirect('/correo');
			}
		}
	}	
}