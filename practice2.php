<?php

// 課題１ 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($i) {
    $result = 0;
    $result = $i * 2;
    return $result;
}

echo double(10);

// 課題２ $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

function sum($a, $b) {
    $result = $a + $b;
    return $result;
}

echo sum(5,6);

// 課題３ $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function p($arr) {
    $total = 1;
    foreach($arr as $ar) {
      $total *= $ar;  
    } 
    return $total;
}

echo p(array(1, 3, 5, 7, 9));


// 課題４ 【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

 function max_array($arr){
   $max_number = $arr[0];
   foreach($arr as $a){
     if($max_number < $a) {
         $max_number = $a;
     }
  }
  return $max_number;
 }
 echo max_array(array(8, 9, 6, 5, 4, 3, 2, 1, 7));

// 課題５ 次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

// strip_tags
$str = "<h1>php_practice</h1>";
echo strip_tags($str);

//array_push
$fruits = array("apple", "melon", "grape");
array_push($fruits, "orenge", "banana");
print_r($fruits);

//array_merge
$fruits1 = array("apple", "melon", "grape");
$fruits2 = array("banana", "peach");
$fruits = array_merge($fruits1, $fruits2);
print_r($fruits);

//time, mktime
echo time();

$yesterday = mktime(0, 0, 0, 10, 12, 2019);
echo $yesterday;

//date
echo date('Y年m月d日 H時i分s秒');
