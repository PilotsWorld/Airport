<?php

namespace spec\PilotsWorld\Airport\Domain\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AirportIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PilotsWorld\Airport\Domain\Model\AirportId');
    }
}
