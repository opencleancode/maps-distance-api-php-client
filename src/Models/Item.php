<?php

namespace GoogleMaps\MatrixApi\Models;

class Item
{

    /**
     * @var Distance
     */
    public $distance;

    /**
     * @var Duration
     */
    public $duration;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $originAddress;

    /**
     * @var string
     */
    public $destinationAddress;

    public function getDistance(): Distance
    {
        return $this->distance;
    }

    public function setDistance(Distance $distance): Item
    {
        $this->distance = $distance;
        return $this;
    }

    public function getDuration(): Duration
    {
        return $this->duration;
    }

    public function setDuration(Duration $duration): Item
    {
        $this->duration = $duration;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): Item
    {
        $this->status = $status;
        return $this;
    }

    public function getOriginAddress(): string
    {
        return $this->originAddress;
    }

    public function setOriginAddress(string $originAddress): Item
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    public function getDestinationAddress(): string
    {
        return $this->destinationAddress;
    }

    public function setDestinationAddress(string $destinationAddress): Item
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }
}
