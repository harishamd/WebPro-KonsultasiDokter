<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home Page</title>

	<!-- boostrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style>
  	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
    	width: 60%;
    	margin: auto;
 	}
  	</style>
</head>
<body class="bg-light">
	<!--NAVBAR-->
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
     			<a class="navbar-brand" href="#">Hai Dok</a>
    		</div>
   			<ul class="nav navbar-nav">
      			<li class="active"><a href="<?php echo base_url('index.php/page/home') ?>">Home</a></li>
				<li><a href="<?php echo base_url('index.php/page/obat') ?>">Daftar Obat</a></li>
      			<li><a href="<?php echo base_url('index.php/page/pembayaran') ?>">Beli Obat</a></li>
      			<li><a href="<?php echo base_url('index.php/page/roomchat') ?>">Tanya Dokter</a></li>
    		</ul>
    		<ul class="nav navbar-nav navbar-right">
    			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil <span class="caret"></span></a>
    				<ul class="dropdown-menu">
      					<li><a href="<?php echo base_url('index.php/page/akun') ?>">Akun</a></li>
         				<li><a href="<?php echo base_url('index.php/user/logout') ?>">Logout</a></li>
         			</ul>
				</ul>
  		</div>
	</nav>
