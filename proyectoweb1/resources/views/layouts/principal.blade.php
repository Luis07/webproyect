<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title')
	</title>
<meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
<link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link
<link rel="stylesheet" href="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css
"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/principal.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>
@yield('content')
@yield('panelprincipal') 
@yield('bandejas')
@yield('viewmensajes')
@yield('correos')
@yield('vermensajes')
</body>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
<script src="js/validator.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
</html>