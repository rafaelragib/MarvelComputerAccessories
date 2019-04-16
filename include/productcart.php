<?php
session_start();
include "include/db.php";
if(isset($_GET['qty']))
	{
		if(!isset($_SESSION['shopping_cart']))
		{
			
			$_SESSION['shopping_cart']=array();
			array_push($_SESSION['shopping_cart'], $_GET['cart']);
			echo "HELLO";
		}
		else
		{
			
			array_push($_SESSION['shopping_cart'], $_GET['cart']);

		}
	}
?>