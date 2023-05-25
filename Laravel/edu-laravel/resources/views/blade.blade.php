{{-- 상속 --}}
@extends('layout.layout')

{{-- 부모 템플릿에 해당하는 yield 부분의 자리를 차지 --}}
@section('title', '자식 타이틀')

@section('content')
    <h2>콘텐츠 섹션입니다</h2>
    <p>콘텐츠 끝</p>
@endsection

@section('test')
    <h2>자식의 섹션입니다</h2>
    <p>wtwt</p>
@endsection

{{-- 조건문 --}}
{{-- section으로 묶어주지 않으면 맨 위에 if 결과가 나타남 --}}
@section('if')
    <hr>
    <h5>if</h5>
    @if($data['gender'] === '남자')
        <span>남자남자</span>
    @elseif($data['addr'] === '대구')
        <span>대구대구</span>
    @else
        <span>모든 조건 탈락</span>
    @endif
@endsection

{{-- @switch($value)
    @case(value)
        
        @break
    $@default
        
@endswitch --}}

{{-- 반복문 --}}
@section('for')
    <hr>
    <h5>for</h5>
    @for($i = 1; $i < 10; $i++)
        <SPAN>{{$i}}</SPAN>
    @endfor
@endsection

@section('foreach')
    <hr>
    <h5>foreach</h5>
    @foreach($data as $key => $value)
        <span>{{$loop->count.' >> '.$loop->iteration}}</span>
        {{-- count : 배열의 크기 | iteration : 루프의 반복된 횟수 --}}
        <span>{{$key." : ".$value}}</span>
        <br>
    @endforeach
@endsection

{{-- foreach와 forelse의 경우, $loop 변수가 자동 생성되고 사용할 수 있음 --}}
@section('forelse')
    <hr>
    <h5>forelse</h5>
    @forelse($data2 as $key => $value)
        <span>{{$key.' : '.$value}}</span>
    @empty
        <span>빈 배열</span>
    @endforelse
@endsection