<?php
namespace OnixComponents;

use SimpleXMLElement;

class DiscountCoded
{

    public DiscountCodeType $discountCodeType; // (1)

    public DiscountCode $discountCode; // (1)

    public function __construct(SimpleXMLElement $nodeDiscountCoded)
    {
        $this->discountCodeType = new DiscountCodeType($nodeDiscountCoded->DiscountCodeType);
        $this->discountCode = new DiscountCode($nodeDiscountCoded->DiscountCode);
    }
}

