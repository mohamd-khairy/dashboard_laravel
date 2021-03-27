<?php

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Service;
use App\Models\Sponser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SettingsTableSeeder::class);

        // factory(Category::class , 10)->create();
        // factory(About::class , 10)->create();
        // factory(Contact::class , 10)->create();
        // factory(Product::class , 10)->create();
        // factory(Service::class , 10)->create();
        // factory(Sponser::class , 10)->create();

        
    }
}
