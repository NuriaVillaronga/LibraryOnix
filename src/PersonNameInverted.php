<?php
namespace OnixComponents;

use SimpleXMLElement;

class PersonNameInverted
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePersonNameInverted) 
    {
        $this->contents = (string) $nodePersonNameInverted;
    }
}