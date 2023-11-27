<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    const model_en = 'cars';
    const model_ar = ' سيارة';
    const fields = [
        'police_number' => 'رقم الشرطة',
        'brand' => 'الماركة',
        'model' => 'الموديل',
        'meter' => 'قراءة العداد',
        'rank' => 'الرتبة',
        'user_name' => 'اسم المستخدم',
        'work_place' => 'جهه العمل',
    ];

    const rules_create = [
        // 'description' => 'required'
    ];

    const rules_edit = [
        // 'description' => 'required'
    ];

    public function historys()
    {
        return $this->hasMany(CarHistory::class)->orderBy('date', 'asc');
    }
}
