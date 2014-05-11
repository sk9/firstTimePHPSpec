<?php

namespace spec\Sk9\Todo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sk9\Todo\Task');
    }
}
