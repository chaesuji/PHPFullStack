<?php
    // foreach문을 이용해서 키가 "삭제"인 요소를 제거해 주세요
    $food_2 = array(
        "김치찌개" => "김치"
        , "부대찌개" => "햄"
        , "삭제" => "값값"
        , "된장찌개" => "된장"
        , "비지찌개" => "콩비지"
        , "계란찜" => "계란"
    );

    foreach($food_2 as $key => $val){
        if($key === "삭제"){
            // unset($food_2["삭제"]);
            unset($food_2[$key]);
        } else {
        echo $key." : ".$val."\n";
        }
    }
    print_r($food_2);
?>