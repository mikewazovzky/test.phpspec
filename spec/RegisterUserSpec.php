<?php

namespace spec;

use RegisterUser;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use UserRepository;
use Mailer;

class RegisterUserSpec extends ObjectBehavior
{
    // Class being tested should be constructed with UserRepository dependency 
    // set via constructor injection
    function let(UserRepository $repository, Mailer $mailer)
    {
        $this->beConstructedWith($repository, $mailer);
    }  
    
    function it_is_initializable()
    {
        $this->shouldHaveType(RegisterUser::class);
    }
    
    function it_creates_a_new_user(UserRepository $repository)
    {
        $user = ['username' => 'Mike', 'email' => 'mike@example.com'];
        
        $repository->create($user)->shouldBeCalled();
        
        $this->register($user);        
    }
    
    function it_sends_a_welcome_email(Mailer $mailer)
    {
        $user = ['username' => 'Mike', 'email' => 'mike@example.com'];
        
        $mailer->sendWelcome($user['email'])->shouldBeCalled();
        
        $this->register($user);        
    }
}
