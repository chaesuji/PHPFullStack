<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>home</h1>
    <br><br><br>
    <form action="/method" method="post">
        @csrf {{-- csrf 보호 : 사이트 간 요청 위조 방지 --}}
        <button type="submit">POST</button>
    </form>
    <form action="/method" method="post">
        @csrf
        @method('put')
        <button type="submit">PUT</button>
    </form>
    <form action="/method" method="post">
        @csrf
        @method('delete')
        <button type="submit">DELETE</button>
    </form>
</body>
</html>