<?php
// 插入排序
function insertSort($arr) {
        $count = count($arr);
        if ($count <= 1) {
                return $arr;
        }
 
        for($i=1; $i<$count; $i++) {
                $cur_val = $arr[$i];
                $j = $i-1;
                while(isset($arr[$j]) && $arr[$j]>$cur_val) {
                        $arr[$j+1] = $arr[$j];
                        $arr[$j] = $cur_val;
                        $j--;
                }
        }
 
        return $arr;
}
 
$arr = [1,88,5,77,99,98,97,55,56,52,59,37];
$arr = insertSort($arr);
var_dump($arr);
