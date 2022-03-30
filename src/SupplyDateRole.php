<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplyDateRole
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSupplyDateRole)
    {
        $this->contents = (string)($nodeSupplyDateRole); 
    }
}