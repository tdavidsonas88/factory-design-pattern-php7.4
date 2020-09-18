<?php

namespace CarOrder;

interface Car
{
    public function getModel();

    public function getWheel();

    public function hasSunRoof();
}