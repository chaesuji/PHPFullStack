<?php
    // 모든 함수는 return 키워드가 있어야 함 > 호출한 곳으로 돌아가기 위해
    // return 함수 (return 값이 있는 함수), return 
    function sum($n1, $n2){
        return $n1 + $n2;
    }

    // void 함수 (return 값이 없는 함수)
    function sum2($n1, $n2){ // $n1, $n2 = 매개변수(parameter)
        echo $n1 + $n2;
    }
    sum(1,2); 
    echo sum(1,2);
    // sum2(3,6); // 호출 할 때 함수, 함수값만 > 매개변수로 값 복사

    
?>