<?php

namespace App\Models;

use App\Services\FilterServiceAbstract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class VehicleExpense extends Model
{
    protected $table = 'vehicle_expences_view';

    public function scopeFilter(Builder $builder,FilterServiceAbstract $filters)
    {
        return $filters->filter($builder);
    }
}
