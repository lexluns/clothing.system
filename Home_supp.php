<!DOCTYPE html>
<html lang="en">

  <head>
	   <title>Clothing System</title>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link href="resources/css/bootstrap.min.css" rel="stylesheet">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	   <script src="resources/js/bootstrap.min.js"></script>
	   
	   <style>
	    html,
		body {
        height: 100%;
		}
		.navbar{
			margin-bottom: 0;
			border-radius: 0;
		}
    
		footer {
			background-color: #f2f2f2;
			padding: 25px;
		}
    
		.carousel-inner img {
			width: 100%; 
			margin: auto;
			min-height:200px;
		}
		
 
		@media (max-width: 600px) {
			.carousel-caption 
			{
				display: none; 
				background-color:black;
				width:100%;
				margin-left: -10%;
			}
		}
		body {
			padding-top: 40px;
			padding-bottom: 40px;
		}
		.about-banner{
			color: white;
			background-color: #757D75;
		}
		.form-signin {
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		.form-signin .checkbox {
			font-weight: normal;
		}
		.form-signin .form-control {
			position: relative;
			height: auto;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			padding: 10px;
			font-size: 16px;
		}
		.form-signin .form-control:focus {
			z-index: 2;
		}
		.form-signin input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
		 #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        margin: 0 auto -60px;
      }
	  .error{
		  color:red;
	  }
	  .error1{
		  color:white;
	  }
	  .butlink{
		  color:white;
	  }
	   </style>
  </head>
  

<body>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Log-in</h4>
      </div>
      <div class="modal-body">
      <form>

        <label >Email address</label>
        <br>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        <br>
        <label >Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <div>
          
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

      </div>
   
    </div>

  </div>
</div>








			<!-- Menu -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li><a href="Home_supp.php">Home</a></li>
			<li><a href="transactions.php">Transactions</a></li>
			<li><a href="products.php">Products</a></li>
			<li><a href="orders.php">Order</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
				
				<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>

	<div id="wrap">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="resources/img/carousel/01.jpg"   width="720" height="500">
        <div class="carousel-caption">
          <h3>Tops</h3>
          <p>T-Shirts, Blouses and shirts from exclusive brands</p>
        </div>      
      </div>

      <div class="item">
     <img src="resources/img/carousel/02.jpg"   width="720" height="500">
        <div class="carousel-caption">
          <h3>Bottoms</h3>
          <p>Pants, Shorts and Jeans from exclusive brands</p>
        </div>      
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
  
<div class="container text-center">    
  <h3>New Arrivals</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="resources/img/new/01.jpg" class="img-responsive" style="width:100%" alt="Image">
	  <br>
      <p>Biker Shirt</p>
    </div>
    <div class="col-sm-4"> 
      <img src="resources/img/new/02.jpg" class="img-responsive" style="width:100%" alt="Image">
	  <br>
	  <br>
      <p>Uniqlo Flannel Shirts</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="resources/img/new/03.jpg" class="img-responsive" style="width:100%" alt="Image">
      <br>
      <p>Fruit of the loom </p>    
    </div>
  </div>
</div><br><br><br><br><br><br><br>

</div>	

</div> 
<footer class="container-fluid text-center">
  <p>Copyright © Clothing System</p>
</footer>

</body>
</html>



















