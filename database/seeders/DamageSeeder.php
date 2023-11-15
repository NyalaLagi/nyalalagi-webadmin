<?php

namespace Database\Seeders;

use App\Models\damage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DamageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        damage::create([
            'damage_name'   =>  'Panel',
            'resources'     =>  '123',
            'price'         =>  '50000',
        ]);
    }
}
