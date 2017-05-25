[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/IATACodes/functions?utm_source=RapidAPIGitHub_IATACodesFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# IATACodes Package
IATACodes
* Domain: [IATACodes](http://iatacodes.org/) 
* Credentials: apiKey

## How to get credentials: 
0. Go to [IATACodes website](http://iatacodes.org/) 
1. Go to [Register page](http://iatacodes.org/free_access) to get your API key

## IATACodes.getAirports
Get data by all airports

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getAirportsByCodes
Get one or multiple airports using IATA codes

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from IATACodes
| airportCodes| String     | IATA codes of airports separated by coma
| language    | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getCities
Get data by all cities

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getCitiesByCodes
Get one or multiple cities using IATA codes

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from IATACodes
| cityCodes| String     | IATA codes of cities separated by coma
| language | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getCountries
Get data by all countries

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getCountriesByCodes
Get one or multiple countries using IATA codes

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from IATACodes
| countryCodes| String     | IATA codes of countries separated by coma
| language    | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getAirlines
Get data by all airlines

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getAirlinesByCodes
Get one or multiple airlines using IATA codes

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from IATACodes
| airlineCodes| String     | IATA codes of airlines separated by coma
| language    | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getTaxes
Get data by all taxes

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getTaxesByCodes
Get one or multiple taxes using codes

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| taxCodes| String     | Codes of taxes separated by coma
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getAircrafts
Get data by all aircrafts

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getAircraftsByCodes
Get one or multiple aircrafts using IATA codes

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key obtained from IATACodes
| aircraftCodes| String     | IATA codes of aircrafts separated by coma
| language     | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getAirplanes
Get data by all airplanes

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr
| page    | Number     | Page number
| limit   | Number     | Limit per page

## IATACodes.getAirplaneByRegistrationNumber
Get one airplanes using Registration Number

| Field                     | Type       | Description
|---------------------------|------------|----------
| apiKey                    | credentials| Api key obtained from IATACodes
| airplaneRegistrationNumber| String     | Airplanes Registration Number
| language                  | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getAirplanesByAirline
Get airplanes using airline code

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from IATACodes
| airlineCode| String     | Airline IATA code
| language   | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr
| page       | Number     | Page number
| limit      | Number     | Limit per page

## IATACodes.getRoutes
Get data by all routes

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getRoutesByFlightNumbers
Get data by flight numbers

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key obtained from IATACodes
| flightNumbers| String     | Flight numbers separated by coma
| language     | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getRoutesByDepartureCodes
Get data by departure codes

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Api key obtained from IATACodes
| departureCodes| String     | Departure codes separated by coma
| language      | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getRoutesByArrivalCodes
Get data by arrival codes

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from IATACodes
| arrivalCodes| String     | Arrival codes separated by coma
| language    | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getTimezones
Get data by all timezones

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.autocompleteQuery
Find airports and cities by query string

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| query   | String     | Request query
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getNearByAirports
Find nearest airports by latitude/longitude and distance

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from IATACodes
| coordinates | String     | Location latitude and longitude coma separated
| distance    | Number     | Distance from location
| language    | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getWorldFlights
Real-Time information about current flights in world

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from IATACodes
| language| String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

## IATACodes.getSingleAirportTimetable
Current timetable by specified airport 

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key obtained from IATACodes
| airportCode  | String     | IATA code of airport
| timetableType| String     | Type of timetable. Possible values: arrival, departure
| language     | String     | Language. Possible values: en (by default), fr, de, es, it, ru, th, tr

