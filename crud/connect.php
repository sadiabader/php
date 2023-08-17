
<?php
$connection = mysqli_connect("localhost", "root", "", "classc2");
if($connection){
    echo"connected";
}
    else{
        die("connection error");
    }

?>