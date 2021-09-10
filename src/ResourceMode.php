<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceMode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeResourceMode)
    {
        $this->contents = (string) $nodeResourceMode;
    }
}

