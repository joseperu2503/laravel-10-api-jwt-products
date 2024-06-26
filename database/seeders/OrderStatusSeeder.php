<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['name' => 'Ordered'],
            ['name' => 'Packed'],
            ['name' => 'In Transit'],
            ['name' => 'Delivered'],
        ];

        foreach ($rows as $row) {
            OrderStatus::firstOrCreate(
                ['name' => $row['name']]
            );
        }
    }
}
