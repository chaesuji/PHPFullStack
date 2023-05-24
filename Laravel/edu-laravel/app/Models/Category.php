<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // 모델명 : category
    // 팩토리, 마이그레이션, 시더까지 다 만들기
    // categorys 테이블의 컬럼은 아래와 같음
    // id : pk, auto_increment
    // no : unique, char(1)
    // name : varchar(30), unique
    // active_flg : default('1'), char(1) 

    protected $table = 'Categories';
    protected $primaryKey = 'id';
}
