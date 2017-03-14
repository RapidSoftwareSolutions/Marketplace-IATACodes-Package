<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class IATACodesTest extends BaseTestCase
{

    public function testListMetrics()
    {

        $routes = [
            'getSingleAirportTimetable',
            'getWorldFlights',
            'getNearByAirports',
            'autocompleteQuery',
            'getTimezones',
            'getRoutesByArrivalCodes',
            'getRoutesByDepartureCodes',
            'getRoutesByFlightNumbers',
            'getRoutes',
            'getAirplanesByAirline',
            'getAirplaneByRegistrationNumber',
            'getAirplanes',
            'getAircraftsByCodes',
            'getAircrafts',
            'getTaxesByCodes',
            'getTaxes',
            'getAirlinesByCodes',
            'getAirlines',
            'getCountriesByCodes',
            'getCountries',
            'getCitiesByCodes',
            'getCities',
            'getAirportsByCodes',
            'getAirports'
        ];

        foreach ($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/IATACodes/' . $file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in ' . $file . ' method');
        }
    }

}
