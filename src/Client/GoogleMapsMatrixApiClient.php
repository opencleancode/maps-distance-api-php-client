<?php

namespace GoogleMaps\MatrixApi\Client;

use GoogleMaps\MatrixApi\RequestResponse\ApiQuery;
use GoogleMaps\MatrixApi\RequestResponse\ApiRequest;
use GoogleMaps\MatrixApi\RequestResponse\ApiResponse;
use GoogleMaps\MatrixApi\RequestResponse\DistanceMatrix;
use GoogleMaps\MatrixApi\RequestResponse\ResponseParser\GoogleMapsMatrixApiResponseParser;

class GoogleMapsMatrixApiClient
{
    protected string $apiKey;

    /**
     * @var string
     */
    protected $url = 'https://maps.googleapis.com/maps/api/distancematrix/json';

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function request(DistanceMatrix $distanceMatrix): ApiResponse
    {
        $defaultSearchQuery = [
            'key' => $this->apiKey
        ];
        $searchQuery = array_merge($defaultSearchQuery, $distanceMatrix->createQuery());
        $apiQuery = new ApiQuery($searchQuery);
        $apiResponseParser = new GoogleMapsMatrixApiResponseParser();

        return (new ApiRequest($this->url, $apiQuery, $apiResponseParser))->getRequest();
    }
}
