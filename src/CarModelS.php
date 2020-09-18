<?php

namespace CarOrder;

class CarModelS implements Car
{
    protected string $model = 's';

    protected string $wheel = 'sports';

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