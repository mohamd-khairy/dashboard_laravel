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

        // Setting::create([
        //     'site_name' => 'Shamort',
        //     'image' => 'assets/img/logo'
        // ]);

        Header::create([
            'title' => 'مرحبا',
            'description' => 'تقدر تتابع وتشوف افضل اسعار الفراخ وافضل منتجات الطيور معانا في شمورت دلوقتي مع شمورت هتشوف افضل واجود الانواع',
            'image' => 'img/header.png',
            'video' => 'https://www.youtube.com/watch?v=MiSSj-y649Q&ab_channel=TemryChicken'
        ]);

        Footer::create([
            'title' => 'شمورت',
            'description' => 'تقدر تتابع وتشوف افضل اسعار الفراخ وافضل منتجات الطيور معانا في شمورت دلوقتي مع شمورت هتشوف افضل واجود الانواع',
        ]);
    }
}
