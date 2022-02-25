<?php session_start(); ?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>
		Paka Belimbing Manis
	</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" id="bootstrap-css">
	<link href="css/adminflare.min.css" media="all" rel="stylesheet" type="text/css" id="adminflare-css">
	</script>
	
	<script src="js/modernizr-jquery.min.js" type="text/javascript"></script>
	<script src="js/adminflare-demo.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/adminflare.min.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			prettyPrint();
		});
	</script>

	<style type="text/css">
		.box, .well { padding-bottom: 0; }
	</style>
</head>
<body>
<script type="text/javascript">demoSetBodyLayout();</script>
	<!-- Main navigation bar
		================================================== -->
	<header class="navbar navbar-fixed-top" id="main-navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="logo" href="#"><img alt="Af_logo" src="images/af-logo.png"></a>

				<a class="btn nav-button collapsed" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-reorder"></span>
				</a>

				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="divider-vertical"></li>
						<li class="active"><a href="#"><i class="icon-home"></i> FRONT PAGE</a></li>
						<?php
						if(!empty($_SESSION['username_pengguna']))
						{
						?>
						<li class="divider-vertical"></li>
						<li><a href="index.php?page=datadiagnosa"><i class="icon-table"></i> DATA DIAGNOSA</a></li>
						<li class="divider-vertical"></li>
						<li><a href="index.php?page=logout"><i class="icon-off"></i> LOG OUT</a></li>
						<?php } ?>
					</ul>
					<?php
						if(!empty($_SESSION['username_pengguna']))
						{
					?>
			          <ul class="nav  pull-right">
			            <li><a href="#"><i class="icon-user"></i> Welcome, <?php echo $_SESSION['username_pengguna']; ?></a></li>
			          </ul>
		          	<?php } ?>
				</div>
			</div>
		</div>
	</header>
	<!-- / Main navigation bar -->
	
	<!-- Left navigation panel
		================================================== -->
	<nav id="left-panel">
		<div id="left-panel-content">
			<ul>
				<li>
					<a href="index.php?page=home"><span class="icon-home"></span>Beranda</a>
				</li>
				<li>
					<a href="index.php?page=daftar"><span class="icon-dashboard"></span>Diagnosa</a>
				</li>
				<li>
					<a href="index.php?page=artikel"><span class="icon-th-large"></span>Artikel</a>
				</li>
				<li>
					<a href="index.php?page=profil"><span class="icon-edit"></span>Profil</a>
				</li>
				<li>
					<a href="index.php?page=login"><span class="icon-table"></span>Log In Admin</a>
				</li>
				
				<li>
					<a href="index.php?page=loginuser"><span class="icon-inbox"></span>Log In User</a>
				</li>
				
				<li>
					<a href="index.php?page=reguser"><span class="icon-share"></span>Register User</a>
				</li>
				<li>
					<a href="index.php?page=help"><span class="icon-cog"></span>Bantuan</a>
				</li>
			</ul>
		</div>
		<div class="icon-caret-down"></div>
		<div class="icon-caret-up"></div>
	</nav>
	<!-- / Left navigation panel -->
	
	<!-- Page content
		================================================== -->
	<section class="container">
	
		<!-- Headings
			================================================== -->
		<section class="row-fluid">
			<h1 class="box-header"><span class='icon-leaf'></span> Sistem Pakar Diagnosa Hama dan Penyakit Tanaman Belimbing Manis</h1>
			<div class="box">
				<div class="well">
					<?php 
					include "inc.bukaprogram.php"; 
					?>
					</div>
			</div>
		</section>
		
		<footer id="main-footer">
			Perancangan Aplikasi Sistem Pakar Berbasis Website Untuk Para Petani Belimbing Manis
		</footer>
		<!-- / Page footer -->
	</section>
</body>
</html>
