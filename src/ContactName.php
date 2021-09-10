<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContactName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeContactName)
    {
        $this->contents = (string) $nodeContactName;
    }
}

