<?php
namespace OnixComponents;

use SimpleXMLElement;

class MarketList
{

    /**
     *
     * @var Market[]
     */
    public $arrayMarket = array();

    public function __construct(SimpleXMLElement $nodeProductSupply)
    {
        foreach ($nodeProductSupply->Market as $nodeMarket) { 
            $this->arrayMarket[] = new Market($nodeMarket);
        }
    }
}

