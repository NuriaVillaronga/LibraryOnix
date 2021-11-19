<?php
namespace OnixComponents;

use SimpleXMLElement;

class Subtitle
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSubtitle)
    {
        $this->contents = (string) $nodeSubtitle;
    }
}