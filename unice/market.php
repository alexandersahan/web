<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
		<title>Покупки</title>
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
			$( ".tabs" ).tabs();
		} );
		
		let objArr = [];
	</script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">

	<!-- Fixed navbar -->
	<?php include("components/menu.php");	?>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Система автоматизації обліку товарообігу</h1>
				<p class="tagline">Швидкі дії з базою даних</p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Керування магазином</h2>
		<p class="text-muted">
			Оберіть необхідну дію нижче
		</p>
	</div>
	<!-- /Intro-->
	<div class="container"><div class="row">
	<?php
	
	if( !isset($_COOKIE['user']) ){
		require_once('signup.php'); 
		require_once('signin.php'); 
	}
	else{?>
		
	</div></div>
	<?php require_once('database/db_lead.php'); ?>
    <div class="jumbotron top-space">
  		<div class="container">

		  <h3>Покупки</h3>
		            <?php require_once('forms/order_str/current_order.php'); ?>
					<div class="tabs" id="tabs_order_str" style="display: table; width: 100%;">
						<ul>
						<li><a href="#tabs-21" class="btn btn-success">Додати</a></li>
						<li><a href="#tabs-22" class="btn btn-info">Змінити</a></li>
						<li><a href="#tabs-23" class="btn btn-danger">Видалити</a></li>
						<li><a href="#tabs-24" class="btn btn-primary">Таблиця</a></li>
						</ul>
						<div id="tabs-21">
						<?php require_once('forms/order_str/create.php'); ?>
						</div>
						<div id="tabs-22">
						<?php require_once('forms/order_str/update.php'); ?>
						</div>
						<div id="tabs-23">
						<?php require_once('forms/order_str/delete.php'); ?>
						</div>
						<div id="tabs-24">
						<?php require_once('forms/order_str/table_order_str.php'); ?>
						</div>
					</div><!-- END TABS -->
					






				<?php } ?>
		</div>
	</div>
	
	<?php include("components/footer.php");?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="assets/js/ajax.js"></script>
	<script src="assets/js/main.js"></script>

	
</body>
</html>