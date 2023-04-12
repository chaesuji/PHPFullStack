<?php
    // get method로 넘어온 데이터를 담고 있는 변수(배열 형태)
    var_dump($_GET);
    
    // ** 주의사항 **
    // $_GET은 원본 데이터이므로 값이 수정되지 않게 주의해야 함( => $_GET["aaa"] = 2; )
    $post_get = $_GET;
    $post_get["aaa"]; 
?>