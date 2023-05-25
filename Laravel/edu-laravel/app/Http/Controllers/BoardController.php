<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 쿼리 빌더
        // $result = DB::select('select * from categories');
        // $no = '5';
        // $result = DB::select('select * from categories where no=:no', ['no' => $no]);
        // $result = DB::select('select * from categories where no=?', [$no]);
        // return var_dump($result);

        $input = ['4', '7', '8'];// categories의 no 컬럼
        // 게시글 번호/제목, 카테고리명을 출력 (게시글 번호로 오름차순 상위 5개만)
            // $query = 
            // DB::select(
            //     'select bs.bno, bs.btitle, cs.name 
            //     from boards bs 
            //     inner join categories cs 
            //     on bs.category = cs.no 
            //     where cs.no = ? or cs.no = ? or cs.no = ?
            //     order by bs.bno 
            //     limit 5',
            //     $input
            // );

            // DB::select(
            //     'select  b.bno, b.btitle, c.name 
            //     from categories c, boards b
            //     where c.no = b.category
            //     and c.no in(?,?,?)'
            //     // and c.no in(:no1, :no2, :no3)
            //     .'order by b.bno
            //     limit 5',
            //     $input);

        // $result = 
        //     DB::insert('insert into boards 
        //         (category, btitle, bcontent, created_at, updated_at) 
        //         values 
        //         (?,?,?,now(), now())', ['1', 'test', 'test']);
                // [now()] -> laravel now() = utc 시간
        // var_dump($result);

        // 방금 등록한 게시글의 제목(-> test), 내용(-> testtest)로 변경 
        // $query = 
            // DB::update(
            //     'update boards 
            //     set btitle=?, bcontent=? 
            //     where bno=(select bno from boards order by bno desc limit 1)', 
            //     ['test', 'testtest123']);

        // $query = 
            // DB::delete('delete from boards
            // where bno=(select bno from boards order by bno desc limit 1)');

            // DB::delete('delete from boards where bno in(?)', [30001]);

        // --------------
        // 쿼리빌더 체이닝
        $no = '5';
        $result = DB::table('categories')->where('no', '=', $no)->get();
        // = select * from categories where no = :no(=$no)
        // dd() : sql 쿼리, 값 형식을 보여줌 -> dd() 사용 => todo : 곧 삭제 예정

        $no1 = '5';
        $no2 = '8';
        // select * from categories where no=? or no=?
        // $result = DB::table('categories')->where('no', $no1)->orwhere('no', $no2)->dd();
        // where에서 no=$no =(같다) 부등호를 사용할 경우에만 = 생략 가능
        // orwhere = where no=1 or no=2

        // select * from categories where no in (?,?)
        // $result = DB::table('categories')->wherein('no', [$no1, $no2])->dd();

        // select * from categories where no not in (?,?)
        // $result = DB::table('categories')->wherenotin('no', [$no1, $no2])->dd();
        // wherenotin() : where not in : ()안에 있는 값이 아닌 값들을 조회

        // select id, no, name from categories
        // $result = DB::table('categories')->select('id', 'no', 'name')->dd();
        // select() : 특정 컬럼만 조회

        // select id,no, name from order by name desc;
        // $result = DB::table('categories')
        //             ->select('id', 'no', 'name')
        //             ->orderBy('name', 'desc')
        //             ->dd();
        // orderBy() : 특정 컬럼을 기준으로 오름차순,내림차순

        // *** 주의해서 사용(사용 안하는 걸 추천) *** whereRaw()
        // $result = DB::table('categories')->whereRaw('no = '.$no1);
        
        // first() : limit 1과 비슷한 작동 (= limit 1이 들어간 것처럼 결과가 반환됨)
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();

        // firstOrFail() : first()와 같은 동작, 
        // 실패시 결과 -> 예외 발생(404 페이지로 이동/엘로퀀트(orm) 모델 객체에서만 사용 가능)
        // $result = DB::table('boards')->orderBy('bno', 'desc')->firstOfFail();
        
        // 집계 메소드
        // $result = DB::table('boards')->count(); // 결과의 레코드 수를 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치 값을 반환
        // max, min, sum, avg .. 사용법 같음
        
        // $result = DB::beginTransaction(); // 트랜잭션 시작
        //         DB::commit(); // 트랜잭션 성공 시 커밋
        //         DB::rollback(); // 실패 시 롤백

        // 카테고리가 활성화되어 있는 게시글의 카테고리 별 갯수를 출력
        // 카테고리 번호, 카테고리명 갯수
        // $result = DB::table('categories')
        //             ->selectraw('boards.category, count(categories.name)')
        //             ->join('boards', 'boards.category', '=', 'categories.no')
        //             ->where('active_flg', '1')
        //             ->groupBy('boards.category')
        //             ->groupBy('categories.name')
        //             ->get();

        $result = DB::table('categories')
                    ->select('boards.category', 'categories.name', DB::raw('count(*) as cnt'))
                    ->join('boards', 'boards.category', '=', 'categories.no')
                    ->where('active_flg', '1')
                    ->groupBy('boards.category')
                    ->groupBy('categories.name')
                    ->get();

        return var_dump($result);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
