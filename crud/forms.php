<?php

// mysqli_connect --> establish the connection with the database
// myslqli_query --> connects the query with the database
// mysqli_numrows --> if any row exist in database or not
// mysqli_fetch_assoc --> fetch the associative array

// connection management
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="container">
<form action="forms.php" method="post" class="form-group">
    <label for="name"> Id </label>
    <input type="text" name="id" class="form-control">
    <label for="name"> Name </label>
    <input type="text" name="name" class="form-control">
    <label for="name"> Age </label>
    <input type="number" name="age" class="form-control">
    <label for="name"> Gender </label>
    <input type="text" name="gender" class="form-control">
   <label for="name"> Email </label> 
    <input type="email" name="email" class="form-control">
    <label for="name"> Password </label> 
    <input type="password" name="password" class="form-control">
    <input type="submit" name="save" value="Update" class="btn btn-primary">
    <input type="submit" name="save" value="Delete" class="btn btn-primary"> 

</form> 
<?php
if(isset($_POST['save'])){
   // $id = $_POST['Id'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

$query = "INSERT INTO `students` (`id`, `name`, `age`, `gender`, `email`) VALUES ('$id','$name', '$age', '$gender', '$email')";

$result = mysqli_query($conn, $query);
if(!$result){
    echo "data insertion failed";
}


 header('Location:http://localhost/practice_php/crud/userall.php');
}


?>
</body>
</html>