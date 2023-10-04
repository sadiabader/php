<?php

include('config.php');

extract($_POST);
$insert = "INSERT INTO `user` (`name`, `email`, `phone`)
 VALUES('$name', '$email', '$phone')";
$result = mysqli_query($conn, $insert);
if($result){
    echo 1;
}else{
    echo 0;
}
?>