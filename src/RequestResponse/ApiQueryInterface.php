<?php


namespace GoogleMaps\MatrixApi\RequestResponse;


interface ApiQueryInterface
{
    public function getApiKey();

public function setApiKey($key);

    public function getQueryString();
}