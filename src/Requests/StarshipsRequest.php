<?php

namespace HydrefLab\SWAPI\Requests;

use HydrefLab\SWAPI\Resources\Starship;

class StarshipsRequest extends Request
{
    /**
     * @var string
     */
    protected $path = 'starships';

    /**
     * @var
     */
    protected $resource = Starship::class;
}