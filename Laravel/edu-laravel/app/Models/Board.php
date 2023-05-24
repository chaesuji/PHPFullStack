<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    // 모델 생성 : php artisan make:model board -mfs
    // [-fms] 옵션으로 migration, factory, seeder를 한 번에 생성

    // 정의할 때는 지시자가 전부 protected
    // 테이블 정의 (정의하지 않을 경우 클래스 명의 복수형을 암묵적으로 인식)
    protected $table = 'boards'; // -> migration

    // PK 정의 (정의하지 않을 경우에는 'id' 컬럼을 pk로 인식)
    protected $primaryKey = 'bno';

    // 대량 할당을 이용한 취약성 대체
    // 1. 화이트 리스트 방식 : 수정할 수 있는 컬럼을 설정
    // protected $fillable = ['컬럼1', '컬럼2'];

    // 2. 블랙 리스트 방식 : 수정할 수 없는 컬럼을 설정
    // 빈 배열 : 아무것도 수정 할 수 없도록 설정
    protected $guarded = [];

}
