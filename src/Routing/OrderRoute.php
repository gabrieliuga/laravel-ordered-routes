<?php

namespace Sk\Routing;

use Illuminate\Routing\Route;

class OrderRoute extends Route
{
    /**
     * @var int Default route order
     */
    public $order = 0;

    /**
     * Set the order for this route
     * @param $order
     * @return $this
     */
    public function order($order)
    {
        $this->order = $order;
        return $this;
    }

}

