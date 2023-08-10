
<?php

$connection = mysqli_connect("localhost", "root", "", "classC2");

if($connection){
    echo "connected";
}
else{
    die("connection error");
}
?>