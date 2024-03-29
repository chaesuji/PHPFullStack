<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Tasks.index';
    }

    /**
     * Show the form for creating a new resource.
     * 리소스 생성을 위한 입력 폼 페이지 이동
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Tasks.create';
    }

    /**
     * Store a newly created resource in storage.
     * 리소스 생성 처리
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrget = $request->only(['id', 'pw']);

        // return 'Tasks.store';
        return "Tasks.store"."<br>"."id = ".$arrget['id']."<br>"."pw = ".$arrget['pw'];
        // return "Tasks.store"."<br>"."id = ".$request->id."<br>"."pw = ".$request['pw']
    }

    /**
     * Display the specified resource.
     * 리소스 조회 페이지(= 상세페이지)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Tasks.show : '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     * 리소스 수정 폼 페이지(= 수정 페이지 이동)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Tasks.edit :'.$id;
    }

    /**
     * Update the specified resource in storage.
     * 리소스 수정 처리
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        var_dump($request); // request에 어떤 값이 있는지 확인
        $arrAll = $request->all(); // all() : 사용자가 전달하는 모든 데이터 획득(배열)
        $arrOnly = $request->only(['id', 'pw']); // only() : 사용자가 전달한 데이터 중에 해당하는 데이터만 획득(배열)
        $oneGet = $request->get('pw'); // get() : 사용자가 전달한 데이터 중에 해당하는 특정 값 1개만 추출(배열X, 값만 획득)

        var_dump($arrAll);
        var_dump($arrOnly);
        var_dump($oneGet);

        return 'Tasks.update : '.$id;
    }

    /**
     * Remove the specified resource from storage.
     * 리소스 삭제 처리
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Tasks.destroy : '.$id;
    }
}
