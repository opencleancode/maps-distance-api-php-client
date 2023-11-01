<?php

declare(strict_types=1);

namespace GoogleMaps\MatrixApi\RequestResponse;

use GoogleMaps\MatrixApi\RequestResponse\Exception\MissingApiKeyException;
use GoogleMaps\MatrixApi\RequestResponse\Exception\MissingDestinationsException;
use GoogleMaps\MatrixApi\RequestResponse\Exception\MissingOriginsException;

class ApiQuery extends ParametersCheck implements ApiQueryInterface
{
    public array $parameters;

    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;

        parent::__construct($parameters);
    }

    public function getQueryString(): string
    {
        arsort($this->parameters);

        return http_build_query($this->parameters);
    }

    public function getApiKey(): string
    {
        if (!$this->has('key')) {
            throw new MissingApiKeyException();
        }

        return $this->get('key');
    }

    public function setApiKey(string $key): self
    {
        $this->set('key', $key);

        return $this;
    }

    public function getOrigins()
    {
        if (!$this->has('origins')) {
            throw new MissingOriginsException();
        }

        return $this->get('origins');
    }

    public function setOrigins(string $origins): self
    {
        $this->set('origins', $origins);

        return $this;
    }

    public function getDestinations()
    {
        if (!$this->has('destinations')) {
            throw new MissingDestinationsException();
        }

        return $this->get('destinations');
    }

    public function setDestinations(string $destinations): self
    {
        $this->set('destinations', $destinations);

        return $this;
    }
}
