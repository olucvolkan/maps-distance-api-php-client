<?php


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
    /**
     * @var null|int
     */
    protected $departureTime = null;
    /**
     * @var string|null
     */
    protected $trafficModel = null;
    /**
     * @var array|null
     */
    protected $transitMode = [];
    /**
     * @var string|null
     */
    protected $transitRoutingPreference = null;

    public function createQuery()
    {
        $options = array_merge([
            'origins'                    => $this->getOrigins(),
            'destinations'               => $this->getDestinations(),
            'mode'                       => $this->getMode(),
            'units'                      => $this->getUnits(),
            'avoid'                      => $this->getAvoid(),
            'region'                     => $this->getRegion(),
            'language'                   => $this->getLanguage(),
            'arrival_time'               => $this->getArrivalTime(),
            'departure_time'             => $this->getDepartureTime(),
            'traffic_model'              => $this->getTrafficModel(),
            'transit_mode'               => $this->getTransitMode(),
            'transit_routing_preference' => $this->getTransitRoutingPreference()
        ]);
        return array_filter($options, function ($value) {
            return $value !== null || $value === '';
        });

    }

    /**
     * @return string
     */
    public function getOrigins(): string
    {
        return $this->origins;
    }

    /**
     * @param string $origins
     * @return DistanceMatrix
     */
    public function setOrigins(string $origins): DistanceMatrix
    {
        $this->origins = $origins;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinations(): string
    {
        return $this->destinations;
    }

    /**
     * @param string $destinations
     * @return DistanceMatrix
     */
    public function setDestinations(string $destinations): DistanceMatrix
    {
        $this->destinations = $destinations;
        return $this;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return DistanceMatrix
     */
    public function setMode(string $mode): DistanceMatrix
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     * @return DistanceMatrix
     */
    public function setLanguage(?string $language): DistanceMatrix
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnits(): ?string
    {
        return $this->units;
    }

    /**
     * @param string|null $units
     * @return DistanceMatrix
     */
    public function setUnits(?string $units): DistanceMatrix
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|null $region
     * @return DistanceMatrix
     */
    public function setRegion(?string $region): DistanceMatrix
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvoid(): ?string
    {
        return $this->avoid;
    }

    /**
     * @param string|null $avoid
     * @return DistanceMatrix
     */
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

    /**
     * @param int|null $arrivalTime
     * @return DistanceMatrix
     */
    public function setArrivalTime(?int $arrivalTime): DistanceMatrix
    {
        $this->arrivalTime = $arrivalTime;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDepartureTime(): ?int
    {
        return $this->departureTime;
    }

    /**
     * @param int|null $departureTime
     * @return DistanceMatrix
     */
    public function setDepartureTime(?int $departureTime): DistanceMatrix
    {
        $this->departureTime = $departureTime;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTrafficModel(): ?string
    {
        return $this->trafficModel;
    }

    /**
     * @param string|null $trafficModel
     * @return DistanceMatrix
     */
    public function setTrafficModel(?string $trafficModel): DistanceMatrix
    {
        $this->trafficModel = $trafficModel;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getTransitMode(): ?array
    {
        return $this->transitMode;
    }

    /**
     * @param array|null $transitMode
     * @return DistanceMatrix
     */
    public function setTransitMode(?array $transitMode): DistanceMatrix
    {
        $this->transitMode = $transitMode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransitRoutingPreference(): ?string
    {
        return $this->transitRoutingPreference;
    }

    /**
     * @param string|null $transitRoutingPreference
     * @return DistanceMatrix
     */
    public function setTransitRoutingPreference(?string $transitRoutingPreference): DistanceMatrix
    {
        $this->transitRoutingPreference = $transitRoutingPreference;
        return $this;
    }




}