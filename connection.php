
<?php
$connection = mysqli_connect("localhost", "root", "", "classwork");
if($connection){
    echo"connected";
}
    else{
        die("connection error");
    }

?>