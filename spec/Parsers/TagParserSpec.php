<?php

namespace spec\Parsers;

use Parsers\TagParser;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TagParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TagParser::class);
    }
    
    function it_parses_comma_separeted_tags_into_array()
    {
        $this->parse('foo,bar,biz')->shouldReturn(['foo','bar', 'biz']);
        $this->parse('foo, bar, biz')->shouldReturn(['foo','bar', 'biz']);        
    }
    
    function it_allows_for_a_pipe_separeted_tags()
    {
        $this->parse('foo|bar|biz')->shouldReturn(['foo','bar', 'biz']);
        $this->parse('foo| bar |biz')->shouldReturn(['foo','bar', 'biz']);        
    }    
}
