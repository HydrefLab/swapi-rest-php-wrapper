<?php

namespace HydrefLab\SWAPI\Requests;

use HydrefLab\SWAPI\Resources\Species;

class SpeciesRequest extends Request
{
    /**
     * @var string
     */
    protected $path = 'species';

    /**
     * @var
     */
    protected $resource = Species::class;
}