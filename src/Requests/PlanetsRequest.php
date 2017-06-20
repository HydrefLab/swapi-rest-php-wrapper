<?php

namespace HydrefLab\SWAPI\Requests;

use HydrefLab\SWAPI\Resources\Planet;

class PlanetsRequest extends Request
{
    /**
     * @var string
     */
    protected $path = 'planets';

    /**
     * @var
     */
    protected $resource = Planet::class;
}