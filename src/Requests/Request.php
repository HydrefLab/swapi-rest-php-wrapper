<?php

namespace HydrefLab\SWAPI\Requests;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class Request
{
    /**
     * @var Client
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $path = '';

    /**
     * @var string
     */
    protected $resource = '';

    /**
     * @param Client $httpClient
     */
    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param int $page
     * @return array|null
     */
    public function all(int $page = 1): ?array
    {
        $response = $this->httpClient->request(
            'GET',
            sprintf('%s/?page=%s', $this->path, $page),
            ['http_errors' => false]
        );

        // @TODO: hydrate results

        return $this->processResponse($response);
    }

    /**
     * @param int $id
     * @return array|null
     */
    public function get(int $id): ?array
    {
        // @TODO: implement
    }

    public function search(string $query)
    {
        // @TODO: implement
    }

    /**
     * @param ResponseInterface $response
     * @return array|null
     */
    protected function processResponse(ResponseInterface $response): ?array
    {
        // @TODO: handle different status codes

        switch ($response->getStatusCode()) {
            case 200:
                return json_decode($response->getBody()->getContents(), true);
            case 404:
                return null;
            default:
                return null;
        }
    }
}