<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cost;


class CostSeeder extends Seeder
{
    
    public function run()
    {
        $count = 10;
        while($count>10){
            $count--;
            Cost::firstOrCreate([
                'cost_category_id' => rand(1,6),
                'amount' => rand(10000,99999)
            ]);
        }
    }
}
