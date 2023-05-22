<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>names home</title>
</head>
<body>
    <a href="/names">names</a>
    <br><br>
    <a href="{{url('/names');}}">names url</a>
    <br><br>
    <a href="{{Route('names.index');}}">names route</a> {{-- laravel 추천 방식 --}}
</body>
</html>