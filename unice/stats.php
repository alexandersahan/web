<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
		<title>Статистика</title>
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

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

	
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
				<p class="tagline">Статистика</p>
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Статистика</h2>
		
	</div>
	<!-- /Intro-->
	<div class="container"><div class="row">
	<?php
	
	if( !isset($_COOKIE['user']) ){
		require_once('signin.php'); 
	}
	elseif ( isset($_COOKIE['lead']) ){?>
		
		
	
	</div></div>
	<?php require_once('database/db_lead.php'); ?>
    <div class="jumbotron top-space">
<div class="container">

		 <script>
$(document).ready(function (){
    $('#stats_table').DataTable({
      "ajax":{
        "url":"data.php",
        "dataSrc":""
      },
      "columns":[
        {"data":"ID"},
        {"data":"_article"},
        {"data":"_name"},
        {"data":"_price"},
        {"data":"_count"},
        {"data":"_date"}
      ]
    });
  });
</script>			

<table id="stats_table" class="table  container justify-content-center">
		  <thead>
        <tr>
            <th>Ідентифікатор</th>
            <th>Артикул</th>
            <th>Клієнт</th>
            <th>Ціна</th>
            <th>Кількість</th>
            <th>Дата</th>
        </tr>
    </thead> 
	
</table>





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