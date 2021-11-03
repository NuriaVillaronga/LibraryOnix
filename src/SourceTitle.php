<?php
namespace OnixComponents;

use SimpleXMLElement;

class SourceTitle
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSourceTitle)
    {
        $this->contents = (string) $nodeSourceTitle;
    }
}

