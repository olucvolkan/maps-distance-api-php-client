<?php


namespace GoogleMaps\MatrixApi\Models;


class Distance
{

    /**
     * @var integer
     */
    public $value;

    /**
     * @var string
     */
    public $unitValue;

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return Distance
     */
    public function setValue(int $value): Distance
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitValue(): string
    {
        return $this->unitValue;
    }

    /**
     * @param string $unitValue
     * @return Distance
     */
    public function setUnitValue(string $unitValue): Distance
    {
        $this->unitValue = $unitValue;
        return $this;
    }



}