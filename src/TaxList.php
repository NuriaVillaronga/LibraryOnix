<?php
namespace OnixComponents;

use SimpleXMLElement;

class TaxList
{

    /**
     *
     * @var Tax[]
     */
    public $arrayTax = array();

    public function __construct(SimpleXMLElement $nodePrice)
    {
        foreach ($nodePrice->Tax as $nodeTax) {
            $this->arrayTax[] = new Tax($nodeTax);
        }
    }
}

