<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    const fields = [
        'name' => 'الاسم',
        'image' => 'الصوره',
        'description' => 'الوصف',
        'category_id' => 'النوع'
    ];

    const model_en = 'product';
    const model_ar = 'منتج';
}
