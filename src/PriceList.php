<?php
namespace OnixComponents;

use SimpleXMLElement;

class PriceList
{

    /**
     *
     * @var Price[]
     */
    public $arrayPrice = array();

    public function __construct(SimpleXMLElement $nodeSupplyDetail)
    {
        foreach ($nodeSupplyDetail->Price as $nodePrice) {
            $this->arrayPrice[] = new Price($nodePrice);
        }
    }
}

