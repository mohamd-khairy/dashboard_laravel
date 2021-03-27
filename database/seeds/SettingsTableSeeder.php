<?php

use App\Models\Footer;
use App\Models\Header;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Setting::updateOrCreate(['id' => 1], [
            'site_name' => 'Shamort',
            'image' => 'assets/img/logo',
            'about_title' => 'تاريخنا',
            'about_sub_title' => 'تقاصيل عنوان سيكشن تاريهنا',
            'about_count' => 4,
            'service_title' => 'خدماتنا',
            'service_sub_title' => 'تفاصيل عن سيكشن الخدمات',
            'service_count' => 8,
            'product_title' => 'منتجاتنا',
            'product_sub_title' => 'تفاصيل عن سيكشن المنتجات',
            'product_count' => 8,
            'category_count' => 4,
            'sponser_count' => 6
        ]);

        Header::updateOrCreate(['id' => 1], [
            'title' => 'مرحبا',
            'description' => 'تقدر تتابع وتشوف افضل اسعار الفراخ وافضل منتجات الطيور معانا في شمورت دلوقتي مع شمورت هتشوف افضل واجود الانواع',
            'image' => 'img/header.png',
            'video' => 'https://www.youtube.com/watch?v=MiSSj-y649Q&ab_channel=TemryChicken'
        ]);

        Footer::updateOrCreate(['id' => 1], [
            'title' => 'شمورت',
            'description' => 'تقدر تتابع وتشوف افضل اسعار الفراخ وافضل منتجات الطيور معانا في شمورت دلوقتي مع شمورت هتشوف افضل واجود الانواع',
            'copyright' => 'copyright @' . date('Y') . ' made by JustCode Company'
        ]);
    }
}
