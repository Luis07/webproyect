<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
<link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link
<link rel="stylesheet" href="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css
"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/principal.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>
            <form  name="form_registro">
    <section class="container ">
    <div class="col-md-12 ">
                <div class="row ">
                    <div class="sombra col-md-7 borde col-md-offset-3 "> 
                        <h1 class=" h1 h1registro">Registro</h1>
                        <hr>
                        <p >Nombre: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="First-name" aria-describedby="sizing-addon1" id="nombre" >
                        </div>
                            <span id="name_err" class="errorfields"></span>
                        <p class="txt-izq">Apellido: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="Last-name" aria-describedby="sizing-addon1" id="apellido">
                        </div>
                         <span id="apellido_err"class="errorfields"></span>
                        <p class="txt-izq">Correo: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">@</span>
                            <input type="text" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon1"id="email"pattern="[^ @]*@[^ @]*" name="correo">
                        </div>
                           <span id="email_err" class="errorfields"></span>
                        <p class="txt-izq">Contraseña: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                            <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1"id="password" name="contraseña">
                        </div>
                          <span id="pass_err"class="errorfields"></span>
                        <div >
                            <input type="checkbox" id="checkterm" name="terminos" value="Terminos"/> 
                            Acepto las Condiciones del Servicio<br> 
                            y la Politica de Privacidad de Mailtto
                        </div>
                        <span id="check_err"class="errorfields"></span>
                        <div class="div div_btn_acept_register">
                        <input type="button" class="button log_accept btn btn-primary" onclick="Webmail.validar();">Acceder </input>  
                        </div>
                        <div class="div div_btn_cancel_register">
                           <button class=" btn btn-primary" type="button" onClick="location.href='{{asset('/')}}'" >Cancelar </button>
                       </div>
                   </div>
               </div>
       </div>
   </section>
    </form>
</body>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="{{asset('/js/validator.js')}}"></script>
</html>