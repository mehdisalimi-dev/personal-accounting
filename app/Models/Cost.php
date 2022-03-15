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
}
