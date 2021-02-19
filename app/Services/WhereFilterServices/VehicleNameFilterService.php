<?php

namespace App\Services\WhereFilterServices;

use App\Services\FilterServiceInterface;

class VehicleNameFilterService implements FilterServiceInterface
{
    /**
     * VehicleNameFilterService Logic layer to filter the retrived data
     * whose vehicleName like the filter value
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value)
    {
        return $builder->where('vehicleName', 'LIKE', '%' . $value . '%');
    }
}
