<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        $product = [
            [
                'id'    => 1,
                'name' => 'White Chocolate & Raspberry',
                'slug' => '1',
                'product_bg_image' => 'https://i.postimg.cc/25gDMqn5/rasp-white-bg.png',
                'product_hero_image' => 'https://i.postimg.cc/J7Tv5Z6J/rasp-white-brownie.png',
                'product_title_image' => 'images/products/raspberry-and-white-chocolate-title.svg',
                'description' => 'This delicious white chocolate brownie  summer flavours.',
                'price' => 0.01,
            ],
            [
                'id'    => 2,
                'name' => 'Rocky Road',
                'slug' => '3',
                'product_bg_image' => 'https://i.postimg.cc/HL6C1mPr/rocky-road-bg.png',
                'product_hero_image' => 'https://i.postimg.cc/mgNsVCYN/rocky-road-brownie.png',
                'product_title_image' => 'images/products/',
                'description' => 'A firm favourite with kids and adults alike, the Rocky Road comes loaded with hidden treats to really turn up the fun!',
                'price' => 0.01,
            ],
            // [
            //     'id'    => 2,
            //     'name' => 'Dark Chocolate & Orange',
            //     'slug' => '2',
            //     'product_bg_image' => '',
            //     'product_hero_image' => '',
            //     'product_title_image' => '',
            //     'description' => '',
            //     'price' => 0.01,
            // ],
            
        ];

        Product::insert($product);
    }
}
