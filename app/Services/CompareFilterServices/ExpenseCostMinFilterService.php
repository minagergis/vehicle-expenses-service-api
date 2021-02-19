<?php

namespace App\Services\CompareFilterServices;

use App\Services\FilterServiceInterface;

class ExpenseCostMinFilterService implements FilterServiceInterface
{
    /**
     * ExpenseCostMinFilterService Logic layer to filter the retrived data
     * which has cost less than the filter value
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value)
    {
        return $builder->where('cost', '<', $value);
    }
}
