<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarHistory extends Model
{
    protected $guarded = [];

    const model_en = 'car_history';
    const model_ar = 'سابق الصرف';
    const fields = [
        'details' => 'التفاصيل',
        'date' => 'التاريخ',
    ];

    const rules_create = [
        // 'description' => 'required'
    ];

    const rules_edit = [
        // 'description' => 'required'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function error()
    {
        return $this->belongsTo(Error::class);
    }
}
