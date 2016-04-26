@extends('layouts.principal')
@section('title')
Confirmacion de registro
@stop
@section('content')
<form name="frm_confirm:registro" action="{{asset('conf_registro')}}" method="POST">
	<section class="container-fluid ">
		<div class="row ">
			<div class="col-md-4 col-md-offset-4" >
				<div>
				<h1>Por favor digite su correo para confirmar si registro</h1>
				</div>
				<div class="input-group input-group-lg">
					<span class="input-group-addon" id="sizing-addon1">@</span>
					<input type="text" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon1"id="email"pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="correo" required>
				</div>
				<p class="errorfields">{{$email}}</p>
				<div class=" mover">
					<input type="submit" class="button log_accept btn btn-primary " ></input>  
				</div>
			</div>
		</div>	
	</section>
</form>
@stop