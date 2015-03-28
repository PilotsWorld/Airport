<?php

namespace spec\PilotsWorld\Airport\Domain\Command;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CreateUserCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PilotsWorld\Airport\Domain\Command\CreateUserCommand');
    }
}
