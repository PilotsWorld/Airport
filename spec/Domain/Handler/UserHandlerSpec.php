<?php

namespace spec\PilotsWorld\Airport\Domain\Handler;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserHandlerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PilotsWorld\Airport\Domain\Handler\UserHandler');
    }
}
