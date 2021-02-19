<?php

namespace App\Services\CompareFilterServices;

use App\Services\FilterServiceInterface;

class ExpenseCreationDateMinFilterService implements FilterServiceInterface
{

    /**
     * ExpenseCreationDateMinFilterService Logic layer to filter the retrived data
     * which has creation date less than the filter value
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value)
    {
        return $builder->where('createdAt', '<', $value);
    }
}
