<?php


namespace GoogleMaps\MatrixApi\RequestResponse;


interface ApiQueryInterface
{
    public function getApiKey(): string;

    public function setApiKey($key): string;

    public function getQueryString();

    public function getOrigins();

    public function setOrigins(string $origins): string;

    public function getDestinations();

    public function setDestinations(string $destinations): string;
}