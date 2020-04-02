<?php
$arr = array(1,24,44,66,88,99,101,102,167,177,999);
$arr_val = 101;
function search($arr,$arr_val){
    foreach ($arr as $k=> $v){
        if($arr_val == $v){
            print_r( $v);
        }
    }
}
return search($arr,$arr_val);
