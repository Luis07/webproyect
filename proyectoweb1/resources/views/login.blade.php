<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <head>
        <title>Webmail</title>

        </head>
    <body>
    <form name="frm_login">
        <div class="container">
            <div class="content">
                <div>
                    <input name="email" type="mail" placeholder="Email"></input>
                </div>
                 <div>
                    <input name="password" type="password" placeholder="Password"></input>
                </div>
                <div>
                    <button type="submit">Login</button>
                    <button type="cancel"><a text-decoration="none"href="{{asset('/')}}" >Cancel</a></button>
                </div>
            </div>
        </div>
    </form>
    </body>
</html>