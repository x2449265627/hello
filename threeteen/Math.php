<?php

class Math {

    public static function sum($m, $n) {
        if ($n == 0) {
            return $m;
            die;
        }
        echo $m;
        $a = $m ^ $n;
        $b = ($m & $n) << 1;
//        echo $a.'---'; 
//        echo $b;
//        echo "<br>";
        return self::sum($a, $b);
    }

}

$res = Math::sum(2, 3);
echo $res;
