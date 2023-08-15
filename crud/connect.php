
<?php

$conn = mysqli_connect("localhost", "root", "", "classc2");

if($conn){
    echo "connected";
}
else{
    die("connection error");
}
?>