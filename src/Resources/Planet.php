<?php

namespace HydrefLab\SWAPI\Resources;

class Planet
{
    /**
     * @var string
     */
    public $climate;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var int
     */
    public $diameter;

    /**
     * @var \DateTime
     */
    public $edited;

    /**
     * @var Film[]
     */
    public $films;

    /**
     * @var int
     */
    public $gravity;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $orbitalPeriod;

    /**
     * @var int
     */
    public $population;

    /**
     * @var Person[]
     */
    public $residents;

    /**
     * @var int
     */
    public $rotationPeriod;

    /**
     * @var float
     */
    public $surfaceWater;

    /**
     * @var string
     */
    public $terrain;

    /**
     * @var string
     */
    public $url;
}