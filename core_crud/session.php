<?php

     session_start();

    $check=$_SESSION['email'];


   // print_r($check);
    //die();

	if(!isset($_SESSION['email']))
	{

	  header('location:admin_login.php');

	}



?>