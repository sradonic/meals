<?php

namespace App\Services\Impl;

use App\Domain\Meal;
use App\Services\FactoryMealInterface;

class BasicMealFactory implements FactoryMealInterface
{
    public function sendRequest($request)
    {
        $page = $request->input('page');

        return Meal::with('category', 'tags')->paginate($page);
    }
}