<?php
    // $arr_base = array(1,2,3,4,5);
    // echo my_len($arr_base);

function my_len($arr_base){
    // $leng = func_get_args();
    $leng_val = 0;
    foreach ($arr_base as $value) {
        $leng_val++;   
    }
    return $leng_val; // return 을 만나면 반복 종료
}
$arr_base = array(1,2,3,4,5,6);
echo my_len($arr_base);


function star($int_b){
    for($int_a=null; $int_a<=$int_b; $int_a++){
        for($int_c=null; $int_c<$int_a; $int_c++){
            echo "*";
        }
        echo "\n";
    }
}
echo star(5);

function star_rect($int_b,$int_d){
    for($int_a=null; $int_a<=$int_b; $int_a++){
        for($int_c=null; $int_c<=$int_d; $int_c++){
            echo "*";
        }
        echo "\n";
    }
}
echo star_rect(5,3);

// 별, 줄바꿈 
function print_star(){
    for($int_a=null; ){

    }
}
echo print_rect(15);
?>