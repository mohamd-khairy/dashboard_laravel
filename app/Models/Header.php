<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $guarded = [];

    const model_en = 'header';
    const model_ar = 'مقدمه الموقع';
    const fields = [
        'title' => 'العنوان',
        'description' => 'الوصف',
        'image' => 'الصوره',
        'video' => 'الفيديو'
    ];
   
    const rules_create = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image',
        'video' => 'required',
    ];

    const rules_edit = [
        'title' => 'required',
        'description' => 'required',
        'video' => 'required',
    ];
}
