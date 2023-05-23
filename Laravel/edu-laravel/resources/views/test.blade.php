<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test.index!!!</h1>
    <h2>view</h2>

    <h5>{{$name}}</h5>
    <hr>
    <a href="{{route('tasks.index')}}">Tasks.index</a>
    <Br>
    <a href="{{route('tasks.show', ['task' => 13])}}">Tasks.show</a>
    <form action="{{route('tasks.update', ['task' => 1])}}" method="post">
        @csrf
        @method('put') 
        {{-- update : put 또는 patch로 실행가능  --}}
        {{-- html form 태그에서는 get/post로만 전송가능, @method를 사용해서 form 태그로는 사용 못하는 put 등 다른 메소드 사용 --}}
        {{-- get/post에 상관없이 사용 가능 --}}
        <input type="hidden" name="id" value="php506">
        <input type="hidden" name="pw" value="506">
        <input type="hidden" name="name" value="admin">
        <button type="submit">tasks.update</button>
    </form>
    <hr>
    <a href="{{route('tasks.edit', ['task' => 999])}}">Tasks.edit</a>
    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <input type="text" name="id">
        <input type="password" name="pw">
        <button type="submit">tasks.store</button>
    </form>
</body>
</html>