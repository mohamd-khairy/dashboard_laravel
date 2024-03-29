<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $guarded = [];

    const model_en = 'about';
    const model_ar = 'تاريخ الشركه';
    const fields = [
        'description' => 'الوصف'
    ];

    const rules_create = [
        'description' => 'required'
    ];

    const rules_edit = [
        'description' => 'required'
    ];
}
