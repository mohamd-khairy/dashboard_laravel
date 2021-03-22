<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    const fields = [
        'name' => 'الاسم',
        'image' => 'الصوره',
        'description' => 'الوصف',
        'category_id' => 'النوع'
    ];

    const model_en = 'service';
    const model_ar = 'خدمه';
}
