<?php
    // 4. 비교 연산자
    var_dump(1 > 2);
    var_dump(1 < 2);
    var_dump(1 <= 1);
    var_dump(1 >= 1);
    var_dump(1 == '1'); // 문자가 같음
    var_dump(1 === '1'); // 문자, 데이터 형식이 같음

    var_dump(1 != '1'); // 부분 일치 비교
    var_dump(1 !== '1'); // 완전 일치 비교

    // 5. 논리 연산자
    var_dump(1 == 1 && 2 == 2); // &&(and) 둘 다 참일 경우 true
    var_dump(1 == 1 || 2 == 23); 
    // ||(or) 둘 중 하나가 참일 경우 true, 둘 다 틀리면 false
    // xor : 둘의 값이 같으면 true 값이 다르면 false
    var_dump(!(1 == 1));
    // !(not) : 값이 false > true / true > false

    echo 1 > 2 ? '참' : '거짓';
    // 3항 연산자 - 조건 ? 참일 경우 : 거짓일 경우 
?>