<?php

namespace HydrefLab\SWAPI\Resources;

class Starship
{
    /**
     * @var string
     */
    public $mglt;

    /**
     * @var int
     */
    public $cargoCapacity;

    /**
     * @var string
     */
    public $consumables;

    /**
     * @var int
     */
    public $costInCredits;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var int
     */
    public $crew;

    /**
     * @var \DateTime
     */
    public $edited;

    /**
     * @var float
     */
    public $hyperdriveRating;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $manufacturer;

    /**
     * @var float
     */
    public $maxAtmospheringSpeed;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $passengers;

    /**
     * @var Film[]
     */
    public $films;

    /**
     * @var Person[]
     */
    public $pilots;

    /**
     * @var string
     */
    public $starshipClass;

    /**
     * @var string
     */
    public $url;
}