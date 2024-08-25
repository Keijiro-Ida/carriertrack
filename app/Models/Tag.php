<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // 多対多のリレーション：Tagは複数のApplicationに関連付けられる
    public function applications()
    {
        return $this->belongsToMany(Application::class, 'application_tags');
    }

}
