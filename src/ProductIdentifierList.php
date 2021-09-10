<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductIdentifierList
{

    /**
     *
     * @var ProductIdentifier[]
     */
    public $arrayProductIdentifier = array();

    public function __construct(SimpleXMLElement $nodeRelatedProduct_nodeProduct)
    {
        foreach ($nodeRelatedProduct_nodeProduct->ProductIdentifier as $nodeProductIdentifier) {
            $this->arrayProductIdentifier[] = new ProductIdentifier($nodeProductIdentifier);
        }
    }
}

