<?php
namespace OnixComponents;

use SimpleXMLElement;

class Discount
{

    public ?DiscountPercent $discountPercent; // (0,1)

    public function __construct(SimpleXMLElement $nodeDiscount)
    {
        if (isset($nodeDiscount->DiscountPercent) == true) {
            $this->discountPercent = new DiscountPercent($nodeDiscount->DiscountPercent);
        } else {
            $this->discountPercent = null;
        }
    }
}

