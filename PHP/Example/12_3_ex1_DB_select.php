<?php
    include_once("./12_2_ex2_fnc_dbconn.php"); // 다른 페이지의 내용 불러오기

    $obj_conn = null; // PDO Class, null로 초기화
    // DB Connect
    my_db_conn( $obj_conn ); //  함수 호출, obj_conn을 args로 넘겨줌
    
    // SQL Query
    $sql = " SELECT ".
        " * ".
        " FROM ".
        " employees ".
        " LIMIT :limit_start ";

    $arr_prepare = array(
    ":limit_start" => 5, // 스페이스 X
    );

    $stmt = $obj_conn->prepare( $sql );
    $stmt->execute( $arr_prepare );
    $result = $stmt->fetchAll();
    var_dump($result);

    $obj_conn = null; // DB Connection 파기
?>