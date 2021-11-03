<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductRelationCodeList
{

    /**
     *
     * @var ProductRelationCode[]
     */
    public $arrayProductRelationCode = array();

    public function __construct(SimpleXMLElement $nodeRelatedProduct)
    {
        foreach ($nodeRelatedProduct->ProductRelationCode as $nodeProductRelationCode) {
            $this->arrayProductRelationCode[] = new ProductRelationCode($nodeProductRelationCode);
        }
    }
}

