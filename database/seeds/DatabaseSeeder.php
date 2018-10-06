<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);

        factory(Category::class, 10)->create()->each(function($category){
            for ($i=0; $i < 25 ; $i++) {
                $category->products()->save(factory(Product::class)->make());
            }
        });
    }
}
