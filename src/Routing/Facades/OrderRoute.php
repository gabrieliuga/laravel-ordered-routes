<?php

namespace Sk\Routing\Facades;


use Illuminate\Support\Facades\Route;

/**
 * @method static \Sk\Routing\OrderRoute order(int $order)
 *
 * @see \Illuminate\Routing\Router
 */
class OrderRoute extends Route
{
    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}

