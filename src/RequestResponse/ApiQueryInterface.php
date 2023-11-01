<?php

declare(strict_types=1);

namespace GoogleMaps\MatrixApi\RequestResponse;

interface ApiQueryInterface
{
    public function getApiKey(): string;

    public function setApiKey(string $key): ApiQueryInterface;

    public function getQueryString();

    public function getOrigins();

    public function setOrigins(string $origins): ApiQueryInterface;

    public function getDestinations();

    public function setDestinations(string $destinations): ApiQueryInterface;
}
