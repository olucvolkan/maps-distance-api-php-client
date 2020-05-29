# PHP Client for Google Distance Matrix API

The Google Distance Matrix API is a service that provides travel distance and time for a matrix of origins and destinations. The information returned is based on the recommended route between start and end points, as calculated by the Google Maps API, and consists of rows containing duration and distance values for each pair.

Please refer to Google Distance Matrix API documentation for further details on request parameters and response format.

###### Installation

`composer require php-google-matrix-distance-api-client
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