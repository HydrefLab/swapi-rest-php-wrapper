<?php

namespace HydrefLab\SWAPI\Requests;

use HydrefLab\SWAPI\Resources\Vehicle;

class VehiclesRequest extends Request
{
    /**
     * @var string
     */
    protected $path = 'vehicles';

    /**
     * @var
     */
    protected $resource = Vehicle::class;
}