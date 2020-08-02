<?php

function maoPao($arr)
{
    $len = count($arr);
    $n = count($arr) - 1;

    for($i = 0; $i < $len; $i++)
    {
        for($j = 0; $j < $n - $i; $j++)
        {
            if ($arr[$j] > $arr[$j + 1])
            {
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

$arr = [2,3,6,8,4,0];
print_r(maoPao($arr));