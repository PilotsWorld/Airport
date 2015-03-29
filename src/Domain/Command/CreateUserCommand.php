<?php

namespace PilotsWorld\Airport\Domain\Command;

use PilotsWorld\Airport\Domain\Model\AirportId;
use PilotsWorld\Airport\Domain\UseCase\CreateAirportUseCase;

class CreateUserCommand
{
    protected $airportId;

    protected $airFieldData;

    /**
     * CreateUserCommand constructor.
     * @param $airportId
     * @param $airFieldData
     */
    public function __construct(AirportId $airportId, CreateAirportUseCase $airFieldData)
    {
        $this->airportId = $airportId;
        $this->airFieldData = $airFieldData;
    }

}
