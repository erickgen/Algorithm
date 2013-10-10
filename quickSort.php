<?php
// 快速排序
function quick_sort($arr) {
        if (count($arr)&lt;=1) {
                return $arr;
        }
 
        $first_val = $arr[0];
        $left_arr = [];
        $right_arr = [];
        for($i=1; $i&lt;count($arr); $i++) {
                if ($arr[$i] &lt;= $first_val) {
                        $left_arr[] = $arr[$i];
                } else {
                        $right_arr[] = $arr[$i];
                }
        }
 
        $left_arr = quick_sort($left_arr);
        $right_arr = quick_sort($right_arr);
 
        return array_merge($left_arr, array($first_val), $right_arr);
}
 
$arr = [1,99,87,2,5,9,1999,899,777];
 
$arr = quick_sort($arr);
var_dump($arr);
