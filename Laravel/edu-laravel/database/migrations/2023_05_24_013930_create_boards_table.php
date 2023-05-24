<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 생성
    // => php artisan make:migration create_boards_table
    // migration 실행 
    // =>  php artisan migrate

    // reset : 모든 마이그레이션 삭제 (down 메소드 실행) 
    // => php artisan migrate:reset
    // rollback : 가장 최근(마지막)에 실행된 마이그레이션의 내용 되돌리기
    // => php artisan migrate:rollback

    // seeder (초기 데이터 생성) : database\seeders의 각 클래스 파일 확인
    // factory (더미 데이터 생성) : database\factories의 각 클래스 파일 확인

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 제목, 내용, 삭제 여부, 작성/수정일, 삭제일자, 삭제여부
            $table->id('bno'); // big_int, pk, auto_increment 적용
            $table->char('category', 1)->index(); // char(1), not null, index
            $table->string('btitle', 100); // varchar(100), not null
            $table->string('bcontent', 4000); // varchar(4000), not null
            $table->timestamps(); // created_at, update_at를 생성, null 허용
            $table->timestamp('deleted_at')->nullable(); // null 허용
            $table->char('deleted_flg', 1)->default('0'); // char(1), default = '0', not null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
