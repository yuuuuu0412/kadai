<?php
//1
function f1($value){
$result = $value *= 2;
return $result;
}
//echo f1();

//2
function f2($a, $b){
$result = $a + $b;
return $result;
}
//echo f2( , );

//3
$arr = array(1,3,5,7,9);

function f3($arr){
  $result = 1;
  foreach ($arr as $arr) {
    $result *= $arr;
  }
  return $result;
}
//echo f3($arr);

//4
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $arr){
  if($max_number <= $arr){
   $max_number = $arr;
  }
}
return $max_number;
}
 //echo max_array($arr);

//5
$string = "<h1>タイトル</h1>";
strip_tags($string);

$array2 = array("1", "2" );
array_push($array2, "3");

$array3 = array("1", "2", "3");
$array4 = array("4", "5", "6");
array_merge($array3, $array4);

echo date("Y年m月d日 l", time());
echo date("l", mktime(0,0,0,8,15,1945));
 ?>
