       <?php
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
        'getAirports',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

