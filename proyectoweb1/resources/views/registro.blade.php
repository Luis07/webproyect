@extends('layouts.principal')
@section('content')
    <section class="container pospanreg">
    <form  name="form_registro" action="{{asset('registro')}}" method="POST">
    <div class="col-md-12 col-md-offset-3">
                <div class="row ">
                    <div class="sombra col-md-7  col-md-offset-3 "> 
                        <h1 class=" h1 h1registro">Registro</h1>
                        <hr>
                        <p >Nombre:</p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                          <input type="text" value="{{$name}}" class="form-control" placeholder="First-name" aria-describedby="sizing-addon1"id="nombre" name="nombre" required>
                        </div>
                            <span id="name_err" class="errorfields"></span>
                        <p class="txt-izq">Apellido: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" value="{{$lastname}}" class="form-control" placeholder="Last-name" aria-describedby="sizing-addon1" id="apellido" name="apellido"  required>
                        </div>
                         <span id="apellido_err"class="errorfields"></span>
                        <p class="txt-izq">Correo: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">@</span>
                            <input type="text" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon1"id="email"pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="correo" required>
                        </div>
                           <span id="email_err" class="errorfields">{{$error}} </span>
                        <p class="txt-izq">Contraseña: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                            <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1"id="password" name="contraseña" required>
                        </div>
                          <span id="pass_err"class="errorfields"></span>
                        <div >
                            <input type="checkbox" id="checkterm" name="terminos" value="Terminos"required/> 
                            Acepto las Condiciones del Servicio<br> 
                            y la Politica de Privacidad de Mailtto
                        </div>
                        <span id="check_err"class="errorfields"></span>
                        <div class="div div_btn_acept_register">
                        <button class="button log_accept btn btn-primary" >Aceptar</button>  
                        </div>
                        <div class="div div_btn_cancel_register">
                           <button class=" btn btn-primary" type="button" onClick="location.href='{{asset('/')}}'" >Cancelar </button>
                       </div>
                   </div>
               </div>
       </div>
   </section>
    </form>
@stop