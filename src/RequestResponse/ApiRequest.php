<?php


namespace GoogleMaps\MatrixApi\RequestResponse;

use GoogleMaps\MatrixApi\RequestResponse\Exception\MissingApiQueryException;
use GoogleMaps\MatrixApi\RequestResponse\ResponseParser\GoogleApiResponseParserInterface;


class ApiRequest implements ApiRequestInterface
{
    /**
     * @var string
     */
    private $url;

    private $query;

    private $googleApiResponseParser;

    public function __construct($url,ApiQueryInterface $query = null,GoogleApiResponseParserInterface $googleApiResponseParser = null)
    {
        $this->url = $url;
        $this->query = $query;
        $this->googleApiResponseParser = $googleApiResponseParser;
    }

    /**
     * @return string
     */
    public function getUrl():string
    {
        return $this->url;
    }

    public function getQuery()
    {
        if (empty($this->query)) {
            throw new MissingApiQueryException();
        }

        return $this->query;
    }

    public function setQuery(ApiQueryInterface $query)
    {
        $this->query = $query;
    }

    /**
     * @param string $format
     *
     * @return ApiResponse
     * @throws \InvalidArgumentException
     */
    public function getResponse($format = 'json')
    {
        $url = $this->getUrl();
        $query = $this->getQuery()->getQueryString();

        $url .= '?' . $query;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);

        switch ($format) {
            case 'json':
                return new ApiResponse($result, $this->googleApiResponseParser);
                break;
            default:
                throw new \InvalidArgumentException('Supported formats are json and atom');
        }
    }
}
