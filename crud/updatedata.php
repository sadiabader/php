
<?php
include('connect.php');

$ID = $_POST['id'];
$NAME = $_POST['name'];
$AGE = $_POST['age'];
$GENDER = $_POST['gender'];
$EMAIL = $_POST['email'];
$PASS = $_POST['password'];

$update = "update `students` set name = '$NAME', age ='$AGE',
 gender ='$GENDER', email = '$EMAIL', password = '$PASS' where id = '$ID'";
 
$resu = mysqli_query($conn, $update);
if(!$resu){
    die("query failed");
}
header('location:http://localhost/practice_php/crud/userall.php');
?>



