<!DOCTYPE html>
<html lang="en">

  <head>
	   <title>Clothing System</title>
	     <?php include 'functions.php'; ?>

	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link href="resources/css/bootstrap.min.css"  rel="stylesheet">
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


	  .wrapper{
	box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding-right: 15px;
    padding-left: 15px;
    margin-right: 70px;
    margin-left: 70px;
    margin-bottom: 30px;
    background-color: #fff;
}


    #myInput {
    background-image: url( ); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
}

#myUL {
    /* Remove default list styling */
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: none;
}

#myUL li a {
    border: 1px solid #ddd; /* Add a border to all links */
    margin-top: -1px; /* Prevent double borders */
    background-color: #f6f6f6; /* Grey background color */
    padding: 12px; /* Add some padding */
    text-decoration: none; /* Remove default text underline */
    font-size: 18px; /* Increase the font-size */
    color: black; /* Add a black text color */
    display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
    background-color: #eee; /* Add a hover effect to all links, except for headers */
}


}
	   </style>
  </head>
  


<body>

<?php 
$conn = new dbConn();
$var = $_GET['Prod_id'];



$catcher = $conn->updateread($var);
	foreach ($catcher as $row) {
		$pname = $row['Prod_name'];
		$pcategory = $row['Prod_cat'];
		$pbrand = $row['Prod_brand'];
		$pprice = $row['Prod_price'];
		$pquantity = $row['Prod_quant'];
		$ptype = $row['Prod_type'];
	}






		if(isset($_POST['sub-btn']))
	{
		$pname = $_POST['pname'];
		$pcategory = $_POST['pcategory'];
		$pbrand = $_POST['pbrand'];
		$pprice = $_POST['pprice'];
		$pquantity = $_POST['pquantity'];
		$ptype = $_POST['ptype'];
		$fileName   = $_FILES['prod_img']['name'];
		$tempName   = $_FILES['prod_img']['tmp_name'];

		$location = "imgs/";
		move_uploaded_file($tempName, $location . $fileName);

	
		$conn -> update($pname,$pcategory, $pbrand, $pprice, $pquantity, $ptype, $fileName, $var);
			header('location: http://localhost/clothing/viewproductnew.php');
	}

		else if(isset($_POST['cancel-btn']))
		{
			header('location: http://localhost/clothing/viewproductnew.php');
		}









?>




<div class="container setborder">
<!--Menu is placed here -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li><a href="Home_manu.php">Home</a></li>
			<li><a href="viewproductnew.php">Items</a></li>
			<li><a href="suppliers.php">Suppliers</a></li>
			<li><a href="orders_manu.php">Orders</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
				
				<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>
<div class=" col-md-offset-5"><h1>Update Form</h1></div>








<div class="row">
	<div class="wrapper">


      <form method="post" enctype="multipart/form-data"> 
      <br>
      	<div class="col-md-4">
      	<img src="imgs/<?php echo $row['Prod_img'];?>" class="img-responsive img-thumbnail" alt="Product Image">
      	</div>
      	<div class="col-md-8">
        <label >Product Name</label>
        <br>
        <input type="text" id="inputEmail" class="form-control" placeholder="Product Name" name="pname" value="<?php echo $row['Prod_name'] ?>" required autofocus>
        <br>
        <label >Product Category</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="Product Category" value="<?php echo $row['Prod_cat'] ?>"  name="pcategory" required>
        <br>
        <label >Product Brand</label>
        <br>
        <input type="text" id="inputEmail" class="form-control" placeholder="Product Brand" value="<?php echo $row['Prod_brand'] ?>" name="pbrand" required autofocus>
        <br>
        <label>Product Price</label>
        <br>
        <input type="text" id="inputEmail" class="form-control" placeholder="Product Price" name="pprice" value="<?php echo $row['Prod_price'] ?>" required autofocus>
        <br>
        <label >Product Quantity</label>
        <br>
        <input type="number" id="inputEmail" class="form-control" placeholder="Product Quantity" value="<?php echo $row['Prod_quant'] ?>" name="pquantity" required autofocus>
        <br>
        <label >Product Type</label>
        <br>
        <input type="text" id="inputEmail" class="form-control" placeholder="Product Tyoe" value="<?php echo $row['Prod_type'] ?>" name="ptype" required autofocus>
        <br>
        <label>Product Image</label>
        <br>
        <input type="file" name="prod_img">
        <br>
        </div>

        <button class="btn btn-lg btn-primary" type="submit" name = "sub-btn">Update Product</button>
        <button type="submit" class="btn btn-danger btn-lg" name = "cancel-btn">Cancel</button>
      </form>

      <br>
      <br>

	</div>

	


</div>




















</div>

</div> 
<br><br>
<footer class="container-fluid text-center">
  <p>Copyright © clothing inventory </p>
</footer>

</body>
</html>
