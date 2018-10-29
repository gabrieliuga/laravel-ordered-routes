<?php

namespace Sk;

use Illuminate\Events\EventServiceProvider;
use Illuminate\Log\LogServiceProvider;
use Sk\Routing\OrderRoutingServiceProvider;

class Application extends \Illuminate\Foundation\Application
{
    public function __construct($basePath = null)
    {
        parent::__construct($basePath);
    }

    public function registerCoreContainerAliases()
    {
        parent::registerCoreContainerAliases();
        foreach ([
                     'router' => [\Sk\Routing\OrderRouter::class, \Illuminate\Contracts\Routing\Registrar::class, \Illuminate\Contracts\Routing\BindingRegistrar::class],
                 ] as $key => $aliases) {
            foreach ($aliases as $alias) {
                $this->alias($key, $alias);
            }
        }
    }

    protected function registerBaseServiceProviders()
    {
        $this->register(new EventServiceProvider($this));

        $this->register(new LogServiceProvider($this));

        $this->register(new OrderRoutingServiceProvider($this));
    }
}
