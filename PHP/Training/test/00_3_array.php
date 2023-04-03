<?php
    // 배열
    $arr_i = array(1,2,3);
    var_dump($arr_i);

    // 배열안의 특정 값 출력
    echo $arr_i[1];

    // 연상 배열
    // key : std_no, std_name, std_age, std_gender
    $arr_acc = array("std_no"=>23, "std_name"=>"채수지", "std_age"=>21, "std_gender"=>"F");
    // var_dump($arr_acc);
    echo $arr_acc["std_name"];

    // 다차원 배열
    $arr_acc = array(
        "std_no"=>23, 
        "std_name"=>"채수지", 
        "std_age"=>21, 
        "std_gender"=>"F", 
        "std_secret_info"=>array(
            "std_city_no"=>0716,
            "std_addr"=>"대구 중구 중앙대로",
            "std_top_secret"=>array(
                "std_top"=>"??"
            )
        ));
    echo $arr_acc["std_age"];
    echo $arr_acc["std_secret_info"]["std_addr"];
    echo $arr_acc["std_secret_info"]["std_top_secret"]["std_top"];

    // foreach : 배열을 배열 크기 만큼 루프해서 연산을 하고 싶을 떄
    $arr_acc = array("std_no"=>23, "std_name"=>"채수지", "std_age"=>21, "std_gender"=>"F");
    foreach ($arr_acc as $key => $value) {
        echo "\n".$key." : ".$value;
    }
    
    echo "\n";

    // 루프를 돌려서 나이만 출력되게 프로그램을 만들어주세요
    // 나이에 +10을 더한 값을 출력
    foreach ($arr_acc as $key => $value) {
        if ($key === "std_age") {
            echo $value;
            $arr_acc[$key] += 10;
        }
    }
    var_dump($arr_acc);
?>