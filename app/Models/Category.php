<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    const model_en = 'category';
    const model_ar = 'النوع';
    const fields = [
        'name' => 'الاسم'
    ];

    const rules_create = [
        'name' => 'required'
    ];

    const rules_edit = [
        'name' => 'required'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
