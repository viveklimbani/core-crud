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

 <?php   

 include 'config.php'; 

 $id= $_REQUEST["id"];

$query = "select * from students where id = '$id'"; 
  $result =mysqli_query($conn, $query); 
  //print_r($result);
   $row=mysqli_fetch_assoc($result); 

   $id = $row["id"];


if(isset($_REQUEST['submit']))
{

$firstname = $_REQUEST['fname'];
$lastname  = $_REQUEST['lname'];
$email     = $_REQUEST['email'];
$mobile_no = $_REQUEST['cname'];
$state     = $_REQUEST['state'];
$city      = $_REQUEST['city'];
$address   = $_REQUEST['address'];
$image     = $_REQUEST['image'];
$sql = "UPDATE students set firstname='$firstname', lastname = '$lastname', email='$email', mobile_no='$mobile_no', state='$state', city='$city', address='$address', image='$image' where id='$id' ";


  $result=mysqli_query($conn, $sql);
  
  if($result == 1)
{ 

  header('location:table.php');

}
}   

?>


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

<body>
<h1 id="h1">Login Form <div>

    <button class="btn" id="log_out" name="log_out">Log Out</button>
  </div></h1>

 <form method="POST" class="myform" enctype="multipart/form-data">
    <div class="form-group">
      <label for="fname"><b>Firstname:</b></label>
      <input type="text"  class="form-control" placeholder="Enter Firstname" name="fname" value="<?php echo $row['firstname'] ?> "  required="required">
  </div>

  <div class="form-group">
    <label for="lname"><b>Lastname:</b></label>
    <input type="text" placeholder="Enter Lastname" name="lname"  class="form-control" value="<?php echo $row['lastname']?>" required="required">
    </div>

    <div class="form-group">
    <label for="email"><b>Email</b></label>
    <input type="Email" placeholder="Enter Email" name="email" class="form-control" value="<?php echo $row['email']?>" required="required">
    </div>

     <div class="form-group">
    <label for="cname"><b>Mobile No:</b></label>
   <input type="tel" id="cname" name="cname"  placeholder="Enter mobile no"  value="<?php echo $row['mobile_no']?>" pattern='\d{2}\d{4}\d{4}' required="required">
    </div>
    <div class="form-group">
    <label for="state"><b>State</b></label>
    <select  id="state"name="state" value="<?php echo $row['state']?>" required="required">
      <option value="Gujarat">Gujarat</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Punjab">Punjab</option>
    </select>
    </div>

    <div class="form-group">
    <label for="city"><b>City</b></label>
    <select id="city" name="city" value="<?php echo $row['city']?>" required="required">
      <option value="Rajkot">Rajkot</option>
      <option value="Ahmedabad">Ahmedabad</option>
      <option value="Suart">Surat</option>
      <option value="Suart">Baroda</option>
    </select>
    </div>

    <div class="form-group">
    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  name="password"  class="form-control" value="<?php echo $row['pass']?>" required="required">
    </div>


   <div class="form-group">
   <label for="address">Address:</label><br>
    <input type="text" name="address" placeholder="Enter your address.." class="form-control" value="<?php echo $row['address']?>" required="required">
  </div>

     <div class="form-group">
    <label for="image">Image</label><br>
    <input type="file" name="image" id="image" class="form-control" value="<?php echo $row['image']?>">
  </div>


  <div>
    <button  name="submit" class="btn"> Register </button>
  </div>

</form>
</body>
</html>