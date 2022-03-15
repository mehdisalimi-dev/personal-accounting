<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CostCategory;

class CostCategorySeeder extends Seeder
{

    private $costCategories = ['personal','food','clothing','housing','commuting','other'];
    public function run()
    {
        foreach ($this->costCategories as $costCategory) {
            CostCategory::firstOrCreate([
                'title' => $costCategory
            ]);
        }
    }
}
