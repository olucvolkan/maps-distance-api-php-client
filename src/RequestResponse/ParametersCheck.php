<?php


namespace GoogleMaps\MatrixApi\RequestResponse;


class ParametersCheck
{

    /**
     * @var array
     */
    private $parameters;

    public function __construct(array  $parameters)
    {
        $this->parameters = $parameters;
    }


    /**
     * Returns a parameter by name.
     *
     * @param string $key
     * @param mixed $default The default value if the parameter key does not exist
     *
     * @return mixed
     */
    public function get(string $key, $default = null)
    {
        return \array_key_exists($key, $this->parameters) ? $this->parameters[$key] : $default;
    }

    /**
     * Sets a parameter by name.
     *
     * @param string $key
     * @param mixed $value The value
     */
    public function set(string $key, $value): void
    {
        $this->parameters[$key] = $value;
    }

    /**
     * Returns true if the parameter is defined.
     *
     * @param string $key
     * @return bool true if the parameter exists, false otherwise
     */
    public function has(string $key): bool
    {
        return \array_key_exists($key, $this->parameters);
    }

}