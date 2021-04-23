<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Category;
use \App\Models\Product;
use \App\Models\Order;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            // OrderTableSeeder::class,
        ]);

        Category::factory()->count(5)->create();
        Product::factory()->count(5)->create();

        $categories = Category::all();
        Product::all()->each(function ($product) use ($categories){
            $product->categories()->attach(
                $categories->random(1)->pluck('id')->toArray()
            );
        });

        
    }
}