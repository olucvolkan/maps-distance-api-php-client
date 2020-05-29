# PHP Client for Google Distance Matrix API

The Google Distance Matrix API is a service that provides travel distance and time for a matrix of origins and destinations. The information returned is based on the recommended route between start and end points, as calculated by the Google Maps API, and consists of rows containing duration and distance values for each pair.

Please refer to Google Distance Matrix API documentation for further details on request parameters and response format.

###### Installation

`composer require volk/php-google-matrix-distance-api-client
`
###### Basic Usage

       $distanceMatrix = new DistanceMatrix();
       
        $distanceMatrix->setOrigins('Vancouver, BC, Canada | Seattle, État de Washington, États-Unis')
            ->setDestinations('San Francisco, Californie | États-Unis,Victoria, BC, Canada')
            ->setUnits(Unit::IMPERIAL);

        $matrixClient = new GoogleMapsMatrixApiClient(self::API_KEY);
        $result = $matrixClient->request($distanceMatrix)->getResults();
               
                $result->getStatus();
                $result->getDestinationAddresses();
                $result->getOriginAddresses();
        
                /** @var Item $item */
                foreach ($result->getItems() as $item){
                    
                        $item->getStatus();
                        $item->getDestinationAddress();
                        $item->getOriginAddress();
                        $item->getDistance()->getValue();
                        $item->getDistance()->getUnitValue();
                        $item->getDuration()->getValue();
                        $item->getDuration()->getUnitValue();
                }
 
 
 
 ###### Request Parameters Options

| Field      | Type | Description     | Required
| :---        |    :----:   |          ---: |          ---: |
| origins      | string       | Origin Point Coordinate or Place Name   | True
| destinations   | string        | Destinations Point Coordinate or Place Name      | True
| mode   | string        | Travel Mode (driving,walking etc.)     | False
| language   | string        | Response Language     | False
|  unit   | string        | Distance unit      | False
|  trafficModel   | string        | Traffic Type (best_guess,pessimistic) | False



###### Example Response

![example response](https://img.techpowerup.org/200529/screen-shot-2020-05-30-at-00-29-59.png,"Example Response")  
 

