<?php


namespace GoogleMaps\MatrixApi\RequestResponse;


interface ApiResponseInterface {

    public function getResults();

    public function getSearchInformation();

    public function getQueries();
}