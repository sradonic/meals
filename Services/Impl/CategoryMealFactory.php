<?php

namespace App\Services\Impl;

use App\Domain\Meal;
use App\Services\FactoryMealInterface;

class CategoryMealFactory implements FactoryMealInterface
{

    public function sendRequest($request)
    {
        $page = $request->input('per_page') ? : 5;
        $category = $request->input('category');

        return Meal::with('category')->categoring($category)->paginate($page);
    }
}