<?php

namespace GoogleMaps\MatrixApi\Models;

class Result implements \JsonSerializable
{

    /**
     * @var string
     */
    public $status;

    /**
     * @var array
     */
    public $originAddresses;

    /**
     * @var array
     */
    public $destinationAddresses;

    /**
     * @var array
     */
    public $items;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): Result
    {
        $this->status = $status;
        return $this;
    }

    public function getOriginAddresses(): array
    {
        return $this->originAddresses;
    }

    public function setOriginAddresses(array $originAddresses): Result
    {
        $this->originAddresses = $originAddresses;
        return $this;
    }

    public function getDestinationAddresses(): array
    {
        return $this->destinationAddresses;
    }

    public function setDestinationAddresses(array $destinationAddresses): Result
    {
        $this->destinationAddresses = $destinationAddresses;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): Result
    {
        $this->items = $items;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'status' => $this->getStatus(),
            'originAddresses'=> $this->getOriginAddresses(),
            'destinationsAddresses' => $this->getDestinationAddresses(),
            'items' => $this->getItems()
        ];
    }
}
