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
$catch = $conn->accread(); 



	if(isset($_POST['sub-btn']))
	{
$accname = $_POST['accname'];
$accpass = $_POST['accpass'];
$conper = $_POST['conper'];
$connum = $_POST['connum'];
$accdet = $_POST['accdet'];
$acctype = $_POST['acctype'];



$conn -> accadd($accname, $accpass, $conper, $connum, $accdet, $acctype);
	header('location: http://localhost/clothing/accounts.php');
}


?>









	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register User</h4>
      </div>
      <div class="modal-body">
      <form method="POST">

        

        <!---<input type="email" id="AcctType" class="form-control" placeholder="Account type" name="Account Type" required autofocus>  ---->
        <br>
        <label >Account Name</label>
        <input type="text" id="AcctName" class="form-control" placeholder="Account Name" name="accname" required>
        <br>
         <label >Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="accpass" required>
        <br>
        <label >Contact Person</label>
         <input type="text" id="AcctName" class="form-control" placeholder="Contact Person" name="conper" required>
         <br>
          <label >Contact Number</label>
         <input type="number" id="AcctName" class="form-control" placeholder="Contact Number" name="connum" required>
         <br>
          <label >Account Details</label>
         <input type="text" id="AcctName" class="form-control" placeholder="Account Details" name="accdet" required>
         <br>









          <br>
          <br>
        <label >Account Type</label>
      
         <select name="acctype">
			  <option value="acc_admin">Admin</option>
			  <option value="acc_manu">Manufacturer</option>
			  <option value="acc_sup">Supplier</option>
			</select> 
        <div>
          
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub-btn">Submit</button>
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
   <div class="col-md-offset-4"><h1>Account Management</h1></div>
  
   <div class="col-md-4">
		<a class ="butlink" href="" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-success">Add Account</button></a><br><br>
		<!----<li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> ---->
	</div>
   <table class="table">
     <tr>
       
       <th>Account ID</th>
       <th>Account Name</th>
       <th>Account Type</th>
       <th>Contact person</th>
       <th>Contact number</th>
	   <th>Account Details</th>

    </tr>

   		<?php 
			foreach ($catch as $row) {
		?>


    <tr>
    	<td><?php echo $row['acc_id']?></td>
    	<td><?php echo $row['acc_user']?></td>
    	<td><?php echo $row['acc_type']?></td>
    	<td><?php echo $row['contact_p']?></td>
    	<td><?php echo $row['contact_no']?></td>
    	<td><?php echo $row['acc_details']?></td>
  
		

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
