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
      			<li class="active"><a href="#">Home</a></li>
      			<li><a href="#">Beli Obat</a></li>
      			<li><a href="#">Dokter</a></li>
    		</ul>
    		<ul class="nav navbar-nav navbar-right">
    			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil <span class="caret"></span></a>
    				<ul class="dropdown-menu">
      					<li><a href="#">Akun</a></li>
         				<li><a href="#">Logout</a></li>
         			</ul>
         		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    		</ul>
  		</div>
	</nav>

    <div class="container">
    	<h3>Anda punya keluhan tentang kesehatan?</h3>
  		<p>Ini adalah website yang cocok untuk anda bertanya-tanya ataupun konsul masalah kesehatan dengan dokter secara langsung</p>
  		<div class="btn-group btn-group-lg">
  			<button type="button" class="btn btn-primary">Tanya Dokter</button>
  			<button type="button" class="btn btn-primary">Beli Obat</button>
  			<button type="button" class="btn btn-primary">Cari Dokter</button>
		</div>
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<!-- Indicators -->
   			<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     			<li data-target="#myCarousel" data-slide-to="1"></li>
    		</ol>

   		 	<!-- Wrapper for slides -->
    		<div class="carousel-inner" role="listbox">

     			<div class="item active">
       				<img src="img/3.jpg" alt="1" width="460" height="345">
        		
      			</div>

      			<div class="item">
       			 	<img src="img/2.jpg" alt="2" width="460" height="345">
        		
      			</div>
    
      		</div>
  
   	 		<!-- Left and right controls -->
   			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      			<span class="sr-only">Previous</span>
    		</a>
    		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      			<span class="sr-only">Next</span>
    		</a>
  		</div>		
	</div>
	<footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom">
    	<div class="container text-center">
      		<small>Copyright &copy; HaiDok</small>
    	</div>
    	
  	</footer>
  	

</body>
</html>
