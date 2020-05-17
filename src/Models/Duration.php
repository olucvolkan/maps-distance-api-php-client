<?php


namespace GoogleMaps\MatrixApi\Models;


class Duration
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
     * @return Duration
     */
    public function setValue(int $value): Duration
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
     * @return Duration
     */
    public function setUnitValue(string $unitValue): Duration
    {
        $this->unitValue = $unitValue;
        return $this;
    }


}