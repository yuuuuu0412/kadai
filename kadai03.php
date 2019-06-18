<?php
//1
$name = "yu";
if ($name = "yu") {
echo "私は " . $name;
echo " です";
} else {
  echo "あなたの名前ではありません";
}

//2
$total = 0;
for ($i=1; $i <= 10000; $i++) {
$total += $i;
}
echo $total;

//3
$fruits = array("apple", "orange", "lemon", "banana", "cherry");
//$fruits = ["apple", "orange", "lemon","banana", "cherry"];
foreach ($fruits as $fruits) {
 echo $fruits;
}

//4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

?>
