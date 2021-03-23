<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    const fields = [
        'name' => 'الاسم',
        'email' => 'الايميل',
        'mobile' => 'الموبايل',
        'message' => 'الرساله'
    ];

    const model_en = 'contact';
    const model_ar = 'تواصل معنا';
}
