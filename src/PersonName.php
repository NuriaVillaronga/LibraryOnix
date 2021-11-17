<?php
namespace OnixComponents;

use SimpleXMLElement;

class PersonName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePersonName)
    {
        $this->contents = (string) ($nodePersonName);
    }
}