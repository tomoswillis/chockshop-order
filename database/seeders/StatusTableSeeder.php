<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    public function run()
    {
        $status = [
            [
                'id'    => 1,
                'name' => 'Pending',
            ],
            [
                'id'    => 2,
                'name' => 'Approved',
            ],
            [
                'id'    => 3,
                'name' => 'Complete',
            ],
            [
                'id'    => 4,
                'name' => 'Cancelled',
            ],
        ];

        Status::insert($status);
    }
}