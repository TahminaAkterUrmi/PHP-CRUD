<?php

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width= device-width, initial-scale=1.0">
<title>Crud Operation</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
 <body>
   <h1 style="text-align: center;">Users List </h1>
 <div class="container">

<button class="btn btn-primary my-5"><a href="create.php" class="text-light">Add User</a>

</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 
 $sql= "select * from users";
 $result= mysqli_query($con, $sql);
 if ($result){
    while($row= mysqli_fetch_assoc($result)){
 $id = $row['id'];
 $name = $row['name'];
 $email = $row['email'];
 $mobile = $row['mobile'];
 $address = $row['address'];
 echo ' <tr>
 <th scope="row">'.$id.'</th>
 <td>'.$name.'</td>
 <td>'.$email.'</td>
 <td>'.$mobile.'</td>
 <td>'.$address.'</td>
 <td>


<button class="btn btn-secondary"><a href="update.php? updateid= '.$id.'" class= "text-light">Update</a></button>

<button class = "btn btn-danger" ><a href="delete.php? deleteid= '.$id.'" class= "text-light">Delete</a></button>
</td>
</tr>';

    }
   
 }

?>

    
  </tbody>
</table>

 </div>


 </body>
</html>