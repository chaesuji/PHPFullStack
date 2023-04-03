<?php
// -----------------------------------
// 함수명 : my_db_conn()
// 기능 : DB Connect
// 파라미터 : PDO &$param_conn
// 리턴 : X
// -----------------------------------
    function my_db_conn(&$param_conn){ // reference 참조 (& -> obj_conn)
        $db_host = "localhost"; 
        $db_user = "root"; 
        $db_pw = "root506"; 
        $db_name = "employees"; 
        $db_charset = "utf8mb4"; 
        $db_dms = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
        $db_option = array(
            PDO::ATTR_EMULATE_PREPARES => false, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
        ); // < 까지 읽은 후 $param_conn 실행 
        $param_conn = new PDO($db_dms, $db_user, $db_pw, $db_option); // PDO를 만든 후 $obj_conn
    }



?>