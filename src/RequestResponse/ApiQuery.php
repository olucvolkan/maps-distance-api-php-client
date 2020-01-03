<?php


namespace GoogleMaps\MatrixApi\RequestResponse;

use GoogleMaps\MatrixApi\RequestResponse\Exception\MissingApiKeyException;
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
     * @return mixed
     * @throws Exception\MissingApiKeyException
     */
    public function getApiKey()
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
    public function setApiKey($key)
    {
        $this->set('key', $key);

        return $this;
    }


}
