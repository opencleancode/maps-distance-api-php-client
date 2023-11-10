<?php

declare(strict_types=1);

namespace GoogleMaps\MatrixApi\RequestResponse;

use GoogleMaps\MatrixApi\Models\Travel;

class DistanceMatrix
{

    /**
     * @var string
     */
    protected $origins;
    /**
     * @var string
     */
    protected $destinations;
    /**
     * @var string
     */
    protected $mode = Travel::DRIVING;
    /**
     * @var null|string
     */
    protected $language = null;
    /**
     * @var string|null
     */
    protected $units = null;
    /**
     * @var string|null
     */
    protected $region = null;
    /**
     * @var string|null
     */
    protected $avoid = null;
    /**
     * @var null|int
     */
    protected $arrivalTime = null;
    protected ?int $departureTime = null;
    protected ?string $trafficModel = null;
    protected array $transitMode = [];

    protected ?string $transitRoutingPreference = null;

    public function createQuery(): array
    {
        $options = array_merge([
            'origins' => $this->getOrigins(),
            'destinations' => $this->getDestinations(),
            'mode' => $this->getMode(),
            'units' => $this->getUnits(),
            'avoid' => $this->getAvoid(),
            'region' => $this->getRegion(),
            'language' => $this->getLanguage(),
            'arrival_time' => $this->getArrivalTime(),
            'departure_time' => $this->getDepartureTime(),
            'traffic_model' => $this->getTrafficModel(),
            'transit_mode' => $this->getTransitMode(),
            'transit_routing_preference' => $this->getTransitRoutingPreference()
        ]);
        return array_filter($options, function ($value) {
            return $value !== null || $value === '';
        });
    }

    public function getOrigins(): string
    {
        return $this->origins;
    }

    public function setOrigins(string $origins): DistanceMatrix
    {
        $this->origins = $origins;
        return $this;
    }

    public function getDestinations(): string
    {
        return $this->destinations;
    }

    public function setDestinations(string $destinations): DistanceMatrix
    {
        $this->destinations = $destinations;
        return $this;
    }

    public function getMode(): string
    {
        return $this->mode;
    }

    public function setMode(string $mode): DistanceMatrix
    {
        $this->mode = $mode;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): DistanceMatrix
    {
        $this->language = $language;
        return $this;
    }

    public function getUnits(): ?string
    {
        return $this->units;
    }

    public function setUnits(?string $units): DistanceMatrix
    {
        $this->units = $units;
        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): DistanceMatrix
    {
        $this->region = $region;
        return $this;
    }

    public function getAvoid(): ?string
    {
        return $this->avoid;
    }

    public function setAvoid(?string $avoid): DistanceMatrix
    {
        $this->avoid = $avoid;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getArrivalTime(): ?int
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime(?int $arrivalTime): DistanceMatrix
    {
        $this->arrivalTime = $arrivalTime;
        return $this;
    }

    public function getDepartureTime(): ?int
    {
        return $this->departureTime;
    }

    public function setDepartureTime(?int $departureTime): DistanceMatrix
    {
        $this->departureTime = $departureTime;
        return $this;
    }

    public function getTrafficModel(): ?string
    {
        return $this->trafficModel;
    }

    public function setTrafficModel(?string $trafficModel): DistanceMatrix
    {
        $this->trafficModel = $trafficModel;
        return $this;
    }

    public function getTransitMode(): ?array
    {
        return $this->transitMode;
    }

    public function setTransitMode(?array $transitMode): DistanceMatrix
    {
        $this->transitMode = $transitMode;
        return $this;
    }

    public function getTransitRoutingPreference(): ?string
    {
        return $this->transitRoutingPreference;
    }

    public function setTransitRoutingPreference(?string $transitRoutingPreference): DistanceMatrix
    {
        $this->transitRoutingPreference = $transitRoutingPreference;
        return $this;
    }
}