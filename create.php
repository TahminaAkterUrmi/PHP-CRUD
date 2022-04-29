<?php 
include 'connection.php';

if(isset($_POST['submit'])){
  $name = $_POST['name']; 
  $email = $_POST['email']; 
  $mobile = $_POST['mobile']; 
  $address = $_POST['address']; 

 $sql = "insert into users (name, email, mobile, address) values('$name', '$email', '$mobile', '$address')";

$result = mysqli_query($con, $sql);
if ($result){


  //  echo "Data inserted successfully";
  header('location:view.php');
}
else{
  die(mysqli_error($con));
}
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
    <h1 style="text-align: center;">Add New User</h1>
   <div class="container my-5">


   <form    method="POST">
  <div class="form-group">
    <label >Name:</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter user name......" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >Email:</label>
    <input type="email" class="form-control" name="email"  placeholder="Enter user email ......"autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >Mobile:</label>
    <input type="number" class="form-control" name="mobile"  placeholder="Enter user mobile number......"autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >Address:</label>
    <input type="text" class="form-control" name="address"  placeholder="Enter user address......"autocomplete="off">
    
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


   </div>

   
  </body>
</html>