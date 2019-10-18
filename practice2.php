<?php

// 課題１

function double($i) {
    $result = 0;
    $result = $i * 2;
    return $result;
}

echo double(10);

// 課題２

function sum($a, $b) {
    $result = $a + $b;
    return $result;
}

echo sum(5,6);

// 課題３

function p($arr) {
    $total = 1;
    foreach($arr as $ar) {
      $total *= $ar;  
    } 
    return $total;
}

echo p(array(1, 3, 5, 7, 9));


// 課題４

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

// 課題５
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
