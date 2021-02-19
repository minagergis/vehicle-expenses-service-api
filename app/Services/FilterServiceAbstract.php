<?php

namespace App\Services;



use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class FilterServiceAbstract
{
    protected $request;
    protected $filters = [];

    /**
     * FilterServiceAbstract constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param Builder $builder
     * @return Builder
     */
    public function filter(Builder $builder)
    {
        foreach ($this->getFilters() as $filter => $value) {
            $this->resolveFilter($filter)->filter($builder, $value);
        }
        return $builder;
    }

    /**
     * @return array
     */
    protected function getFilters()
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }

    /**
     * @param $filter
     * @return mixed
     */
    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }
}
