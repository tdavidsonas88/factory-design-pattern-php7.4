<?php

namespace CarOrder;

class CarFactory
{
    // Determine which model to manufacture, and instantiate the concrete classes that make each model

    public function make($model = null)
    {
        if (strtolower($model == 'r')) {
            return new CarModelR();
        }
        return new CarModelS();
    }
}