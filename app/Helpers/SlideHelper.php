<?php

namespace App\Helpers;

class SlideHelper
{
    public static function getMax($n, $k, $arr)
    {
        $sum = PHP_INT_MIN;
        for ($i = 0; $i < $n - $k + 1; $i++) {
            $current_sum = 0;
            for($j = 0; $j < $k; $j++) {
                $current_sum += $arr[$i+$j];
            }
            $sum = max($sum,$current_sum);
        }
        return $sum;
    }
}
