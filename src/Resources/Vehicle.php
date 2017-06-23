<?php

namespace HydrefLab\SWAPI\Resources;

class Vehicle
{
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
     * @var Person[]
     */
    public $pilots;

    /**
     * @var Film[]
     */
    public $films;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $vehicleClass;
}