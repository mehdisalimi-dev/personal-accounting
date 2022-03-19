<?php

namespace Onion\Driver;

use Onion\Entity\Cost;
use App\Models\Cost as eloquentCost;
use App\Models\CostCategory as eloquentCostCategory;

class CostEloquentRepository implements CostRepositoryInterface
{
    public function show(): array
    {
        $eloquent = new eloquentCost();
        $eloquent = $eloquent->SumOfCosts();
        return $eloquent;
    }

    public function costCategoryList(): array
    {
        $costCategory = eloquentCostCategory::get();
        return $costCategory;
    }

    public function insert($request): int
    {
        
        try {
            $eloquent = new eloquentCost();
            $eloquent->amount = $request->amount;
            $eloquent->cost_category_id = $request->category_id;
            $eloquent->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}