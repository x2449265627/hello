<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Math {

    public static function calFn($n, $m) {
        $num = 0;
        for ($i = $n; $i <= $m; $i++) {
            $len = strlen($i);
            for ($j = $len; $j > 0; $j--) {
                if (($i / pow(10, $j - 1)) % 10 == 1) {
                    $num++;
                }
            }
        }
        return $num;
    }

}

$res = Math::calFn(10,1500);
echo $res;