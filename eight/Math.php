<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function LastRemaining_Solution($n, $m) {
    if($m == 1){
        return $n;
    }
    $arr = range(1, $n);
    $num = 1;
    while (count($arr) > 1) {
        foreach ($arr as $k => $v) {
            if($num  == $m){
                unset($arr[$k]);
                array_values($arr);
                $num = 1;
                continue;       
            }
            $num++;
        }    
    }
    return implode($arr);
}
  
var_dump(LastRemaining_Solution(2,2));
