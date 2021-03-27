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
        'image' => 'صوره الموقع',
        'about_title' => 'عنوان سيكشن تاريخنا',
        'about_sub_title' => 'تقاصيل عنوان سيكشن تاريهنا',
        'about_count' => 'عدد ظهور تاريخنا',
        'service_title' => 'عنوان سيكشن الخدمات',
        'service_sub_title' => 'تفاصيل عن سيكشن الخدمات',
        'service_count' => 'عدد ظهور الخدمات',
        'product_title' => 'عنوان سيكشن المنتجات',
        'product_sub_title' => 'تفاصيل عن سيكشن المنتجات',
        'product_count' => 'عدد ظهور المنتجات',
        'category_count' => 'عدد ظهور الانواع',
        'sponser_count' => 'عدد ظهور العملاء'
    ];

    const rules_create = [
        'site_name' => 'required',
        'image' => 'required',
        'about_title' => 'required',
        'about_sub_title' => 'required',
        'about_count' => 'required',
        'service_title' => 'required',
        'service_sub_title' => 'required',
        'service_count' => 'required',
        'product_title' => 'required',
        'product_sub_title' => 'required',
        'product_count' => 'required',
        'category_count' => 'required',
        'sponser_count' => 'required',
    ];

    const rules_edit = [
        'site_name' => 'required',
        'about_title' => 'required',
        'about_sub_title' => 'required',
        'about_count' => 'required',
        'service_title' => 'required',
        'service_sub_title' => 'required',
        'service_count' => 'required',
        'product_title' => 'required',
        'product_sub_title' => 'required',
        'product_count' => 'required',
        'category_count' => 'required',
        'sponser_count' => 'required',
    ];
}
