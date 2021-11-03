<?php
namespace OnixComponents;

use SimpleXMLElement;

class EmailAddress
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeEmailAddress)
    {
        $this->contents = (string) $nodeEmailAddress;
    }
}

