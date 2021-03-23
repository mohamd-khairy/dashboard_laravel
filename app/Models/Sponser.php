<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponser extends Model
{
    protected $guarded = [];

    const model_en = 'sponser';
    const model_ar = 'العملاء';
    const fields = [
        'name' => 'الاسم',
        'image'=> 'الصوره'
    ];

    const rules_create = [
        'name' => 'required',
        'image' => 'required|image'
    ];

    const rules_edit = [
        'name' => 'required',
        'image' => 'required|image'
    ];
}
