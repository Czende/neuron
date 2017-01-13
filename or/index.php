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
	<script src="js/recountOR.js"></script>
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
	      <a class="navbar-brand" href="../" style="background:#EEEEEE;color:#000;">Neuron vs. Logic</a>
	    </div>
	    <div id="navbar" class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
	        <li><a href="../">Home</a></li>
	        <li class="active"><a href="./or/">OR</a></li>
	        <li><a href="../nand/">NAND</a></li>
	        <li><a href="../xor/">XOR</a></li>
	      </ul>
	    </div><!--/.nav-collapse -->
	  </div>
	</nav>

    <div class="container">
		<div class="row">
			<h3 class="text-center">Neuron vs. <strong>OR</strong></h3>
			<div class="col-md-6 col-md-offset-3">
				<table class="table table-bordered" style="margin-bottom: 0">
					<thead>
						<tr class="alert-success">
							<th class="text-center col-xs-4">Váha <strong>W<sub>a</sub></strong></th>
							<th class="text-center col-xs-4">Váha <strong>W<sub>b</sub></strong></th>
							<th class="text-center col-xs-4">Práh <strong>W<sub>0</sub></strong></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="alert-success text-center col-xs-4"><input type="number" step="0.1" data-name="wa" class="text-center recountOR col-xs-12" value="0.0"></td>
							<td class="alert-success text-center col-xs-4"><input type="number" step="0.1" data-name="wb" class="text-center recountOR col-xs-12" value="0.0"></td>
							<td class="alert-success text-center col-xs-4"><input type="number" step="0.1" data-name="w0" class="text-center recountOR col-xs-12" value="0.0"></td>
						</tr>
					</tbody>
				</table>
				<div class="text-center" style="margin: 10px 0 5px;">
					<kbd style="font-size: 17px">v = (W<sub>a</sub> &#215; A<sub>x</sub>) + (W<sub>b</sub> &#215; B<sub>x</sub>) - W<sub>0</sub></kbd><br>
				</div>
				<div class="text-center" style="margin: 10px 0;">
					<kbd style="font-size: 17px">Y = IF v < 0 ? 0 : 1</kbd>
				</div>
				
				<table class="table table-bordered" width="50%" style="background: #fff;">
					<thead class="thead-inverse">
						<tr>
							<th class="text-center alert-success" colspan="5">OR</th>
						</tr>
					</thead>
					<tbody class="recountContainer">
						<tr>
							<td class="text-center col-md-2"><strong>A</strong></td>
							<td class="text-center col-md-2"><strong>B</strong></td>
							<td class="text-center col-md-2"><strong>v</strong></td>
							<td class="text-center col-md-2 btn-danger" data-name="Y"><strong>Y</strong></td>
							<td class="text-center col-md-2 btn-success"><strong>Y<sub>OR</sub></strong></td>
						</tr>
						<tr>
							<td class="text-center"><span data-name="a1">0</span></td>
							<td class="text-center"><span data-name="b1">0</span></td>
							<td class="text-center"><span data-name="v1">0.0</span></td>
							<td class="text-center btn-danger"><span data-name="y1">1</span></td>
							<td class="text-center btn-success"><span data-name="y1or">0</span></td>
						</tr>
						<tr>
							<td class="text-center"><span data-name="a2">1</span></td>
							<td class="text-center"><span data-name="b2">0</span></td>
							<td class="text-center"><span data-name="v2">0.0</span></td>
							<td class="text-center btn-danger"><span data-name="y2">0</span></td>
							<td class="text-center btn-success"><span data-name="y2or">1</span></td>
						</tr>
						<tr>
							<td class="text-center"><span data-name="a3">0</span></td>
							<td class="text-center"><span data-name="b3">1</span></td>
							<td class="text-center"><span data-name="v3">0.0</span></td>
							<td class="text-center btn-danger"><span data-name="y3">0</span></td>
							<td class="text-center btn-success"><span data-name="y3or">1</span></td>
						</tr>
						<tr>
							<td class="text-center"><span data-name="a4">1</span></td>
							<td class="text-center"><span data-name="b4">1</span></td>
							<td class="text-center"><span data-name="v4">0.0</span></td>
							<td class="text-center btn-danger"><span data-name="y4">0</span></td>
							<td class="text-center btn-success"><span data-name="y4or">1</span></td>
						</tr>
					</tbody>
				</table>
				<div class="text-center">
					<button type="button" class="btn btn-success text-center" data-name="hint" style="display: inline-block;">HINT</button>
					<button type="button" class="btn btn-danger text-center" data-name="reset" style="display: inline-block;">RESET</button>
				</div>
			</div>
			
		</div>
    </div><!-- /.container -->

</body>
</html>