Feature: Creating airport

  Scenario: Create airport with ICAO code
    Given there is no airport with given code
    When I request to create a new airports with:
      | ICAO | Name                           | City     | Country | Timezone      | Latitude  | Longitude |
      | EPKT | Katowice International Airport | Katowice | Poland  | Europe/Warsaw | 50.474251 | 19.080009 |
    Then airport with code "EPKT" at "ICAO"  and name "Katowice International Airport" should be created