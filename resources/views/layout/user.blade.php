<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{asset('custom/login/style.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container-fluid">

		<div class="toppane"><h1 align="center"> Inventory Management System </h1> </div>

		<div class="leftpane" align="center">
			@yield('login')
		</div>

		<div class="middlepane" align="center">
			<img src='images/ru1.png'> 
		</div>

		<div class="rightpane" align="center">
			@yield('register')
		</div>

	</div>	
	@yield('jquery');

</body>
</html>