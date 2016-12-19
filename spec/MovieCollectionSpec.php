<?php

namespace spec;

use Movie;
use MovieCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MovieCollection::class);
    }
	
	function it_stores_a_collection_of_movies(Movie $movie)
	{
		$this->add($movie);
		
		$this->shouldHaveCount(1);
	}
	
	function it_can_add_array_of_movies(Movie $movie1, Movie $movie2)
	{
		$this->add([$movie1, $movie2]);
		
		$this->shouldHaveCount(2);
	}	
	
	function it_can_mark_all_movies_as_watched(Movie $movie1, Movie $movie2)
	{
		$movie1->watch()->shouldBeCalled();
		//$movie1->watch()->shouldBeCalledTimes(2);
		$movie2->watch()->shouldBeCalled();
		
		$this->add([$movie1, $movie2]);
		$this->markAllAsWatched();
	}
}
