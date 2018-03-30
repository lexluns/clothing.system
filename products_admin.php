<!DOCTYPE html>
<html lang="en">

  <head>
	   <title>Clothing System</title>
	      <?php include 'functions.php'; ?>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link href="resources/css/bootstrap.min.css"  rel="stylesheet">
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

<?php 

	$conn = new dbConn();



	$catcher = $conn -> readerz();




?>

<div class="container setborder">
<!--Menu is placed here -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li><a href="Home_admin.php">Home</a></li>
		    <li><a href="products_admin.php">Products</a></li>
		    <li><a href="suppliers_admin.php">List of Suppliers</a></li>
			<li><a href="accounts.php">Manage Accounts</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
				
				<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>


<div class="row" id="about">

	<div class="col-md-4"></div>
   <div class="col-md-offset-5"><h1>Products</h1></div>
   
   
   <table class="table">
     <tr>
     	<th>Product Image</th>
       <th>Product Name</th>
	   <th>Product Brand</th>
	   <th>Product Category</th>
	   <th>Product Type</th>
	   <th>Product Stock</th>
	   <th>Manufacturer</th>	   
    </tr>




    		<?php 
			foreach ($catcher as $row) {
		?>




     <tr>	
<td><img src="imgs/<?php echo $row['Prod_img'];?>" class="img-responsive img-thumbnail" alt="Product Image" style = "width: 80px;height: 80px;"></td>
    	<td><?php echo $row['Prod_name']?></td>
    	<td><?php echo $row['Prod_brand']?></td>
    	<td><?php echo $row['Prod_cat']?></td>
    	<td><?php echo $row['Prod_type']?></td>
    	<td><?php echo $row['Prod_quant']?></td>
    	<td><?php echo $row['Prod_own']?></td>
    </tr>

  		 


    <?php     }?> 




  
		
	
  


  </table>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br>
	
	


</div>


</div>

</div> 
<footer class="container-fluid text-center">
  <p>Copyright © clothing inventory </p>
</footer>

</body>
</html>
