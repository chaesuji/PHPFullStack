<?php
    include_once("./12_2_ex2_fnc_dbconn.php");

    // try-catch 문 : 에러 처리를 하기 위한 문법
    try { // 연산을 하기 위한(= 실행하고 싶은) 코드 작성
        $obj_conn = null;
        my_db_conn( $obj_conn );
        $sql = " SELECT * FROM employees WHERE emp_no = 10000000" ;
        $stmt = $obj_conn->query( $sql );
        $result = $stmt->fetchAll();

        if( count( $result ) === 0 ){
            // throw Exception : 에러를 강제로 일으키는 구문
            // throw new Exception("쿼리 결과 0건"); 
            // 에러가 발생해 try를 계속 실행하지 않고 catch로 넘어감
            throw new Exception("E99"); 
        }
        var_dump( $result );
        echo "try\n";

    } catch (\Throwable $e) { // 에러 발생 시 실행되는 코드 작성
        if($e->getMessage() === "E99"){
            echo "데이터 0건\n";
        } else {
            echo $e->getMessage();
        }
        echo "-----------에러 발생-----------\n";
        echo $e->getMessage();
        echo "\n-----------에러 발생-----------\n";
    } finally { // 정상 처리 또는 에러 처리 시에 무조건 실행되는 코드 작성
        echo "finally\n";
        $obj_conn = null;
    }

    echo "종료";
?>