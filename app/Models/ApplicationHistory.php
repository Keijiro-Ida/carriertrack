<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'user_id',
        'status',
        'motivation',
        'priority',
        'desire_level',
        'application_date',
        'service_id',
    ];

    // 多対一のリレーション：ApplicationHistoryは一つのApplicationに属する
    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    // 多対一のリレーション：ApplicationHistoryは一つのServiceに属する
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // 多対一のリレーション：ApplicationHistoryは一つのUserに属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
