<?php

namespace App\Services\CompareFilterServices;

use App\Services\FilterServiceInterface;

class ExpenseCreationDateMaxFilterService implements FilterServiceInterface
{
    /**
     * ExpenseCreationDateMaxFilterService Logic layer to filter the retrived data
     * which has creation date more than the filter value
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value)
    {
        return $builder->where('createdAt', '>', $value);
    }
}
