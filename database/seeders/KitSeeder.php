<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kit;

class KitSeeder extends Seeder
{
    public function run(): void
    {
        $kits = ['StarterKit', 'Educational Robotics Kit', 'Kit5'];

        foreach ($kits as $kit) {
            Kit::create([
                'name' => $kit
            ]);
        }
    }
}