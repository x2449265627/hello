<?php

for ($i = 100; $i <= 999; $i++) {
    //各位 

    $num1 = $i % 10;
    $num2 = $i / 10 % 10;
    $num3 = $i / 10 / 10 % 10;
    if ($i == $num1 * $num1 * $num1 + $num2 * $num2 * $num2 + $num3 * $num3 * $num3) {
        echo "<br>";
        echo $i;
    }
}
//三个计算1-100的值
//1
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum = $i + $sum;
}
echo "<br>";
echo $sum;

//2
$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
}
$sum2 = array_sum($arr);
echo "<br>";
echo $sum2;

//3
$sum3 = 0;
$i = 0;
while ($i <= 100) {
    $sum3 = $sum3 + $i;
    $i++;
}
echo "<br>";
echo $sum3;


$str = 'abkkkkkk';
$str2 = strrev($str);

if ($str2 == $str) {
    echo "是回文";<?php

for ($i = 100; $i <= 999; $i++) {
    //各位 

    $num1 = $i % 10;
    $num2 = $i / 10 % 10;
    $num3 = $i / 10 / 10 % 10;
    if ($i == $num1 * $num1 * $num1 + $num2 * $num2 * $num2 + $num3 * $num3 * $num3) {
        echo "<br>";
        echo $i;
    }
}
//三个计算1-100的值
//1
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum = $i + $sum;
}
echo "<br>";
echo $sum;

//2
$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
}
$sum2 = array_sum($arr);
echo "<br>";
echo $sum2;

//3
$sum3 = 0;
$i = 0;
while ($i <= 100) {
    $sum3 = $sum3 + $i;
    $i++;
}
echo "<br>";
echo $sum3;


$str = 'abkkkkkk';
$str2 = strrev($str);

if ($str2 == $str) {
    echo "是回文";
} else {
    echo "不是回文";
}
} else {
    echo "不是回文";
}