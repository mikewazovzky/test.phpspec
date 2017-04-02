<?php

namespace Parsers;

class TagParser
{
    public function parse($tags)
    {
        // return explode(',', str_replace(' ', '', $tags));
        return preg_split('/ ?[,|] ?/', $tags);
    }
}
