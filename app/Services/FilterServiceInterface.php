<?php

namespace App\Services;
interface FilterServiceInterface
{
    /**
     * Prototype signature to be implemented in the classes
     * @param $builder
     * @param $value
     * @return mixed
     */
    public function filter($builder, $value);
}
