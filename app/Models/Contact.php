<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    const model_en = 'contact';
    const model_ar = 'تواصل معنا';
    const fields = [
        'name' => 'الاسم',
        'email' => 'الايميل',
        'mobile' => 'الموبايل',
        'message' => 'الرساله'
    ];
   
    const rules_create = [
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|string',
        'message' => 'required',
    ];

    const rules_edit = [
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|string',
        'message' => 'required',
    ];
}
