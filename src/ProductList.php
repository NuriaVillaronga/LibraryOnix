<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductList
{

    /**
     *
     * @var Product[]
     */
    public $arrayProduct = array();

    public function __construct(SimpleXMLElement $nodeONIXMessage)
    {
        foreach ($nodeONIXMessage->Product as $nodeProduct) {
            $this->arrayProduct[] = new Product($nodeProduct);
        }
    }
}

