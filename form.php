<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>fprm Handling using php</title>
    
</head>
<body>
    
<!-- <form action="test.php" method="post"> 
    <label for="fname"> Firstname </label>
    <input type="text" name="firstname">
    <br>
    <br>
    <label for="lname"> Lasttname </label>
    <input type="text" name="lasttname">
    <br>
    <br>
    <label for="email"> Email </label>
    <input type="email" name="email">
    <br>
    <br>
    <input type="submit" name="submit">
</form>
-->
<?php

Include('test.php');
?>
    <div class="container">
<form action="form.php" method="post" class="form-group">
    <label for="name"> Name </label>
    <input type="text" name="name" class="form-control">
    <label for="name"> Age </label>
    <input type="number" name="age" class="form-control">
    <label for="name"> Gender </label>
    <input type="text" name="gender" class="form-control">
    <input type="submit" name="save" class="btn btn-primary">

</form>
<?php

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $query = "INSERT INTO `classstd` (`name`, `age`, `gender`) VALUES ('$name', '$age', '$gender')";

    $result = mysqli_query($connection, $query);
    if(!$result){
        echo "data insertion failed";
    }
}
?>
</div>
</body>
</html>