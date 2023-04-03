<?php
    // 아래 쿼리로 결과를 출력하는 프로그램을 만들어주세요
    // SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?;
    // to_date : 9999-01-01, salary : 50000, limit : 5
    $result_date = "9999-01-01";
    $result_salary = 50000;
    $result_limit = 5;
    $dbc = mysqli_connect("localhost", "root", "root506", "employees" ,3306);
    $stmt = $dbc->stmt_init(); // mysqli_stmt_prepare을 사용하기 위한 객체를 초기화하고 리턴해줍니다.
    $stmt->prepare(" SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ? ");
    $stmt->bind_param("sii", $result_date, $result_salary, $result_limit);
    $stmt->execute(); // 쿼리를 실행
    $stmt->bind_result($val_date, $val_salary);

    while($result = $stmt->fetch()){ // DB의 쿼리 결과를 저장
        // var_dump($result_date, $result_salary);
        echo $val_date," ",$val_salary,"\n";
    }
    $dbc->close(); // DB Close
?>