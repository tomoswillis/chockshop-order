<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            'user_id' => 1,
            'transaction_id' => 'trgiokiakiakaiak',
            'total' => 12345676,
        ];

        Order::insert($orders);
    }
}