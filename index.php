<?php
// $array_words = [3, 55, 222];
// $array_words[1] = "hello";
// $array_words[] = "sorry";
// // print $array_words[0];
// var_dump($array_words);

// $array_words_and_digits = [ 
// 	"first" => "hello" , 
//  	"second" => "googbye" , 
// 	100 => - 100 , 
//  	-100 => 100 , 
// ];

// print_r($array_words_and_digits);

// $cars = ["Volvo","BMW","Toyota"]; 

// for ($x = 0; $x < count($cars); $x++) { 
//   echo $cars[$x]; 
//   echo "\n"; 
// }

// $arr = [1, 2, 3, 4]; 
// foreach ($arr as &$value) { 
//   $value = $value * 2; 
//   echo "$value ";
// }

// print_r($arr);

// $arr = ["first" => "hello", "second" => "world"]; 
// foreach ($arr as $key => $value) { 
//   echo "$key".":"."$value\n";
// }

//5.1 Сума елементів
// $arr = [6, 2, 456, 21, 98, 7];
//   $minvalue = min($arr);
//   $maxvalue = max($arr);
//   $value = $minvalue + $maxvalue;
//   echo $value;

//5.2 Зворотний порядок
// $array = [1, 3, 5, 7, 9];
// $reversed = array_reverse($array);
// var_dump($reversed);

//5.3 Сортування елеменнтів
// $users = ["Smith" => "2001", "Jones" => "1996", "Williams" => "1999", "Brown" => "2009"];
// ksort($users);
// print_r($users);

// asort($users);
// print_r($users);

// sort($users);
// print_r($users);

//5.4 Середнє арифметичне
// $numbers = [28, 9, 43, 66, 1];
// $sum = array_sum($numbers);
// $value = $sum / count($numbers);
// echo $value;