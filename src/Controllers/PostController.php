<?php

namespace Controllers;

class PostController
{
    protected $auth;

    public function __construct(Authorizer $auth)
    {
        $this->auth = $auth;
    }

    public function show()
    {
    	// var_dump('show: ');
    	// DUMMY object method calls return NULL if method exists,
    	// throws Error otherwise 
    	// var_dump($this->auth->guest());
		// var_dump($this->auth->doesNotExist());
    	return 'a task';
    }
}
