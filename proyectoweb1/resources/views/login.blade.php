@extends('layouts.principal')
@section('content')
<form name="frm_login" method="POST"action="{{asset('login')}}" >
        <div class="container">
            <div class="content">
                <div>
                    <input name="email" type="mail" placeholder="Email" required></input>
                </div>
                 <div>
                    <input name="password" type="password" placeholder="Password" required></input>
                </div>
                <div>
                    <button type="submit">Login</button>
                    <button type="cancel"><a text-decoration="none"href="{{asset('/')}}" >Cancel</a></button>
                </div>
            </div>
        </div>
    </form>
   @stop