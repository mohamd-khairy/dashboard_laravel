<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    const fields = [
        'name' => 'الاسم'
    ];

    const model_en = 'category';
    const model_ar = 'النوع';
}
