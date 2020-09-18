<?php

require_once __DIR__ . '/../vendor/autoload.php';

use CarOrder\CarOrder;

$carOrder = new CarOrder();
var_dump($carOrder->getCarOrders());

$carOrder->order('r');
var_dump($carOrder->getCarOrders());

$carOrder->order('s');
var_dump($carOrder->getCarOrders());
