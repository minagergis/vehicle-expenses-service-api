<?php

namespace App\Repositories;

use App\Models\VehicleExpense;

class ExpenseRepository implements ExpenseRepositoryInterface
{
    protected $expenses;

    /**
     * ExpenseRepository constructor.
     * @param VehicleExpense $expenses
     */
    public function __construct(VehicleExpense $expenses)
    {
        $this->expenses = $expenses;
    }

    /**
     * @param $filterOptions
     * @return mixed
     */
    public function getItems($filterOptions)
    {
        return $this->expenses->filter($filterOptions)->get();
    }
}
