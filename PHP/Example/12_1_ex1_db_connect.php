<?php
    // DB 연결($변수 = mysqli_connect()) ~ 연결 끊기(mysqli_close();)
    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
    // php.ini > extension = mysqli 주석 제거(;)
    // var_dump($dbc);

    // 쿼리 요청
    $result_query = mysqli_query($dbc, "SELECT emp_no,first_name FROM employees LIMIT 10;");
    // row 일반배열 : result_query로부터 결과 값을 배열로 변환, 컬럼명 X 
    $result_row = mysqli_fetch_row($result_query);
    var_dump($result_row);
    // while($temp_row = mysqli_fetch_row($result_query)){
    //     var_dump($temp_row);
    //     // echo $temp_row[0],", ";
    // }

    // assoc 연관배열 : DB 상의 컬럼명과 함께 출력
    while($temp_assoc = mysqli_fetch_assoc($result_query)){ // $result_query의 쿼리문을 가져와서 실행 값을 한 줄씩 $temp_assoc에 넣음
        var_dump($temp_assoc["first_name"]); // 쿼리문의 컬럼 중 first_name만 나오게 출력
    }

    mysqli_close($dbc);
?>