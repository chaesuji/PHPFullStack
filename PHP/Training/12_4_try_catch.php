<?php
    // 아래 쿼리를 이용해서 DB 접속 > date 획득 후 출력해주세요
    // try-catch로 에러 처리를 해주세요
    // 에러가 날 경우의 해당 에러 메세지를 출력해주세요
    // 정상 종료일 경우 "정상 종료"라고 출력해주세요
    // $sql1 = SELECT * FROM dapartment 
    // $sql2 = SELECT * FROM dept_manager

    include_once("../Example/12_2_ex2_fnc_dbconn.php");
    $obj_conn = null;
    my_db_conn( $obj_conn );

    try {
    $sql1 = " SELECT "
        ." * "
        ." FROM "
        ." dapartment ";
    $sql2 = " SELECT "
        ." * "
        ." FROM "
        ." dept_manager ";

    $stmt = $obj_conn->query(" $sql1; $sql2 ");
    $stmt->execute();
    $result = $stmt->fetchAll();
    // var_dump( $result ); > 내용이 사용자에게 보여짐((echo, print들은 가끔 쓰임), var_dump, print_r)
    
    echo "정상 종료";
    } catch (Exception $e) {
        echo "-----------에러----------\n";
        echo $e->getMessage();
    } finally {
        $obj_conn = null;
    }

    // try {
    //     $sql2 = " SELECT "
    //     ." * "
    //     ." FROM "
    //     ." dept_manager ";
    // $stmt = $obj_conn->prepare( $sql2 );
    // $result = $stmt->execute();
    // var_dump( $result );
    
    // echo "정상 종료";
    // } catch (\Throwable $e) {
    //     echo "-----------에러----------\n";
    //     echo $e->getMessage();
    // } finally {
    //     $obj_conn = null;
    // }
?>