<?php
namespace OnixComponents;

use SimpleXMLElement;

class Market
{

    public Territory $territory; // (1)

    public function __construct(SimpleXMLElement $nodeMarket)
    {
        $this->territory = new Territory($nodeMarket->Territory);
    }
}

