@extends('layouts.principal')
@section('content')
<form name="frm_login" method="POST"action="{{asset('login')}}" >
   <div class="col-md-12 col-md-offset-3">
    <div class="row ">
       <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">@</span>
        <input type="text" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon1"id="email"pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="email" required>
    </div>
    <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
        <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1"id="password" name="password" required>
    </div>
    <div class="div div_btn_acept_register">
        <button class="button log_accept btn btn-primary">Aceptar</button>  
    </div>
</div>
</div>
</form>
@stop