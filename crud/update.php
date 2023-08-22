<?php
include('connect.php');

$user_id = $_GET['id'];
//echo $user_id;
$sqlquery = "select * from `students` where id = '$user_id'";

$res = mysqli_query($conn, $sqlquery);
if(!$res){
    die("query failed");
}
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        
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
<form action="updatedata.php" method="post" class="form-group">
<label for="name"> Id </label>
    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']?>">
    <label for="name"> Name </label>
    <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
    <label for="name"> Age </label>
    <input type="number" name="age" class="form-control"value="<?php echo $row['age']?>" >
    <label for="name"> Gender </label>
    <input type="text" name="gender" class="form-control"value="<?php echo $row['gender']?>">
    <label for="name"> Email </label>
    <input type="email" name="email" class="form-control" value="<?php echo $row['email']?>">
    <input type="submit" name="save" value="update" class="btn btn-primary">

</form> 
</div>
<?php
   }
}
?>
</body>
</html>


