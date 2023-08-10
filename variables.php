
<?php
 // variables scop

 $a = 5;

 function add(){
    global $a;
    $b = 5;     // local scop
    echo $a + $b;
 }
add();
//echo $b;  //generat error 
?>