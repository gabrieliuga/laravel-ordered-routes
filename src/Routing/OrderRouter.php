<?php

namespace Sk\Routing;

use Illuminate\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Routing\Router;

class OrderRouter extends Router
{
    public function __construct(Dispatcher $events, Container $container = null)
    {
        $this->events = $events;
        $this->routes = new OrderRouteCollection;
        $this->container = $container ?: new Container;
    }

    /**
     * Create a new Route object.
     *
     * @param  array|string $methods
     * @param  string $uri
     * @param  mixed $action
     * @return \Sk\Routing\OrderRoute
     */
    protected function newRoute($methods, $uri, $action)
    {
        return (new OrderRoute($methods, $uri, $action))
            ->setRouter($this)
            ->setContainer($this->container);
    }
}

