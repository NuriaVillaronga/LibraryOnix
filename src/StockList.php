<?php
namespace OnixComponents;

use SimpleXMLElement;

class StockList 
{

    /**
     *
     * @var Stock[]
     */
    public $arrayStock = array();

    public function __construct(SimpleXMLElement $nodeSupplyDetail)
    {
        foreach ($nodeSupplyDetail->Stock as $nodeStock) {
            $this->arrayStock[] = new Stock($nodeStock);
        }
    }
}