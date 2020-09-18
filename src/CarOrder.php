<?php

namespace CarOrder;

class CarOrder
{
    protected $carOrders = array();
    protected $carFactory;

    public function __construct()
    {
        $this->carFactory = new CarFactory();
    }

    public function order($model = null)
    {
        $car = $this->carFactory->make($model);
        $this->carOrders[] = $car->getModel();
    }

    public function getCarOrders()
    {
        return $this->carOrders;
    }
}