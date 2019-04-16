<?php
session_start();
foreach ($_SESSION['shopping_cart'] as $key => $value) {
	echo $key." has the value". $value;
}

session_destroy();

?>