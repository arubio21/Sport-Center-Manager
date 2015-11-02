<!DOCTYPE html>
<html>
<head>
	<title>@yield('tittle')</title>

	{!! Html::style('assets/css/bootstrap.css') !!}
</head>
<body>
	@yield('content')
</body>
<footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	{!!Html::script('assets/js/bootstrap.min.js')!!}		
</footer>
</html>