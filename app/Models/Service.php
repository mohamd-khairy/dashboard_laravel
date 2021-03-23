<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    const model_en = 'service';
    const model_ar = 'خدمه';
    const fields = [
        'name' => 'الاسم',
        'image' => 'الصوره',
        'description' => 'الوصف',
        'price' => 'السعر',
        'relation' => [
            'coulmn_en' => 'category_id',
            'coulmn_ar' => 'النوع',
            'model' => \App\Models\Category::class
        ]
    ];

    const rules_create = [
        'name' => 'required',
        'image' => 'required|image',
        'description' => 'required',
        'price' => 'required|numeric',
        'category_id' => 'required'
    ];

    const rules_edit = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'category_id' => 'required'
    ];
}
