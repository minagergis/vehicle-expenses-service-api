<?php

namespace App\Providers;

use App\Repositories\ExpenseRepository;
use App\Repositories\ExpenseRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class ExpenceRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->app->bind(ExpenseRepositoryInterface::class, ExpenseRepository::class);
    }
}
