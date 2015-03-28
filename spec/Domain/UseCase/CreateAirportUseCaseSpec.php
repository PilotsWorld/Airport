<?php

namespace spec\PilotsWorld\Airport\Domain\UseCase;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CreateAirportUseCaseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PilotsWorld\Airport\Domain\UseCase\CreateAirportUseCase');
    }
}
