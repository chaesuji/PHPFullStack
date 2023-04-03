<?php
// extension=pdo_mysql 주석(;) 제거 후 apache2.4 다시 시작(> service)
    $db_host = "localhost"; // host
    $db_user = "root"; // user
    $db_pw = "root506"; // password
    $db_name = "employees"; // db table name
    $db_charset = "utf8mb4"; // charset
    $db_dms = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $db_option = array(
        PDO::ATTR_EMULATE_PREPARES => false, // DB의 Prepared Statement 기능을 사용하도록 설정, true > PHP의 Prepared Statement 기능 사용
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // 에러 발생시 PDO Exception을 Throws 하도록 설정
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // 연상 배열로 fetch를 하도록 설정
    );

    // PDO Class로 DB 연동
    $obj_conn = new PDO($db_dms, $db_user, $db_pw, $db_option);
    // SELECT 예제
    // 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요 
    // $sql = " SELECT sal.salary, emp.emp_no, emp.birth_date 
    //         FROM employees emp 
    //         INNER JOIN salaries sal
    //         ON emp.emp_no = sal.emp_no
    //         WHERE
    //         (emp.emp_no = :emp_no1 OR emp.emp_no = :emp_no2)
    //         AND sal.to_date >= NOW() ";
    // $sql = " SELECT ".
    //         " sal.salary, ".
    //         " emp.emp_no, ".
    //         " emp.birth_date ".
    //         " FROM ".
    //         " employees emp ".
    //         " INNER JOIN salaries sal ".
    //             " ON emp.emp_no = sal.emp_no ".
    //         " WHERE ".
    //             " ( ".
    //             " emp.emp_no = :emp_no1 ".
    //             " OR emp.emp_no = :emp_no2 ".
    //             " ) ".
    //             " AND sal.to_date >= now() ";
    
    // $arr_prepare = array(
    //     ":emp_no1" => 10001,
    //     ":emp_no2" => 10002
    // );
    // $stmt = $obj_conn->prepare( $sql ); // prepare statement를 생성&쿼리 넣기
    // $stmt->execute( $arr_prepare ); // 쿼리 실행, 연상배열로 값을 넘겨주기
    // $result = $stmt->fetchAll(); // 쿼리 결과를 fetch
    // // var_dump($result);

    // foreach ($result as $value) { // $value = $result(array)
    //     echo $value["salary"],"\n";
    // }
    
    // $result = 
    //     array(
    //         array(
    //             "salary" => 38735,
    //             "emp_no" => 10001,
    //             "birth_date" => "1964-06-02",
    //         )
    //         array(
    //             "salary" => 38735,
    //             "emp_no" => 10002,
    //             "birth_date" => "1964-06-02",
    //             )
    //         );

    // INSERT 예제
    $sql = " INSERT INTO departments( ".
            " dept_no, ". 
            " dept_name ".
            " ) ". 
            " VALUES( ". 
            " :dept_no, ".
            " :dept_name ".
            " ) ";

    $arr_prepare = array(
        ":dept_no"=>"d011",
        ":dept_name"=>"PHP풀스택"
    );
    $stmt = $obj_conn->prepare( $sql );
    $result = $stmt->execute( $arr_prepare );
    $obj_conn->commit();
    // var_dump($result);

    $obj_conn = null; // DB 파기
?>