<?php
// 課題１

$name = "tomoya";
if($name ="tomoya") {
    echo "私はあなたの名前です。";
} else {
    echo "あなたの名前ではありません。";
}

// 課題２

$total = 0;
for($i = 0; $i <= 10000; $i++)  {
    $total += $i;
}
echo $total;

// 課題３

$fruits = array("apple", "banana", "orenge", "grape", "melon");

foreach($fruits as $fruit) {
    echo $fruit;
}

// 課題４

for($i = 1; $i <= 100; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
} ?>