
<?php

/*echo "<pre>";
print_r($_GET);
echo "</pre>";*/

/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/

$connection = mysqli_connect ("localhost", "root", "", "classwork");

if($connection){
    echo "connected";
}
else{
    die("connection error" or mysqli_connect_error());
}

?>