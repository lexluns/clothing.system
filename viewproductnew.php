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


    session_start();
    $own =  $_SESSION['uname'];
	$conn = new dbConn();
	$catcher = $conn -> reads($own);


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
		$own =  $_SESSION['uname'];

		$location = "imgs/";
		move_uploaded_file($tempName, $location . $fileName);
	
		$conn -> insertz($pname,$pcategory, $pbrand, $pprice, $pquantity, $ptype, $fileName, $own);
		header('location: http://localhost/clothing/viewproductnew.php');
	}








?>








<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Product</h4>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data"> 

        <label >Product Name</label>
        <br>
        <input type="text" id="inputEmail" class="form-control" placeholder="Product Name" name="pname" required autofocus>
        <br>
        <label >Product Category</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="Product Category" name="pcategory" required>
        <br>
        <label >Product Brand</label>
        <br>
        <input type="text" id="inputEmail" class="form-control" placeholder="Product Brand" name="pbrand" required autofocus>
        <br>
        <label>Product Price</label>
        <br>
        <input type="text" id="inputEmail" class="form-control" placeholder="Product Price" name="pprice" required autofocus>
        <br>
        <label >Product Quantity</label>
        <br>
        <input type="number" id="inputEmail" class="form-control" placeholder="Product Quantity" name="pquantity" required autofocus>
        <br>
        <label >Product Type</label>
        <br>
        <input type="text" id="inputEmail" class="form-control" placeholder="Product Type" name="ptype" required autofocus>
        <br>
        <label>Product Image</label>
        <br>
        <input type="file" name="prod_img">
        <br>



        <button class="btn btn-lg btn-primary btn-block" type="submit" name = "sub-btn">Add Product</button>
      </form>

      </div>
   
    </div>

  </div>
</div>




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


<div class="row" id="about">
	<div class="col-md-4"></div>
   <div class="col-md-offset-4"><h1>Item Management</h1></div>
  
   <div class="col-md-4">
		<a class ="butlink" href="#" ><button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal">Add Product</button></a><br><br>
	</div>
   <table class="table">
     <tr>
       <th>Product ID</th>
       <th>Product Name</th>
       <th>Product Brand</th>
	   <th>Product Category</th>
	   <th>Product Type</th>
	   <th>Product Price</th>
	   <th>Product Stock</th>
	   <th>Images</th>
	   <th>Actions</th>
    </tr>



	<?php 
			foreach ($catcher as $row) {
		?>



    <tr>
    	<td><?php echo $row['Prod_id']?></td>
    	<td><?php echo $row['Prod_name']?></td>
    	<td><?php echo $row['Prod_brand']?></td>
    	<td><?php echo $row['Prod_cat']?></td>
    	<td><?php echo $row['Prod_type']?></td>
    	<td><?php echo $row['Prod_price']?></td>
    	<td><img src="imgs/<?php echo $row['Prod_img'];?>" class="img-responsive img-thumbnail" alt="Product Image" style = "width: 80px;height: 80px;"></td>

    	<td><?php echo $row['Prod_quant']?></td>
   
    	<td>	<a href ="Updateform.php?Prod_id=<?php echo $row['Prod_id']?>"><button type="submit" class="btn btn-info btn-xs">Update</button></a>  <a href ="Deleteform.php?Prod_id=<?php echo $row['Prod_id']?>"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a> </td>
		

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
