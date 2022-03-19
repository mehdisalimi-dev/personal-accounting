<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    protected $table = 'cost';

    public function title()
    {
        return $this->hasOne(CostCategory::class,'id','cost_category_id');
    }

    /*
     * SumOfCosts calculates total costs by categories.
     */
    public function SumOfCosts()
    {
        $costs = Cost::select('cost.*','cost_category.title')
        ->join('cost_category', 'cost.cost_category_id', '=', 'cost_category.id')
        ->get();

        $reportArray = [];
        foreach ($costs as $cost) {
            $sumAmount = isset($reportArray[$cost['cost_category_id']]) ? $cost['amount'] + $reportArray[$cost['cost_category_id']]['amount'] : (int)$cost['amount'];
            $reportArray[$cost['cost_category_id']] = [
                "title" => $cost['title'],
                "amount" => $sumAmount
            ];
        }
        return $reportArray;
    }
}
