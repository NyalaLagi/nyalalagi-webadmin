<?php

namespace Database\Seeders;

use App\Models\province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        province::create([
            'province'      =>  'Jawa Barat',
        ]);
    }
}
