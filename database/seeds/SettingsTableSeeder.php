<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
    
       Setting::create([
           'site_name' => 'Shamort',
           'site_logo' => 'assets/img/logo'
       ]);
    }
}
