<?php
namespace OnixComponents;

use SimpleXMLElement;

class ONIXMessage
{
    
    public Header $header; //(1)
    
    public ?ProductList $productList; //(0,n)
    
    public function __construct(SimpleXMLElement $nodeONIXMessage)
    {
        $this->header = new Header($nodeONIXMessage->Header);

        if (isset($nodeONIXMessage->Product) == true) {
            $this->productList = new ProductList($nodeONIXMessage);
        } else {
            $this->productList = null;
        }
    }
}

