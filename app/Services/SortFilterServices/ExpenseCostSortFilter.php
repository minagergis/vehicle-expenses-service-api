<?php

namespace App\Services\SortFilterServices;

use App\Services\FilterServiceInterface;

class ExpenseCostSortFilter implements FilterServiceInterface
{
    /**
     * ExpenseCostSortFilter Logic layer to sort the retrived data
     * By Cost [ASC,DESC]
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value)
    {
        return $builder->orderBy('cost' , $value);
    }
}
