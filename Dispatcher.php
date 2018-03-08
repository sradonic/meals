<?php


namespace App\Model;

use Illuminate\Http\Request;
use App\Services\Impl\DispatcherFactory;

class Dispatcher
{
    public static function apply(Request $filters)
    {
        $dispatcherFactory = new DispatcherFactory();
        $meals = $dispatcherFactory->filter($filters);
        return response()->api($meals);
    }
}