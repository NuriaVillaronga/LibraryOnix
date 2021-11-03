<?php
namespace OnixComponents;

use SimpleXMLElement;

class DiscountList
{

    /**
     *
     * @var Discount[]
     */
    public $arrayDiscount = array();

    public function __construct(SimpleXMLElement $nodePrice)
    {
        foreach ($nodePrice->Discount as $nodeDiscount) {
            $this->arrayDiscount[] = new Discount($nodeDiscount);
        }
    }
}

