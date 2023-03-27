<?php
    // 중복되지 않는 원소를 반환 : array_diff()
    $arr_diff_1 = array("a", "b", "c",);
    $arr_diff_2 = array("a", "b", "d",);
    $arr_diff = array_diff($arr_diff_1, $arr_diff_2);
    // 앞에 오는 배열이 기준, diff_1 에는 있지만 diff_2는 없는 값 반환
    print_r($arr_diff);

    // 배열의 정렬 : asort(), arsort(), ksort(), krsort();
    // asort() > 배열의 값들을 오름차순으로 정렬
    $arr_asort = array("b", "a", "d", "c");
    asort($arr_asort);
    print_r($arr_asort);

    // arsort() > 배열의 값들을 내림차순으로 정렬
    $arr_arsort = array("b", "a", "d", "c");
    arsort($arr_arsort);
    print_r($arr_arsort);

    // ksort() : 배열의 키(인덱스)를 기준으로 오름차순으로 정렬 > 연상배열
    $arr_ksort = array(
                        "key1" => "val1",
                        "key3" => "val3",
                        "key4" => "val4",
                        "key2" => "val2",
                    );
    ksort($arr_ksort);
    print_r($arr_ksort);

    // krsort() : 배열의 키(인덱스)를 기준을 내림차순으로 정렬
    $arr_krsort = array(
                        "key1" => "val1",
                        "key3" => "val3",
                        "key4" => "val4",
                        "key2" => "val2",
                    );
    krsort($arr_krsort);
    print_r($arr_krsort);

    // count() : 배열의 사이즈를 반환하는 함수
    echo count($arr_krsort);
?>