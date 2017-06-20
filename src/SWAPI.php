<?php

namespace HydrefLab\SWAPI;

use GuzzleHttp\Client;
use HydrefLab\SWAPI\Requests\FilmsRequest;
use HydrefLab\SWAPI\Requests\PeopleRequest;
use HydrefLab\SWAPI\Requests\PlanetsRequest;
use HydrefLab\SWAPI\Requests\SpeciesRequest;
use HydrefLab\SWAPI\Requests\StarshipsRequest;
use HydrefLab\SWAPI\Requests\VehiclesRequest;

class SWAPI
{
    const API_URI = 'http://swapi.co/api/';

    /**
     * @var Client
     */
    protected $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => self::API_URI,
            'default' => ['headers' => ['Accept' => 'application/json']],
        ]);
    }

    /**
     * @return FilmsRequest
     */
    public function films(): FilmsRequest
    {
        return new FilmsRequest($this->httpClient);
    }

    /**
     * @return PeopleRequest
     */
    public function people(): PeopleRequest
    {
        return new PeopleRequest($this->httpClient);
    }

    /**
     * @return PlanetsRequest
     */
    public function planets(): PlanetsRequest
    {
        return new PlanetsRequest($this->httpClient);
    }

    /**
     * @return SpeciesRequest
     */
    public function species(): SpeciesRequest
    {
        return new SpeciesRequest($this->httpClient);
    }

    /**
     * @return StarshipsRequest
     */
    public function starships(): StarshipsRequest
    {
        return new StarshipsRequest($this->httpClient);
    }

    /**
     * @return VehiclesRequest
     */
    public function vehicles(): VehiclesRequest
    {
        return new VehiclesRequest($this->httpClient);
    }
}