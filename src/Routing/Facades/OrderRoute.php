<?php

namespace Giuga\Routing\Facades;


use Illuminate\Support\Facades\Route;

/**
 * @method static \Giuga\Routing\OrderRoute order(int $order)
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

