<?php

namespace Sk\Routing;

use Illuminate\Routing\RouteCollection;

class OrderRouteCollection extends RouteCollection
{

    /**
     * Determine if a route in the array matches the request.
     *
     * @param  array $routes
     * @param  \Illuminate\Http\Request $request
     * @param  bool $includingMethod
     * @return \Sk\Routing\OrderRoute|null
     */
    protected function matchAgainstRoutes(array $routes, $request, $includingMethod = true)
    {
        list($fallbacks, $routes) = collect($routes)->partition(function ($route) {
            return $route->isFallback;
        });

        return $routes->merge($fallbacks)->filter(function ($value) use ($request, $includingMethod) {
            return $value->matches($request, $includingMethod);
        })->sortBy('order')->first();
    }
}
