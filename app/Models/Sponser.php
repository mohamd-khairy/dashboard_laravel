<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponser extends Model
{
    protected $guarded = [];

    const fields = [
        'name' => 'الاسم',
        'image'=> 'الصوره'
    ];

    const model_en = 'sponser';
    const model_ar = 'العملاء';
}
