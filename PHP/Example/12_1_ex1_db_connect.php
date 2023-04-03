<?php
    // DB 연결($변수 = mysqli_connect()) ~ 연결 끊기(mysqli_close();)
    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
    // php.ini > extension = mysqli 주석 제거(;)
    // var_dump($dbc);

    // 쿼리 요청
    // $result_query = mysqli_query($dbc, "SELECT emp_no,first_name FROM employees LIMIT 10;");
    // row 일반배열 : result_query로부터 결과 값을 배열로 변환, 컬럼명 X 
    // $result_row = mysqli_fetch_row($result_query);
    // var_dump($result_row);
    // while($temp_row = mysqli_fetch_row($result_query)){
    //     var_dump($temp_row);
    //     // echo $temp_row[0],", ";
    // }

    // Prepared Statement : 쿼리의 틀을 미리 생성해놓고 ?를 대체할 값을 나중에 지정, 보안성을 높임
    // -> (Object Operator) : 객체 범위 내에서 객체에 접근하기 위해 사용, => (Double Arrow Operator) : 배열의 키, 값을 할당할 때 사용
    $i_1= "F";
    $i_2 = 10010;
    $i_3 = 5;
    $stmt = $dbc->stmt_init(); // Statement를 셋팅
    // $stmt->prepare("SELECT emp_no,first_name FROM employees LIMIT ?"); // DB 질의 할 ^쿼리^를 작성
    // $stmt->bind_param("i", $i_3); // Prepare 셋팅 > 레퍼런스 참조(변수에 값)
    $stmt->prepare("SELECT emp_no,first_name FROM employees where gender = ? and emp_no <= ? LIMIT ?");
    $stmt->bind_param("sii", $i_1, $i_2, $i_3); // 물음표 순서대로 타입, 변수 입력 > gender = s, $i_1, emp_no = i, $i_2, limit = i, $i_3
    $stmt->execute(); // DB에 쿼리 질의 실행
    // bind_param() : 첫 번째 전달인자 의미, s : string, i : integer, d : double

    // --------------------------- 질의 결과를 우리가 지정한 변수에 담아 사용하는 방법
    // $stmt->bind_result($col1, $col2); // 질의 결과를 각 아규먼트(= $col1, $cols)에 저장하기 위한 셋팅
    // bind_result() : 조회하여 넘어오는 값을 변수에 할당
    // $stmt->fetch(); // bind_result에서 셋팅한 아규먼트에 값을 저장(한 번 실행될 때마다 한 레코드씩 저장)
    // var_dump($col1, $col2); 

    // --------------------------- fetch를 루프로 돌려서 모든 질의 결과를 가져오는 방법
    // while($stmt->fetch()){
    //     echo "$col1, $col2\n"; 
    // }
    
    // --------------------------- 연상 배열로 가져오는 방법
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()){
        echo $row["emp_no"]," ",$row["first_name"], "\n";
    }
    // fetch_assoc : 필드명(=값)을 인덱스(=키)로 배열을 반환
    // get_result : $stmt->execute()에서 실행된 값을 result에 담아 

    // assoc(associative array) 연관배열 : DB 상의 컬럼명과 함께 연관 배열 형태로 출력
    // while($temp_assoc = mysqli_fetch_assoc($result_query)){ // $result_query의 쿼리문을 가져와서 실행 값을 한 줄씩 $temp_assoc에 넣음
    //     var_dump($temp_assoc["first_name"]); // 쿼리문의 컬럼 중 first_name만 나오게 출력
    // }
    // mysqli_fetch_assoc() : 필드명(키,값)을 통해 데이터 호출


    mysqli_close($dbc);
?>