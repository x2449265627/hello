<?php

// 这是是个字符串
$str = "hello word";

//1. substr  测试字符串长度   结果是10
$sub_len = strlen($str);
//echo $sub_len;
//
//2.substr 字符串替换  结果wpr
$res = substr($str, 6, 3);
//echo $res;
//3. substr_replace字符串替换 第一个是str 第二个 是替换成啥 第三个是开始位置 第四个是结束位置
$res = substr_replace($str, 'shijie', 6);
//echo $res;
//4.strpos 字符查找 查找 字符在字符串中第一次出现的位置
$res = strpos($str, 'o');
//echo $res;
//5.字符串分隔  把每个字符串分隔成开 组成一个数组
$res = str_split($str);
//var_dump($res);
//6  substr_compare 字符串 比较 不知道什么东西
$str2 = 'asdqwera';
$str3 = 'qweSSSwq';
$res = substr_compare($str2, $str3, 0);
//echo $res;
//7  strrev  字符串反转
$res = strrev($str);
//echo $res;
//8 strtoupper  字符串转大些 
$res = strtoupper($str);
//echo $res;
//9  strtolower 字符串转小写
$res = strtolower($str3);
//echo $res;
//10explode  把字符串转成数组
//var_dump(explode(' ',$str));
//这是数组
$arr = ['name' => '小明', 'sex' => '男'];
$arr1 = ['a', 'b', '', 'c', 'a', ''];

//1.in_array 判断字符串在不在数组里 
$res = in_array('a', $arr1);
//echo $res;
//2. array_merge  合并数组 
$res = array_merge($arr1, $arr);
//var_dump($res);
//3 array_filter 删除数组中空元素
$res = array_filter($arr1);
//var_dump($res);
//4 array_keys 返回数组中所有的键值
$res = array_keys($arr);
//var_dump($res);
//5. array_sum  计算数组中所有值得和 值为int行
$res = array_sum(['11', '22', '55']);
//var_dump($res);
//6 array_unique 字符串 去重复的值
$res = array_unique($arr1);
//var_dump($res);
//7 删除字符串第一个值
$res = array_shift($arr);
//var_dump($res);
//8 合并俩个数组 一个为下表 一个为值 俩个字符串长度 必须相等
$arr3 = ['name', 'sex', 'age'];
$arr4 = ['小明', '男', '18'];
$res = array_combine($arr3, $arr4);
//var_dump($res);
//9 array_push 添加一个元素 在数组的末尾
$res = array_push($arr, 'ss');

//10count 统计长度
$res = count($arr);
//var_dump($res);

for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        break;
    }
    echo $i;
}
echo "<br/>";
for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i;
}
echo "<br/>";

$str = 'ajajajd';
$arr = str_split($str);
foreach ($arr as $key => $value) {

    if ($value == ' ') {

//        echo "kongle";
        unset($arr[$key]);
    }
}
$res = array_count_values($arr);
$a = 1;
foreach ($res as $k => $v) {
    if ($v >= 3) {
        $res1[$k] = strpos($str, $k);
    }
}
foreach ($res1 as $k => $v) {

    foreach ($arr as $key => $value) {

        if ($k == $value) {

            $a++;
            if ($a >= 3) {
                $num[$k] = $key;
            }
        }
    }
}
$b = strlen($str);
var_dump($num);
foreach ($num as $key => $value) {
    if ($b > $value) {
//        echo $k;
    $last = $key;
//        $last = $k;
        $b = $value;
    }
}

echo $last;
