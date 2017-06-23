<?php

namespace HydrefLab\SWAPI\Resources;

class Person
{
    /**
     * @var string
     */
    public $birthYear;

    /**
     * @var string
     */
    public $eyeColor;

    /**
     * @var Film[]
     */
    public $films;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $hairColor;

    /**
     * @var int
     */
    public $height;

    /**
     * @var Planet
     */
    public $homeworld;

    /**
     * @var float
     */
    public $mass;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skinColor;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var \DateTime
     */
    public $edited;

    /**
     * @var Species
     */
    public $species;

    /**
     * @var Starship[]
     */
    public $starships;

    /**
     * @var string
     */
    public $url;

    /**
     * @var Vehicle[]
     */
    public $vehicles;
}