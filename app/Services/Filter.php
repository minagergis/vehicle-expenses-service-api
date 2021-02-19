<?php

namespace App\Services;

use App\Services\CompareFilterServices\ExpenseCostMaxFilterService;
use App\Services\CompareFilterServices\ExpenseCostMinFilterService;
use App\Services\CompareFilterServices\ExpenseCreationDateMaxFilterService;
use App\Services\CompareFilterServices\ExpenseCreationDateMinFilterService;
use App\Services\LimitFilterServices\QueryLimitFilterService;
use App\Services\SortFilterServices\ExpenseCostSortFilter;
use App\Services\SortFilterServices\ExpenseCreationDateSortFilter;
use App\Services\WhereFilterServices\ExpenseTypeFilterService;
use App\Services\WhereFilterServices\VehicleNameFilterService;

class Filter extends FilterServiceAbstract
{
    /*
     * list of available filters
     */
    protected $filters = [
        'type' => ExpenseTypeFilterService::class,
        'name' => VehicleNameFilterService::class,
        'max_cost' => ExpenseCostMaxFilterService::class,
        'min_cost' => ExpenseCostMinFilterService::class,
        'max_creation_date' => ExpenseCreationDateMaxFilterService::class,
        'min_creation_date' => ExpenseCreationDateMinFilterService::class,
        'cost_sort' => ExpenseCostSortFilter::class,
        'creation_date_sort' => ExpenseCreationDateSortFilter::class,
        'limit' => QueryLimitFilterService::class,
    ];

}
