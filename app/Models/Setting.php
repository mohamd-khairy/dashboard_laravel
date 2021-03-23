<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

    const model_en = 'setting';
    const model_ar = 'الاعدادات';
    const fields = [
        'site_name' => 'اسم الموقع',
        'image' => 'صوره الموقع'
    ];

    const rules_create = [
        'site_name' => 'required',
        'image' => 'required'
    ];

    const rules_edit = [
        'site_name' => 'required',
    ];
}
