<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesireLevel extends Model
{
    use HasFactory;


    protected $fillable = [
        'level',
        'label',
    ];

}
