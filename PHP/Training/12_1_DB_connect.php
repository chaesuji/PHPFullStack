<?php
    // 사번이 10005 이하인 사원의 사번, 이름(성 이름), 성별, 생일 
    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
    // var_dump($dbc);

    $result_query = mysqli_query($dbc, "SELECT emp_no, concat(last_name, ' ', first_name), gender, birth_date FROM employees where emp_no <= 10005;");
    // $result_row = mysqli_fetch_row($result_query);
    // while ($result = mysqli_fetch_assoc($result_query)) {
    //     // var_dump($result);
    //     foreach ($result as $value) {
    //         echo $value."\n";
    //     }
    // }
    // if(empty($result)){ // empty() : 값이 0이거나 false일 때도 true를 반환함
    //     echo "ERROR : 데이터 없음";
    // }

    // 에러를 나중에 확인
    $flg_cnt = false;
    while($result = mysqli_fetch_assoc($result_query)){
        echo implode(" ", $result),"\n";
        $flg_cnt = true; 
        // while이 실행 O - $flg_cnt = true / while이 실행 X - $flg_cnt = false
    }
    if(!$flg_cnt){ // ! : 값 반전, 값이 다르면 실행 
        // $flg_cnt = false > ! > $flg_cnt = true > false != true > echo "ERROR" 실행
        // $flg_cnt = true > ! > $flg_cnt = false > false = false > echo "ERROR" 실행 X
        echo "ERROR";
    }

    // if(mysqli_num_rows($result_query) === 0){ // num_rows : 쿼리문에서 확인한 총 레코드 수를 반환
    //     echo "ERROR";
    // }else{
    //     while($result = mysqli_fetch_assoc($result_query)){
    //         echo implode(" ", $result),"\n";
    //     }
    // }
?>