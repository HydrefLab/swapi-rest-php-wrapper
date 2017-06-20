<?php

namespace HydrefLab\SWAPI\Requests;

use HydrefLab\SWAPI\Resources\Film;

class FilmsRequest extends Request
{
    /**
     * @var string
     */
    protected $path = 'films';

    /**
     * @var
     */
    protected $resource = Film::class;
}