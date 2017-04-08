<?php

namespace spec\Controllers;

use Controllers\TaskController;
use Controllers\Authorizer;
use Controllers\TaskRepository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskControllerSpec extends ObjectBehavior
{
    function let(Authorizer $auth, TaskRepository $repository)
    {
    	$this->beConstructedWith($auth, $repository);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(TaskController::class);
    }

    function it_does_not_allow_guest_user_create_a_task(Authorizer $auth)
    {
    	$auth->guest()->willReturn(true);
    	$this->store()->shouldReturn('redirect');
    }

    function it_creates_task(Authorizer $auth, TaskRepository $repository)
    {
    	$auth->guest()->willReturn(false);
    	$repository->create('...')->shouldBeCalled();
    	$this->store();
    }
}
