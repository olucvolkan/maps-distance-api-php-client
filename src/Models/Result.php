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

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Result
     */
    public function setStatus(string $status): Result
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array
     */
    public function getOriginAddresses(): array
    {
        return $this->originAddresses;
    }

    /**
     * @param array $originAddresses
     * @return Result
     */
    public function setOriginAddresses(array $originAddresses): Result
    {
        $this->originAddresses = $originAddresses;
        return $this;
    }

    /**
     * @return array
     */
    public function getDestinationAddresses(): array
    {
        return $this->destinationAddresses;
    }

    /**
     * @param array $destinationAddresses
     * @return Result
     */
    public function setDestinationAddresses(array $destinationAddresses): Result
    {
        $this->destinationAddresses = $destinationAddresses;
        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return Result
     */
    public function setItems(array $items): Result
    {
        $this->items = $items;
        return $this;
    }


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'status' => $this->getStatus(),
            'originAddressses'=> $this->getOriginAddresses(),
            'destinationsAddresses' => $this->getDestinationAddresses(),
            'items' => $this->getItems()
        ];
    }
}