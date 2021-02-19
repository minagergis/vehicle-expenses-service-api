<?php

namespace App\Services\WhereFilterServices;

use App\Services\FilterServiceInterface;

class ExpenseTypeFilterService implements FilterServiceInterface
{
    /**
     * ExpenseTypeFilterService Logic layer to filter the retrived data
     * whose expense in the filter array
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value)
    {
        return $builder->wherein('type', $value);
    }
}
