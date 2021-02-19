<?php

namespace App\Services\LimitFilterServices;
use App\Services\FilterServiceInterface;


class QueryLimitFilterService implements FilterServiceInterface
{
    /**
     * QueryLimitFilterService Logic layer to Limit the retrived data
     * by the filter value
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value)
    {
        return $builder->Limit($value);
    }
}
