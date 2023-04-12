<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        GET Method로 데이터를 넘겨주는 방법
        1-1 : qeury string에 키와 값을 셋팅
        localhost : 도메인
        key = ? : value
        http://localhost/src/board_update.php?board_no=26
        http://localhost/src/board_update.php?board_no=26&key1=10 

        1-2 : form tag(method 속성) 이용 -->
    <form method="get" action="20_1_ex1_http_get.php">
        <input type="text" name="aaa" value="1">
        <input type="text" name="bbb" value="2">
        <button type="submit">submit</button>
    </form>
    <!-- 
        submit 버튼 클릭시 아래링크로 이동
        http://localhost/20_1_get_post_method.php?test1=testvalue1 
    -->
    <br><br>
    <a href="http://localhost/src/20_1_ex1_http_get.php?aaa=1">a 태그</a>
</body>
</html>