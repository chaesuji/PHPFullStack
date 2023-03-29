<?php
    $arr = array(5, 10, 7, 3, 1);

    // $temp = $arr[0];
    // $arr[0] = $arr[1];
    // $arr[1] = $temp;

    // print_r($arr);


    // foreach ($arr as $key => $val) {
    //     if ($arr[0] <= $arr[1]){
    //         $arr[1].$key = $arr[0].$key;
    //     } else {
            
    //     }
    // }
    
    $arr_count = count($arr);

    // for($a=0; $a<$arr_count; $a++){ // for이 돌면서 비교를 하는 횟수
    //     for($i=0; $i<$arr_count; $i++){ 
    //         if($arr[$i] > $arr[$i+1]){
    //             $temp = $arr[$a];
    //             $arr[$a] = $arr[$i];
    //             $arr[$i] = $temp;
    //         }
    //     }
    // }
    // print_r($arr);

    // for($a=0; $a<$arr_count; $a++){
    //     for($i=0; $i<$arr_count; $i++){ 
    //         if($arr[$a] > $arr[$i]){
    //             $temp = $arr[$a];
    //             $arr[$a] = $arr[$i];
    //             $arr[$i] = $temp;
    //         }
    //     }
    // }
    // print_r($arr);

    // 배열 안에 최대(my_max)/최소(my_min) 값을 출력해주는 함수를 구현해주세요
    $arr = array(5, 10, 7, 3, 1);
    
    function my_max($arr){
        $max_arr = $arr[0];

        for($i=1; $i<count($arr); $i++){
            if($max_arr < $arr[$i]){
                $max_arr = $arr[$i];
            }
        }
        return $max_arr;
    }
    echo my_max($arr);

    echo "\n";

    function my_min($arr){
        $min_arr = $arr[0];

        for($i=1; $i<count($arr); $i++){
            if($min_arr > $arr[$i]){
                $min_arr = $arr[$i];
            }
        }
        return $min_arr;
    }
    echo my_min($arr);
?>