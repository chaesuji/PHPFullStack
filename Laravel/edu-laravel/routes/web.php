<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// laravel route : uri와 클로저로 이루어져있음
Route::get('/', function () { // function() { } -> 클로저 : js 익명 함수의 php 버전
    return view('welcome'); // view() : resource > view > view 인스턴스를 조회함
});

/*
uri : 특정 리소스를 식별하는 통합 자원 식별자를 의미
url : 웹 주소, 컴퓨터 네트워크 상에서 리소스가 어디 있는지 알려주기 위한 규약 > uri의 서브셋(= 부분집합)
*/

// ---------------
// 라우트 정의

// 1. 문자열 리턴
Route::get('/hi', function () {
    return "안녕하세요";
});

// 2. 뷰 리턴 : 뷰 파일이 없으면 에러 발생
// 디버그모드 설정이 false면 500에러, true면 에러의 상세정보 출력 -> 발표할 때는 false
Route::get('/myview', function () {
    return view('myview');
});

// HTTP 메소드 대응하는 라우터
// home 페이지로 이동
Route::get('/home', function() {
    return view('home');
});

// 모든 요청에 대한 처리
// 라우터가 정의된 순서에 따라 실행됨 -> 중복된 url의 라우터가 있을 경우 제일 밑에 정의된 라우터 실행
// Route::any('/method', function() {
//     return 'Any Method';
// });

// get(리소스 요청) 요청에 대한 처리
Route::get('/method', function() {
    return 'Get Method';
});

// post(리소스 생성) 요청에 대한 처리
Route::post('/method', function() {
    return 'Post Method';
});

// put(리소스를 덮어씀) 요쳥에 대한 처리
Route::put('/method', function() {
    return 'Put Method';
});

// delete(리소스 삭제) 요청에 대한 처리
Route::delete('/method', function () {
    return 'Delete Method';
});

/*
other... 
head : get 부분의 헤더 부분만 요청
patch : 리소스의 일부를 수정
options : 특정 url에서 어떤 http 메서드가 허용되는지 서버에 확인
*/ 

// 모든 요청에 대한 처리
Route::any('/method', function() {
    return 'Any Method';
});

// 특정 메소드 요청에 대한 처리 -> 지정한 메소드에 대해서만 처리
Route::match(['get', 'post'], '/method', function () {
    return 'Match Method';
});

// ----------------------
// 라우트에서 파라미터 제어

// 1. 쿼리스트링으로 파라미터 획득
Route::get('/query', function(Request $request) { // $request의 데이터형을 Request(클래스)로 지정
    return $request->id.", ".$request->name;
});

// 2. URL 세그먼트로 지정 파라미터 획득
// 세그먼트 지정 -> api
Route::get('/segment/{id}', function($id) {
    return 'segment ID : '.$id;
});

// 2-1. URL 세그먼트로 지정 파라미터 획득 : 기본값 설정
Route::get('/segment2/{id?}', function($id = 'base') {
    return 'setment2 ID : '.$id;
});

// 2-2. request로도 세그먼트 파라미터 획득 가능, 세그먼트 파라미터가 없어도 404에러가 안뜸
// mvc controller를 이런 방식으로 가져옴
// Route::get('/segment2/{id?}', function(Request $request) {
//     return 'setment2 ID : '.$request->id;
// });

// ----------------------
// 라우트의 이름 지정

Route::get('/nameshome', function() {
    return view('namesHome');
});

// 이름 지정
Route::get('/names', function() { // url : /names 
    return 'name.index'; // content : name.index
})->name('names.index'); // as : names.index

// ----------------------
// 라우트 매칭 실패 시 대체 라우트 정의
// 가장 마지막에 정의 : 보통 에러 처리를 마지막에 정의
Route::fallback(function() {
    return '잘못된 경로로 접속하셨습니다.';
});

// ----------------------
// 라우트의 그룹(group()) 및 공통 경로(prefix()) 설정
Route::prefix('users')->group(function() {
    Route::get('/login', function() {
        return 'Login';
    })->name('users.login');

    Route::get('/logout', function() {
        return 'Logout';
    })->name('users.logout');

    Route::get('/regist', function() {
        return 'Regist';
    })->name('user.regist');
});

// middleware() : 사용자 인증을 확인하거나 로그인하지 않은 방문자가 특정 결로로 접근하지 못하도록 막음
// -> controller에서 사용
// Route::middleware('auth')->prefix('users')->group(function() {
//     Route::get('/login', function() {
//         return 'Login';
//     })->name('users.login');

//     Route::get('/logout', function() {
//         return 'Logout';
//     })->name('users.logout');

//     Route::get('/regist', function() {
//         return 'Regist';
//     })->name('user.regist');
// });

// ---------
// 서명라우터
use Illuminate\Support\Facades\URL;
Route::get('/makesign', function() {
    // 일반 URL 링크 생성
    $baseUrl = route('invitations', ['invitation' => 5816, 'group' => 678]);

    // 서명된 URL 링크 생성하기
    $signUrl = URL::signedRoute('invitations', ['invitation' => 5816, 'group' => 678]);

    // 유효기간이 있는 서명된 URL 링크 생성하기
    $limitSignUrl = URL::temporarySignedRoute('invitations', now()->addSecond(10));

    return $baseUrl."<br><br>".$signUrl."<br><br>".$limitSignUrl;
});

// Route::get('/invitation/{invitation}/{group}', function() {
//     return "sign";
// })->name('invitations')->middleware('signed');
Route::get('/invitation', function() {
    return "sign";
})->name('invitations')->middleware('signed');