<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $guarded = [];

    const fields = [
        'description' => 'الوصف'
    ];

    const model_en = 'about';
    const model_ar = 'تاريخ الشركه';
}
