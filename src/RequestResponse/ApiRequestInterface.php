<?php

namespace GoogleMaps\MatrixApi\RequestResponse;

interface ApiRequestInterface
{
    public function getUrl(): string;

    public function setQuery(ApiQueryInterface $query);

    public function getRequest($format = 'json');
}
