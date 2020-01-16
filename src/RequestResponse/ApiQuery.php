<?php


namespace GoogleMaps\MatrixApi\RequestResponse;

use GoogleMaps\MatrixApi\RequestResponse\Exception\MissingApiKeyException;
use GoogleMaps\MatrixApi\RequestResponse\Exception\MissingDestinationsException;
use GoogleMaps\MatrixApi\RequestResponse\Exception\MissingOriginsException;
use Symfony\Component\HttpFoundation\ParameterBag;

class ApiQuery extends ParameterBag implements ApiQueryInterface
{

    /**
     * @return string
     */
    public function getQueryString()
    {
        asort($this->parameters);

        return http_build_query($this->parameters);
    }

    /**
     * @return string
     * @throws Exception\MissingApiKeyException
     */
    public function getApiKey():string
    {
        if (!$this->has('key')) {
            throw new MissingApiKeyException();
        }

        return $this->get('key');
    }

    /**
     * @param $key
     *
     * @return $this
     */
    public function setApiKey($key): string
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

    public function setOrigins(string $origins): string
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

    public function setDestinations(string $destinations): string
    {
        $this->set('destinations', $destinations);

        return $this;
    }


}
