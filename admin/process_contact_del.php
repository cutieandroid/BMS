<?php

	session_start();
	
	include("../includes/connection.php");

	$query="delete from contact where c_id =".$_GET['id'];

	$result=mysqli_query($link,$query);

	header("location:contact_view.php");

?>