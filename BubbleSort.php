<?php
// 冒泡排序
function bubbleSort($arr){  
        $count = count($arr);
        if ($count &lt;= 1) {
                return $arr;
        }
 
        for($i = 0; $i&lt;$count; $i++) {                
            for($j=$count-1; $j&gt;$i; $j--) {
                        if ($arr[$j] &lt; $arr[$j-1]) {
                                $tmp = $arr[$j];
                                $arr[$j] = $arr[$j-1];
                                $arr[$j-1] = $tmp;
                        }
                }
        }
        return $arr;
} 
 
$arr = [1,99,3,77,5,998,7];
 
$arr = bubbleSort($arr);
var_dump($arr);
