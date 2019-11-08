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
    height:100px;
    color: white;
    text-align: center;
    padding:20px 20px;
  }
  #log_out{
    float:right;
    background-color:green;
    color:black;
    margin-right:30px;
  }

  </style>

</head>


<?php
include("config.php");




if(isset($_POST['log_out']))
{
  $log_out=$_POST['log_out'];
  if($log_out)
  {
    header('Location:admin_login.php');
  }
}



if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $eid=$_POST['email'];
  $psw=$_POST['psw'];
  $admin_imge=$_FILES['fileToUpload'];

  $imge_take=$admin_imge['name'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



  $sql="INSERT INTO admin(admin_name,email,pass,image)VALUES('$name','$eid','$psw','$imge_take')";

  $result=mysqli_query($conn,$sql);

  if($result)
  {
    echo "ok";
  }

}

?>


<body>
  <h1 id="h1">Admin Registration Form <div>
  <a href='admin_login.php'>
    <button class="btn" id="log_out" name="log_out">Log Out</button>
  </div></h1>
  
<form method="POST" class="myform" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name"><b>Name:</b></label>
      <input type="text"  class="form-control" placeholder="Enter Firstname" name="name"  required="required">
  </div>
  

    <div class="form-group">
    <label for="email"><b>Email</b></label>
    <input type="Email" placeholder="Enter Email" name="email" class="form-control" required="required">
    </div>

    <div class="form-group">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" class="form-control" pattern="[A-Za-z].{3,8}"   required="required">
    </div>

    <div class="form-group">
    <label for="imag">Image</label><br>
    <input type="file" name="fileToUpload" class="form-control">
  </div>

  <div>
    <button class="btn" id="submit" name="submit">Register</button>
  </div>
</form>

  </body>
</html>
