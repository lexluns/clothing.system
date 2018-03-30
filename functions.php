<?php 

class dbConn{
	

	public $dbconnect;


	function __construct(){

		$this->dbconnect = mysqli_connect("localhost", "root", "", "clothing_system") or die (mysql_error()."Error connecting to database");

	}



	public function login($uname,$upass)
    {

    	$sql = "SELECT * FROM accounts WHERE acc_user = '$uname' ";
    	$itemarray = array();
    	$query = mysqli_query($this->dbconnect,$sql);
		while($row = mysqli_fetch_assoc($query)){
				$itemarray[] = $row;
		}
		return $itemarray;

   }


   public function read($uid)
   {

   	$sql = "SELECT * FROM accounts WHERE acc_id = '$uid'";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;


   }


    public function get($type)
   {

   	$sql = "SELECT * FROM accounts WHERE acc_type = '$type'";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;


   }




	public function insert($order,$ordname, $cat, $type, $quant, $orderedby)
	{
		$sql = "INSERT INTO `order` (`ord_manu`,`ord_name`, `ord_cat`, `ord_type`, `order_quant`, `order_stats`, `Ordered_by`) VALUES ('$order','$ordname', '$cat', '$type', '$quant', 'Not yet delivered','$orderedby')";
		$res = mysqli_query($this->dbconnect, $sql);
		return $res;
	}




	public function readerz ()
	{




   	$sql = "SELECT * FROM `product` ";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;


	}
 





		public function readme($uname)
	{




   	$sql = "SELECT * FROM `order` WHERE Ordered_by = '$uname' ";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;


	}




	public function readmez()

	{



   	$sql = "SELECT * FROM `accounts` WHERE acc_type = 'acc_sup' ";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;





	}






	public function insertz($pname,$pcategory, $pbrand, $pprice, $pquantity, $ptype, $fileName, $own){



	$sql = "INSERT INTO `product` (`Prod_name`,`Prod_cat`, `Prod_brand`, `Prod_price`, `Prod_quant`, `Prod_type`, `Prod_img`, `Prod_own`) VALUES ('$pname','$pcategory', '$pbrand', '$pprice', '$pquantity', '$ptype', '$fileName', '$own')";
		$res = mysqli_query($this->dbconnect, $sql);
		return $res;




	}







		public function reads($own)

	{



   	$sql = "SELECT * FROM `product` WHERE `Prod_own` LIKE '$own' ";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;





	}







		public function orderead($own)

	{

   	$sql = "SELECT * FROM `order` WHERE `ord_manu` LIKE '$own' ";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;


	}







	public function accread()
{


	$sql = "SELECT * FROM `accounts` ";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;






}






public function delete($catcher)
{

	$sql ="DELETE FROM `product` WHERE `product`.`Prod_id` = '$catcher' ";
	$query = mysqli_query($this->dbconnect,$sql);
	return $query;





}




    public function updateread($var)

      {




	$sql = "SELECT * FROM `product` WHERE `Prod_id` LIKE '$var' ";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;

       }









       public function update($pname,$pcategory, $pbrand, $pprice, $pquantity, $ptype, $fileName, $var)
       {

       		$sql = "UPDATE `product` SET `Prod_name` = '$pname', `Prod_cat` = '$pcategory', `Prod_brand` = '$pbrand', `Prod_price` = '$pprice', `Prod_quant` = '$pquantity', `Prod_type` = '$ptype', `Prod_img` = '$fileName' WHERE `product`.`Prod_id` = '$var'; ";

       		$query = mysqli_query($this->dbconnect,$sql);

       		return $query;


       }













       public function updatestats($var)
       {


	$sql = "SELECT * FROM `order` WHERE `ord_id` LIKE '$var' ";
   	$itemarray = array();
   	$query = mysqli_query($this->dbconnect,$sql);
   	while($row = mysqli_fetch_assoc($query)){
			$itemarray[] = $row;
		}
		return $itemarray;



       }






       public function updatestatus($selup, $var)
{





	   $sql = "UPDATE `order` SET `order_stats` = '$selup'  WHERE `order`.`ord_id` = '$var'; ";

       		$query = mysqli_query($this->dbconnect,$sql);

       		return $query;






}



		public function accadd($accname, $accpass, $conper, $connum, $accdet, $acctype)

		{

		$sql = "INSERT INTO `accounts` (`acc_user`,`acc_pass`, `acc_type`, `contact_p`, `contact_no`, `acc_details`) VALUES ('$accname','$accpass', '$acctype', '$conper', '$connum', '$accdet')";
		$res = mysqli_query($this->dbconnect, $sql);
		return $res;


		}

















}



	/*

	public function get_data()
	{

		$sql = "SELECT * FROM persons";
		$itemarray = array();
		$query = mysqli_query($this->dbconnect,$sql);
		while($row = mysqli_fetch_assoc($query)){
				$itemarray[] = $row;
		}

		return $itemarray;
	}


		public function ret_itemData($id)
	{

		$sql = "SELECT * FROM persons WHERE person_id ='$id'";
		$itemarray = array();
		$query = mysqli_query($this->dbconnect,$sql);
		while($row = mysqli_fetch_assoc($query)){
				$itemarray[] = $row;
		}

		return $itemarray;
	}



		public function update ($id, $nname, $naddress)
		{
			$sql = "UPDATE `persons` SET `name` = '$nname', `address` = '$naddress' WHERE `persons`.`person_id` = '$id';";
			$query = mysqli_query($this->dbconnect,$sql);
			if($query){

				echo "YEHEY";
			}

		}
	}


*/





?>


