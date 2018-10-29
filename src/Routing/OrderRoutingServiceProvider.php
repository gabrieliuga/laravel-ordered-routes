<?php

namespace Sk\Routing;

use Illuminate\Routing\RoutingServiceProvider;

class OrderRoutingServiceProvider extends RoutingServiceProvider
{
    protected function registerRouter()
    {
        $this->app->singleton('router', function ($app) {
            return new OrderRouter($app['events'], $app);
        });
    }
}
