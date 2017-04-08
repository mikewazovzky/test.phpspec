<?php

namespace spec\Controllers;

use Controllers\PostController;
use Controllers\Authorizer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PostControllerSpec extends ObjectBehavior
{
    function let(Authorizer $auth)
    {
    	// DUMMY Authorizer is created
    	$this->beConstructedWith($auth);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(PostController::class);
    }

    function it_shows_a_specific_task()
    {
    	// we don't care abou creeting an Authorizer and passing it to 
    	// constructor
    	// test DUMMY is created automatically for us
    	$this->show()->shouldReturn('a task');
    }
}
