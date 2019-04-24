<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Math {

    public function Sum_Solution($n) {
        $num = $n;
        $num && ($num += $this->Sum_Solution($n - 1));
        return $num;
    }

}

$math = new Math();
$res = $math->Sum_Solution(100);
echo $res;
