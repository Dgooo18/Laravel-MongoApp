<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('index/css/index.css') }}">
	</head>
	<body>
<br><br><br>
			<div class="container">

	<form class="" id="form" action="" method="get">
<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
	<center>	<h3></h3> <img src="{{ asset('index/img/Logo.png') }}" alt=""> </center>
	<br> <div class="form-group">
		<input class="form-control " type="text" id="name" name="name" value="" placeholder="name">
		<br> <input class="form-control"type="password" id="pass" name="pass" value="" placeholder="pass">
	<br>
	<center>	<input id="btn"class="btn btn-lg " type="button" name="" value="Ingresar">	</center>
	</div>

	</form>

			</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('index/js/index.js') }}" charset="utf-8"></script>

	</body>
</html>
