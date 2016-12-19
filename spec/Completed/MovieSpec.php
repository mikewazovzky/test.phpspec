<?php

namespace spec;

use Movie;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    // function it_is_initializable()
    // {
        // $this->shouldHaveType(Movie::class);
    // }
	
	//function Letgo() 
	function Let() 
	{
		$this->beConstructedWith('Terminator');
		//$this->shouldBeAnInstanceOf(Movie::class);
		$this->shouldHaveType(Movie::class);
	}
	
	function it_can_be_rated()
	{
		$this->setRating(5);
		
		//$this->getRating()->shouldEqual(5);
		$this->getRating()->shouldBe(5);
	}
		
	function its_rating_should_not_exceed_five()
	{
		// dynamic method
		//$this->shouldThrow('InvalidArgumentException')->duringSetRating(8);
		$this->shouldThrow('InvalidArgumentException')->during('SetRating', [8]);
	}
	
	function it_can_be_marked_as_watched() 
	{
		$this->watch();
		
		$this->shouldBeWatched();		
	}
	
	function it_can_fetch_the_title_of_the_movie()
	{
		$this->getTitle()->shouldBe('Terminator');
	}
}
