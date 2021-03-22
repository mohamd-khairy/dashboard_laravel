<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

    const fields = [
        'site_name' => 'اسم الموقع',
        'site_logo' => 'صوره الموقع'
    ];

    const model_en = 'setting';
    const model_ar = 'الاعدادات';
}
