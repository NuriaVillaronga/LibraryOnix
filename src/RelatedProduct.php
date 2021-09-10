<?php
namespace OnixComponents;

use SimpleXMLElement;

class RelatedProduct
{
    
    public ProductRelationCodeList $productRelationCodeList; //(1,n)
    
    public ProductIdentifierList $productIdentifierList; //(1,n)
    
    public function __construct(SimpleXMLElement $nodeRelatedProduct)
    {
        $this->productRelationCodeList = new ProductRelationCodeList($nodeRelatedProduct);
        $this->productIdentifierList = new ProductIdentifierList($nodeRelatedProduct);
    }
}

