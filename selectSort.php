<?php
// 选择排序
function selectSort($arr){  
        $count= count($arr);  
        if($count<=1){  
                return $arr;  
        }  
        for($i=0;$i<$count;$i++){  
                $k= $i;  
                for($j=$i+1;$j<$count;$j++){  
                        if($arr[$k] >$arr[$j]){ 
                                $k= $j;
                        }
                        if ($k!= $i){  
                                $tmp = $arr[$i];  
                                $arr[$i] =$arr[$k];  
                                $arr[$k] =$tmp;  
                        }  
                }  
        }  
        return$arr;  
} 
 
$arr = [11,3,51,7,99,33,55,9];
$arr = selectSort($arr);
var_dump($arr);
