<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceLink
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeResourceLink)
    {
        $this->contents = (string) $nodeResourceLink;
    }
}

