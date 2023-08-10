
<?php

echo "hello world", "second statment <br>";
print "print keywor" . "second statment  <br>";

$str = "shazil";
echo $str;

$age = 20 ;   // integer
$percent = 50.6;  // floot
//$percent = flootval("50.6");  // floot
$bool = true;
echo var_dump($str) . "<br>";
echo var_dump($age) . "<br>";
echo var_dump($percent) . "<br>";
echo var_dump($bool) . "<br>";

   //array
// indexed array, assoc
$arr = array("suhaib", "shazil", "sadia", "filza");
echo "<pre>";
print_r($arr);
echo "</pre>";

$num = [1,2,3,4,5,6,7,8,9,10];  // second method
echo "<pre>";
print_r($num);
echo "</pre>";

$Str;
$Str[0] = "sadia";
$Str[1] = 20;
$Str[2] = "55.43";

echo "<pre>";
print_r($Str);
echo "</pre>";


// predefine function

echo strlen($str) . "<br>";
echo strrev($str) . "<br>";
echo strpos($str, "s");
echo str_replace("saima", "suhaib", "asma shazil");


// for loop
for($i = 0; $i < 10; $i++)
echo $num[$i]. "<br>";
  // associative array

  $ass = [
   "nmae" => "shazil",
   "age" => 04,
   "class" => "nursary"
  ];
// foreach

foreach($ass as $k => $v){
   echo "<li> $k => $v </li>";
}

// do while

/*$num = 0;
do{
   echo($num);
   $num++
}while($num <= 10);*/

 //  while loop
$i = 0;
$y;
while($num <= 10){
   $y = $i * $num;
   echo($num + $i + $y);
}
// multidemissional indexed array
$sub = [
   ["phy", "eng", "cs", "urdu"],
   ["zology", "com", "asc", "math"],
   ["bio","botany", "psycology", "physiogy"]
];
echo "<pre>";
print_r($sub);
echo "</pre>";

foreach($sub as $data){
   echo "<pre>";
print_r($data);
echo "</pre>";

foreach($data as $val){
   echo "$val <br>";
}
}
// multidemissional assocative array

$class = [
   "goodstd" => ["std1" => "shazil", "std2" => "hammad", "std3" => "filz"],
   "weekstd" => ["std1" => "samiya", "std2" => "ahmed", "std3" => "faiza"],
   "normalstd" => ["std1" => "shanza", "std2" => "sameer", "std3" => "raima"]
];
echo "<pre>";
print_r($class);
echo "</pre>";

foreach($class as $k => $v){
   echo "<b> $k </b> <br>";
   foreach($v as $key => $val){
   echo "$val <br>";
   }
}

?>


