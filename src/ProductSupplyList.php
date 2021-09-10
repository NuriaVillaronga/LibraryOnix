<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductSupplyList
{

    /**
     *
     * @var ProductSupply[]
     */
    public $arrayProductSupply = array();

    public function __construct(SimpleXMLElement $nodeProduct)
    {
        foreach ($nodeProduct->ProductSupply as $nodeProductSupply) {
            $this->arrayProductSupply[] = new ProductSupply($nodeProductSupply);
        }
    }
}

