<?php

namespace Domain;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\TableNode;
use PilotsWorld\Airport\Domain\UseCase\CreateAirportUseCase;
use PilotsWorld\Airport\Domain\Model\AirportId;
use PilotsWorld\Airport\Domain\Command\CreateUserCommand;
use PilotsWorld\Airport\Domain\Handler\UserHandler;

class AirportContext implements Context, SnippetAcceptingContext
{

    protected $userHandler;

    /**
     * AirportContext constructor.
     */
    public function __construct()
    {
        $this->userHandler = new UserHandler();
    }


    /**
     * @Given there is no airport with given code
     */
    public function thereIsNoAirportWithGivenCode()
    {
        return;
    }

    /**
     * @When I request to create a new airports with:
     */
    public function iRequestToCreateANewAirportsWith(TableNode $table)
    {
        foreach ($table as $key => $row)
        {
            $useCase = new CreateAirportUseCase();
            $useCase->name = $row["Name"];
            $useCase->city = $row["City"];
            $useCase->country = $row["Country"];
            $useCase->latitude = $row["Latitude"];
            $useCase->longitude = $row["Longitude"];
            $useCase->timeZone = $row["Timezone"];
            if (array_key_exists('ICAO', $row)) {
                $useCase->ICAOCode = $row["ICAO"];
            }
            if(array_key_exists('IATA', $row)) {
                $useCase->ICAOCode = $row["IATA"];
            }
            $airportId = new AirportId("airport-". $key);
            $userCommand = new CreateUserCommand($airportId, $useCase);
            $this->userHandler->handle($userCommand);
        }

    }
    /**
     * @Then airport with code :code at :system  and name :airportName should be created
     */
    public function airportWithCodeAtAndNameShouldBeCreated($code, $system, $airportName)
    {
        throw new PendingException();
    }


}