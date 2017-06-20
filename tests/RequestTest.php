<?php

class RequestTest extends PHPUnit_Framework_TestCase
{
    public function test_request_returns_decoded_data()
    {
        $mock = new \GuzzleHttp\Handler\MockHandler([
            new \GuzzleHttp\Psr7\Response(200, [], '{"some":"details"}')
        ]);

        $handler = \GuzzleHttp\HandlerStack::create($mock);
        $httpClient = new \GuzzleHttp\Client(['handler' => $handler]);

        $filmsRequest = new \HydrefLab\SWAPI\Requests\Request($httpClient);
        $this->assertArraySubset(['some' => 'details'], $filmsRequest->all());
    }

    public function test_request_returns_null_on_swapi_404()
    {
        $mock = new \GuzzleHttp\Handler\MockHandler([
            new \GuzzleHttp\Psr7\Response(404, [])
        ]);

        $handler = \GuzzleHttp\HandlerStack::create($mock);
        $httpClient = new \GuzzleHttp\Client(['handler' => $handler]);

        $filmsRequest = new \HydrefLab\SWAPI\Requests\Request($httpClient);
        $this->assertNull($filmsRequest->all());
    }

    public function test_request_returns_null_on_invalid_json_from_swapi()
    {
        $mock = new \GuzzleHttp\Handler\MockHandler([
            new \GuzzleHttp\Psr7\Response(200, [], '{"some":"invalid json"')
        ]);

        $handler = \GuzzleHttp\HandlerStack::create($mock);
        $httpClient = new \GuzzleHttp\Client(['handler' => $handler]);

        $filmsRequest = new \HydrefLab\SWAPI\Requests\Request($httpClient);
        $this->assertNull($filmsRequest->all());
    }
}