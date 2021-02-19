<?php

namespace App\Services\SortFilterServices;

use App\Services\FilterServiceInterface;

class ExpenseCreationDateSortFilter implements FilterServiceInterface
{
    /**
     * ExpenseCreationDateSortFilter Logic layer to sort the retrived data
     * By Creation date [ASC,DESC]
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value)
    {
        return $builder->orderBy('createdAt', $value);
    }
}
