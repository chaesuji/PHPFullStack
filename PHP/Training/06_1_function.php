<?php
    // 두 매개변수의 차를 구하는 함수를 구현해주세요
    function fnc_1($int_a, $int_b){
        $minus = $int_a - $int_b;
        return $minus;

        // return $int_a - $int_b;
    }

    // 두 매개변수를 나누는 함수를 구협해주세요
    function fnc_2($int_a, $int_b){
        $divis = $int_a / $int_b;
        return $divis;
    }

    // 두 매개변수를 곱하는 함수를 구현해주세요
    function fnc_3($int_a, $int_b){
        $multi = $int_a * $int_b;
        return $multi;
    }

    // 각각의 결과를 출력해 주세요
    // $result_min = fnc_1(10, 2);
    // echo $result_min;
    // echo fnc_1(10, 2);

    // $result_div = fnc_2(10, 2);
    // echo $result_div;

    // $result_mul = fnc_3(10, 2);
    // echo $result_mul;

    // 빼기, 곱하기, 나누기를 가변 파라미터 함수로 구현해 주세요
    function fnc_minus(){
        $minus = func_get_args();
        $minus_val = 0;

        foreach ($minus as $key => $value) {
                if($key === 0){
                    $minus_val = $value;
                }else{
                    $minus_val -= $value;
                }
        }
        return $minus_val;
    }
    echo fnc_minus(10,2,5);

    function fnc_multi(){
        $multi = func_get_args();
        $multi_val = 1;

        foreach ($multi as $value) {
            $multi_val *= $value;
        }
        return $multi_val;
    }
    echo "\n".fnc_multi(5, 2, 3);

    function fnc_div(){
        $div = func_get_args();
        $div_val = 1;

        foreach ($div as $key => $value) {
            if($key === 0){
                $div_val = $value;
            }else{
                $div_val /= $value;
            }
        }
        return $div_val;
    }
    echo "\n".fnc_div(10, 2, 5);

    // function fnc_args_minus(){
    //     $args = func_get_args();
    //     $result_minus = null;

    //     foreach ($args as $key => $value) {
    //         if(is_null($result_minus)){
    //             $result_minus = $value;
    //         }else{
    //             $result_minus - $value;
    //         }
    //     }
    //     return $result_minus;
    // }

    function fnc_args_minus_2(){
        $args = func_get_args();
        $result = $args[0]*2;

        foreach ($args as $val) {
            $result -= $val;
        }
        return $result;
    }
    echo "\n".fnc_args_minus_2(10, 2, 5);
?>