<?php
 include "db.php";
 session_start();

 if(isset($_POST['register']))
 {
 	$area=$_POST['area'];
 	$house=$_POST['house'];
 	$zip=$_POST['zip'];
 	$name=$_POST['name'];
 	$email=$_POST['email'];
 	$pass=$_POST['password'];
 	$dob=$_POST['dob'];
 	$seller=$_POST['seller'];

 	

	$query="INSERT INTO address ( area, house,zipcode ) VALUES ('{$area}', '{$house}','$zip');";
	$address=mysqli_query($connected,$query);
	if($address)
	{
		$query="SELECT address_id FROM address where area='{$area}' and house='{$house}' and zipcode='{$zip}';";
		$result=mysqli_query($connected,$query);
		if(!$result)
		{
				echo mysqli_error($connected);
		}
		else{

		while($row=mysqli_fetch_array($result))
		{
			$address_id=$row['address_id'];
			if($seller=='1')
			{
					
				$query="INSERT INTO seller ( seller_name,address_id) VALUES ('{$name}','{$address_id}' );";
				$query_ok=mysqli_query($connected,$query);
			if(!$query_ok)
				echo "NOOOOOO";

			}
			else
			{
			$query="INSERT INTO customer ( name, dob,email,password,address_id) VALUES ('{$name}','{$dob}','{$email}','{$pass}','{$address_id}' );";
			$query_ok=mysqli_query($connected,$query);
			if(!$query_ok)
				echo "NOOOOOO";
		}
		}
	}
	}
	else
	{
		echo mysqli_error($connected);
	} 	
 }
if(isset($_POST['login']))
 {

 	$email=$_POST['email'];
 	$pass=$_POST['password'];

 	$query= "SELECT customer_id FROM customer where email='{$email}' and password='{pass}';";
 	$result=mysqli_query($connected,$query);
 	if($result)
 	{
 		$row=mysqli_fetch_assoc($result);
 		$customer_id=$row['customer_id'];
 		/*header("Location: ../category.php");*/
 		
 	}
 	else
 	{
 		

 	}

 }
?>