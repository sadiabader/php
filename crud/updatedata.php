
<?php
include('connect.php');

$ID = $_POST['id'];
$NAME = $_POST['name'];
$AGE = $_POST['age'];
$GENDER = $_POST['gender'];
$EMAIL = $_POST['email'];

$update = "update `students` set id = '$ID', name = '$NAME', age '$AGE',
 gender '$GENDER', email '$EMAIL' where id = $ID";
 
$res = mysqli_query($conn, $update);
if(!$res){
    die("query failed");
}
header('location:http://localhost/practice_php/crud/userall.php');
?>