<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $first = Page::create(
            [
                'name' => 'الصفحات',
                'url' => 'pages',
                'icon' => 'glyphicon glyphicon-list',
                'parent' => 0,
                'order' => 1
            ]
        );

        Page::insert([
            [
                'name' => 'عرض الكل',
                'url' => 'pages',
                'icon' => 'glyphicon glyphicon-list',
                'parent' => $first->id,
                'order' => 1
            ],
            [
                'name' => 'اضافه صفحه',
                'url' => 'page/create',
                'icon' => 'glyphicon glyphicon-plus',
                'parent' => $first->id,
                'order' => 2
            ],
        ]);
    }
}
