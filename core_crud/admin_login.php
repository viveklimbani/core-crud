<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="css/loginstyle.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>Registration_management</title> 

 <style>
  .myform{
    		margin: 10px 300px;
    		border: 2px solid black;
    		border-radius: 10px;
    		padding:  10px 50px;
    	}
    	form div {
    		margin: 3px 0;
    	}
  #h1{
    background-color: black;
    color: white;
    text-align: center;
  }

  </style>
</head>


<?php 
include ('config.php');


if(isset($_POST['login']))
{


 	  	$login_em = mysqli_real_escape_string($conn,$_POST['email']);



     	$login_pass = mysqli_real_escape_string($conn,$_POST['psw']);


      //print_r($login_em);
      //die();

     	$select = ("SELECT * from admin where email = '$login_em' and pass='$login_pass'") or die(mysql_error());

     	$sql = mysqli_query($conn,$select);



     	$fetch = mysqli_fetch_array($sql, MYSQLI_ASSOC);

     	$count = mysqli_num_rows($sql);

     	if($count > 0)
     	{

     		$_SESSION['email']=$login_em;


        header("location:table.php");
     	}
     	else
     	{
     		echo "Please check your Email-Id or Password";
     	}

     
}

?>


<body>
  <h1 id="h1">Admin Login Form</h1>
<form method="POST" class="myform" enctype="multipart/form-data">
   
    <div class="form-group">
    <label for="email"><b>Email</b></label>
    <input type="Email" placeholder="Enter Email" name="email" class="form-control" required="required">
    </div>

    <div class="form-group">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" class="form-control" pattern="[A-Za-z].{3,8}"   required="required">
    </div>

  <div>
    <button class="btn" id="submit" name="login">Register</button>
  </div>
</form>

  </body>
</html>