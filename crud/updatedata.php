
<?php
include('connect.php');

$Id = $_POST['id'];
$Name = $_POST['name'];
$Age = $_POST['age'];
$Gender = $_POST['gender'];
$Email = $_POST['email'];

$subdataquery = "update `students` set name = '$Name', age '$Age', gender '$Gender', email '$Email' where id = '$ID'";
$result = mysqli_query($connection, $subdataquery);
if(!$result){
    die('query failed');
}
header('Localhost:http://localhost/practice_php/crud/updatedata.php')
?>