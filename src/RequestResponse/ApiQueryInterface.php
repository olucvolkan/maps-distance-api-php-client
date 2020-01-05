<?php


namespace GoogleMaps\MatrixApi\RequestResponse;


interface ApiQueryInterface
{
    public function getApiKey();

    public function setApiKey($key):string ;

    public function getQueryString();


}