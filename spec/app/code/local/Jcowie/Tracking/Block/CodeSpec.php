<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Jcowie_Tracking_Block_CodeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jcowie_Tracking_Block_Code');
    }
}
