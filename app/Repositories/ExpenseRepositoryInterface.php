<?php

namespace App\Repositories;
interface ExpenseRepositoryInterface
{

    /**
     * Prototype signature to be implemented in the Repository
     * @param $filterOptions
     * @return mixed
     */

    public function getItems($filterOptions);
}
