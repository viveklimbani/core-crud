<?php
    include('config.php');
    $insert_data='INSERT INTO school.students(firstname,lastname,email,mobile_no,state,city,password,address,image) values 
    ("vivek","limbani","viveklimbani@gmail.com",1234567890,"gujarat","rajkot","vivek@123","aaaaaaaaaaaa",".jpg")';

    if($conn->query($insert_data)==true){
        echo "data inserted successufully<br><br>";
    }
    else{
        echo "error inserting data<br>".$conn->error."<br><br>";
    }
?>
