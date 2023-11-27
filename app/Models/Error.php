<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    protected $guarded = [];

    const model_en = 'errors';
    const model_ar = ' الاعطال';
    const fields = [
        'details' => 'العطل',
    ];

    const rules_create = [
        // 'description' => 'required'
    ];

    const rules_edit = [
        // 'description' => 'required'
    ];
}
