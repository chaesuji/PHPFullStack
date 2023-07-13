<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // 타임 캐스트
    protected $casts = [
        'complated' => 'boolean',
    ];

    // complated_at을 데이트 설정에 추가
    protected $dates = [
        'complated_at',
    ];
    
    // API로 JSON을 파싱할 때 데이터를 timezome에 맞추기 위한 설정
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
