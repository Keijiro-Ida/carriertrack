<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'logo',
    ];

    // 一対多のリレーション：Serviceは複数のApplicationHistoryを持つ
    public function applicationHistories()
    {
        return $this->hasMany(ApplicationHistory::class);
    }
}
