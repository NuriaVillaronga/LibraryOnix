<?php
namespace OnixComponents;

use SimpleXMLElement;

class RelatedProductList
{

    /**
     *
     * @var RelatedProduct[]
     */
    public $arrayRelatedProduct = array();

    public function __construct(SimpleXMLElement $nodeRelatedMaterial)
    {
        foreach ($nodeRelatedMaterial->RelatedProduct as $nodeRelatedProduct) {
            $this->arrayRelatedProduct[] = new RelatedProduct($nodeRelatedProduct);
        }
    }
}

