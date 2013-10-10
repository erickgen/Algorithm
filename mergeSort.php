<?php
// 二路归并
$input = array(6, 5, 3, 1, 8, 7, 2, 4);
 
function mergeSort($arr) {
        if (count($arr) <= 1) {
                return $arr;
        }
 
        $left  = array_slice($arr, 0, (int)(count($arr)/2));
        $right = array_slice($arr, (int)(count($arr)/2));
 
        $left = mergeSort($left);
        $right = mergeSort($right);
 
        $ret = merge($left, $right);
 
        return $ret;
}
 
function merge($left, $right) {
        $ret = [];
        while(count($left) > 0 && count($right) > 0) {
                if ($left[0] < $right[0]) {
                        array_push($ret, array_shift($left));
                } else {
                        array_push($ret, array_shift($right));
                }
        }
        array_splice($ret, count($ret), 0, $left);
        array_splice($ret, count($ret), 0, $right);
        return $ret;
}
 
$output = mergeSort($input);
var_dump($output);
