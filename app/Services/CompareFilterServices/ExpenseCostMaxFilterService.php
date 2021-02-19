<?php

namespace App\Services\CompareFilterServices;

use App\Services\FilterServiceInterface;

class ExpenseCostMaxFilterService implements FilterServiceInterface
{
    /**
     * ExpenseCostMaxFilterService Logic layer to filter retrived data
     * which has cost more than the filter value
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value)
    {

        return $builder->where('cost', '>',$value);
    }


}
