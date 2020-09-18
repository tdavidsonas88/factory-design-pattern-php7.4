<?php

namespace CarOrder;

class CarModelR implements Car
{
    protected string $model = 'r';

    protected string $wheel = 'regular';

    protected bool $sunRoof = true;

    public function getModel()
    {
        return $this->model;
    }

    public function getWheel()
    {
        return $this->wheel;
    }

    public function hasSunRoof()
    {
        return $this->sunRoof;
    }
}