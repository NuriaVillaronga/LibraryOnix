<?php
namespace OnixComponents;

use SimpleXMLElement;

class DiscountCodedList
{

    /**
     *
     * @var DiscountCoded[]
     */
    public $arrayDiscountCoded = array();

    public function __construct(SimpleXMLElement $nodePrice)
    {
        foreach ($nodePrice->DiscountCoded as $nodeDiscountCoded) {
            $this->arrayDiscountCoded[] = new DiscountCoded($nodeDiscountCoded);
        }
    }
}

