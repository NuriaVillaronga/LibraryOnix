<?php
namespace OnixComponents;

use SimpleXMLElement;

class Stock 
{
    
    public ?OnOrderDetailList $onOrderDetailList; //(0,n) 
    
    public function __construct(SimpleXMLElement $nodeStock)
    {
        if (isset($nodeStock->OnOrderDetail) == true) {
            $this->onOrderDetailList = new OnOrderDetailList($nodeStock);
        } else {
            $this->onOrderDetailList = null;
        }
    }
}

