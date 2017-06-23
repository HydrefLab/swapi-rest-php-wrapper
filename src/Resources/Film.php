<?php

namespace HydrefLab\SWAPI\Resources;

class Film
{
    /**
     * @var Person[]
     */
    public $characters;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var string
     */
    public $director;

    /**
     * @var \DateTime
     */
    public $edited;

    /**
     * @var int
     */
    public $episodeId;

    /**
     * @var string
     */
    public $openingCrawl;

    /**
     * @var Planet[]
     */
    public $plants;

    /**
     * @var string
     */
    public $producer;

    /**
     * @var \DateTime
     */
    public $relateDate;

    /**
     * @var Species[]
     */
    public $species;

    /**
     * @var Starship[]
     */
    public $starships;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;

    /**
     * @var Vehicle[]
     */
    public $vehicles;
}