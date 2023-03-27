<?php
    // foreach : 배열 수 만큼 반복
    // foreach($array(배열 변수명) as $key(배열안에 있는 키) => $val(배열 안에 있는 값){}
    // foreach($array as $val){}

    $arr1 = array(
        "key1" => "val1",
        "key3" => "val3",
        "key4" => "val4",
        "key2" => "val2",
    );

    // foreach($arr1 as $key => $val){
    //     echo $key." : ".$val."\n";
    // }
    foreach($arr1 as $val){
        echo $val."\n";
    }
?>