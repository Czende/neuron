<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Neuron vs. Logic</title>

	<!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>

	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
</head>
<body style="padding-top: 50px; background:#222;">
	<nav class="navbar navbar-inverse navbar-fixed-top" style="border:none;">
	  <div class="container">
	    <div class="navbar-header" style="border:none;">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#" style="background:#EEEEEE;color:#000;">Neuron vs. Logic</a>
	    </div>
	    <div id="navbar" class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="./">Home</a></li>
	        <li><a href="./or/">OR</a></li>
	        <li><a href="./nand/">NAND</a></li>
	        <li><a href="./xor/">XOR</a></li>
	      </ul>
	    </div><!--/.nav-collapse -->
	  </div>
	</nav>

    <div class="container">
		<div class="row">
			<div class="jumbotron text-center" style="border-top-left-radius: 0">
				
				<h1>Hello, world!</h1>
				<p>Cílem této hry je nastavit váhy neuronu tak, aby realizoval zvolenou logickou funkci.<br>
				Neuron zde představuje logickou funkci se dvěma vstupy a jedním výstupem.<br> 
				Pokud si nebudete vědět rady, klikněte na tlačítko "HINT"! Pro reset klikněte na tlačítko "RESET"!</p>
				<p class="btn-success" style="margin-bottom: 0;">Pokud se vám podaří váhy správně nastavit, váš výstup se rozsvítí zeleně! :-)</p>
				<p class="btn-danger">Do té doby však bude váš výstup červený! :-(</p>
				<p>
					<a class="btn btn-primary btn-lg" href="./or/" role="button">OR</a>
					<a class="btn btn-primary btn-lg" href="./nand/" role="button">NAND</a>
					<a class="btn btn-primary btn-lg" href="./xor/" role="button">XOR</a>
				</p>
				
			</div>
		</div>
    </div><!-- /.container -->

</body>
</html>