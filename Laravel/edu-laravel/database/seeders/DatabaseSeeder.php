<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder; // 시더 호출용 use

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* 콜에 추가
        초기 데이터 삽입용 시더 호출 -> 개별 데이터
        use Database\Seeders\CategorySeeder; */
        // $this->call(CategorySeeder::class);


        // 더미 데이터 삽입용 팩토리 호출
        \App\Models\Board::factory(10000)->create();
        // php artisan migrate --seed : 여러 개 한 번에 실행하기

        // factory 호출
        // 해당 모델의 경로::factory(만들 더미 데이터의 수)->create();
        // \App\Models\User::factory(10)->create();
    }
}
