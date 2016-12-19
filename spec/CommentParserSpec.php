<?php

namespace spec;

use CommentParser;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CommentParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CommentParser::class);
    }
	
	function it_should_parse_something()
	{
		$this->parse()->shouldReturn('string');
	}
}
