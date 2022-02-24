<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
		<title>Швидкі дії</title>
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
		$( function() {
			$( "#accordion" ).accordion();
		} );

		
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
				<!-- <p><a class="btn btn-default btn-lg" role="button">Очистити базу даних</a> <a class="btn btn-info btn-lg" role="button">СТВОРИТИ РЕЗЕРВНУ КОПІЮ</a></p> -->
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

		  		<div id="accordion">
				  <?php if( isset($_COOKIE['lead']) ){ ?>
				  
	
					<h3>Робота з керівниками</h3>
					
					<div class="tabs" id="tabs_lead" style="display: table; width: 100%;">
						<ul>
						<li><a href="#tabs-1" class="btn btn-success">Додати</a></li>
						<li><a href="#tabs-2" class="btn btn-info">Змінити</a></li>
						<li><a href="#tabs-3" class="btn btn-danger">Видалити</a></li>
						<li><a href="#tabs-4" class="btn btn-primary">Таблиця</a></li>
						</ul>
						<div id="tabs-1">
						<?php require_once('forms/lead/create.php'); ?>
						</div>
						<div id="tabs-2">
						<?php require_once('forms/lead/update.php'); ?>
						</div>
						<div id="tabs-3">
						<?php require_once('forms/lead/delete.php'); ?>
						</div>
						<div id="tabs-4">
						<?php require_once('forms/lead/table_lead.php'); ?>
						</div>
					</div><!-- END TABS -->
					
		

					<h3>Робота з магазинами</h3>
					
					<div class="tabs" id="tabs_shop" style="display: table; width: 100%;">
						<ul>
						<li><a href="#tabs-5" class="btn btn-success">Додати</a></li>
						<li><a href="#tabs-6" class="btn btn-info">Змінити</a></li>
						<li><a href="#tabs-7" class="btn btn-danger">Видалити</a></li>
						<li><a href="#tabs-8" class="btn btn-primary">Таблиця</a></li>
						</ul>
						<div id="tabs-5">
						<?php require_once('forms/shop/create.php'); ?>
						</div>
						<div id="tabs-6">
						<?php require_once('forms/shop/update.php'); ?>
						</div>
						<div id="tabs-7">
						<?php require_once('forms/shop/delete.php'); ?>
						</div>
						<div id="tabs-8">
						<?php require_once('forms/shop/table_shop.php'); ?>
						</div>
					</div><!-- END TABS -->


					<h3>Робота з продавцями</h3>
					
					<div class="tabs" id="tabs_seller" style="display: table; width: 100%;">
						<ul>
						<li><a href="#tabs-9" class="btn btn-success">Додати</a></li>
						<li><a href="#tabs-10" class="btn btn-info">Змінити</a></li>
						<li><a href="#tabs-11" class="btn btn-danger">Видалити</a></li>
						<li><a href="#tabs-12" class="btn btn-primary">Таблиця</a></li>
						</ul>
						<div id="tabs-9">
						<?php require_once('forms/seller/create.php'); ?>
						</div>
						<div id="tabs-10">
						<?php require_once('forms/seller/update.php'); ?>
						</div>
						<div id="tabs-11">
						<?php require_once('forms/seller/delete.php'); ?>
						</div>
						<div id="tabs-12">
						<?php require_once('forms/seller/table_seller.php'); ?>
						</div>
					</div><!-- END TABS -->
					<?php } ?>

					<?php if( isset( $_COOKIE['lead']) || isset( $_COOKIE['lead'] ) ){ ?>
						<h3>Робота з клієнтами</h3>
					
					<div class="tabs" id="tabs_client" style="display: table; width: 100%;">
						<ul>
						<li><a href="#tabs-13" class="btn btn-success">Додати</a></li>
						<li><a href="#tabs-14" class="btn btn-info">Змінити</a></li>
						<li><a href="#tabs-15" class="btn btn-danger">Видалити</a></li>
						<li><a href="#tabs-16" class="btn btn-primary">Таблиця</a></li>
						</ul>
						<div id="tabs-13">
						<?php require_once('forms/client/create.php'); ?>
						</div>
						<div id="tabs-14">
						<?php require_once('forms/client/update.php'); ?>
						</div>
						<div id="tabs-15">
						<?php require_once('forms/client/delete.php'); ?>
						</div>
						<div id="tabs-16">
						<?php require_once('forms/client/table_client.php'); ?>
						</div>
					</div><!-- END TABS -->



					<h3>Робота з товарами</h3>
					
					<div class="tabs" id="tabs_goods" style="display: table; width: 100%;">
						<ul>
						<li><a href="#tabs-17" class="btn btn-success">Додати</a></li>
						<li><a href="#tabs-18" class="btn btn-info">Змінити</a></li>
						<li><a href="#tabs-19" class="btn btn-danger">Видалити</a></li>
						<li><a href="#tabs-20" class="btn btn-primary">Таблиця</a></li>
						</ul>
						<div id="tabs-17">
						<?php require_once('forms/goods/create.php'); ?>
						</div>
						<div id="tabs-18">
						<?php require_once('forms/goods/update.php'); ?>
						</div>
						<div id="tabs-19">
						<?php require_once('forms/goods/delete.php'); ?>
						</div>
						<div id="tabs-20">
						<?php require_once('forms/goods/table_goods.php'); ?>
						</div>
					</div><!-- END TABS --><?php } else echo "У доступі відмовлено."; ?>
					
					
				</div>
					






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