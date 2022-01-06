<?php
     define("siteName", "http://localhost:80/php_pro/docs.php");
     echo siteName . "" . "<br>";
     //number 1
     
   echo nl2br("alaa \n khaled \r\n mohamed ");
      echo "<br>********************";

      //number 2
      echo"<br>";
      echo strtolower("Hello GUYS.");
      echo "<br>";
      echo strtoupper("Hello everybody!");
      echo "<br>";
      echo str_repeat("Hiiiiii",10);
      echo"<br>";
      echo"***********************";
       
      //number 3
   echo "<br>";

      foreach($_SERVER as $key => $value ){
      echo nl2br('['.$key.'] :'.$value."\n");
}
   
echo "<br>**********************<br>";

      




      //number 4

    
 echo"<br>";
    $a=array(12,45,10,25);
    $length = count($a);
echo array_sum($a);
echo"<br>";
  $average=array_sum($a)/$length;
echo $average;
echo"<br>";
echo"*********************";

echo"<br>";

sort($a);
for($i = $length-1; $i >= 0; $i--) {
  echo $a[$i];
  echo "<br>";
 
}
echo"**********************";

echo "<br>";

//number 5
$age = array("noha"=>"31", "alaa"=>"41", "walaa"=>"39");
asort($age);

foreach($age as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

echo"**********************";

echo "<br>";

$age = array("noha"=>"31", "alaa"=>"41", "walaa"=>"39");
ksort($age);

foreach($age as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";

}

echo"**********************";

echo "<br>";


$age = array("noha"=>"31", "alaa"=>"41", "walaa"=>"39");
arsort($age);

foreach($age as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";

}

echo"**********************";
echo "<br>";


$age = array("noha"=>"31", "alaa"=>"41", "walaa"=>"39");
krsort($age);

foreach($age as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";

}

?>
