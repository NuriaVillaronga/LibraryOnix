<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContentDateRole
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeContentDateRole)
    {
        $this->contents = (string) $nodeContentDateRole;
    }
}

