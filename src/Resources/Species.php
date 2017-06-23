<?php

namespace HydrefLab\SWAPI\Resources;

class Species
{
    /**
     * @var int
     */
    public $averageHeight;

    /**
     * @var int
     */
    public $averageLifespan;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var string
     */
    public $designation;

    /**
     * @var \DateTime
     */
    public $edited;

    /**
     * @var string
     */
    public $eyeColors;

    /**
     * @var string
     */
    public $hairColors;

    /**
     * @var Planet
     */
    public $homeworld;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Person[]
     */
    public $people;

    /**
     * @var Film[]
     */
    public $films;

    /**
     * @var string
     */
    public $skinColors;

    /**
     * @var string
     */
    public $url;
}