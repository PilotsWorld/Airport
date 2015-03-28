Feature: Creating airport

  Scenario: Create airport with ICAO code
    Given there is no airport with given code
    When I request to create a new airport with:
      | ICAO | Name                           | City     | Country | Timezone      | Latitude  | Longitude |
      | EPKT | Katowice International Airport | Katowice | Poland  | Europo/Warsaw | 50.474251 | 19.080009 |
    Then airport with "ICAO" code "EPKT" should be created