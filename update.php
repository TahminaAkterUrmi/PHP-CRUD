<?php 
include 'connection.php';
$id= $_GET['updateid'];
$sql = "Select * from users where  id = $id";
$result= mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$address = $row['address'];
if(isset($_POST['submit'])){
  $name = $_POST['name']; 
  $email = $_POST['email']; 
  $mobile = $_POST['mobile']; 
  $address = $_POST['address']; 

 $sql = " update users set id= '$id', name= '$name', email= '$email', mobile= '$mobile', address= '$address' where id=$id";

$result = mysqli_query($con, $sql);
if ($result){


    // echo " Updated successfully";
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
    <h1 style="text-align: center;">Update User Information</h1>
   <div class="container my-5">


   <form    method="POST">
  <div class="form-group">
    <label >Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name?>" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >Email:</label>
    <input type="email" class="form-control" name="email"  value="<?php echo $email?>"autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >Mobile:</label>
    <input type="number" class="form-control" name="mobile"  value="<?php echo $mobile?>"autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >Address:</label>
    <input type="text" class="form-control" name="address"  value="<?php echo $address?>"autocomplete="off">
    
  </div>
  
  
  <button type="submit" class="btn btn-success" name="submit">Update</button>
</form>


   </div>

   
  </body>
</html>