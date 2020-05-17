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

    /**
     * @return Distance
     */
    public function getDistance(): Distance
    {
        return $this->distance;
    }

    /**
     * @param Distance $distance
     * @return Item
     */
    public function setDistance(Distance $distance): Item
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getDuration(): Duration
    {
        return $this->duration;
    }

    /**
     * @param Duration $duration
     * @return Item
     */
    public function setDuration(Duration $duration): Item
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Item
     */
    public function setStatus(string $status): Item
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginAddress(): string
    {
        return $this->originAddress;
    }

    /**
     * @param string $originAddress
     * @return Item
     */
    public function setOriginAddress(string $originAddress): Item
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationAddress(): string
    {
        return $this->destinationAddress;
    }

    /**
     * @param string $destinationAddress
     * @return Item
     */
    public function setDestinationAddress(string $destinationAddress): Item
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }



}