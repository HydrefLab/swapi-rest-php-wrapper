<?php

namespace HydrefLab\SWAPI\Requests;

use HydrefLab\SWAPI\Resources\Person;

class PeopleRequest extends Request
{
    /**
     * @var string
     */
    protected $path = 'people';

    /**
     * @var
     */
    protected $resource = Person::class;
}