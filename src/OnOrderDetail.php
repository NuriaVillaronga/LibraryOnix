<?php
namespace OnixComponents;

use SimpleXMLElement;

class OnOrderDetail
{

    public ExpectedDate $expectedDate; //(1,n) 
    
    public function __construct(SimpleXMLElement $nodeOnOrderDetail) 
    {
        $this->expectedDate = new ExpectedDate($nodeOnOrderDetail->ExpectedDate);
    }
}