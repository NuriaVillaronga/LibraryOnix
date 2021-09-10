<?php
namespace OnixComponents;

use SimpleXMLElement;

class RelatedMaterial
{
    
    public ?RelatedProductList $relatedProductList; //(0,n)
    
    public ?RelatedWorkList $relatedWorkList; //(0,n)
    
    public function __construct(SimpleXMLElement $nodoRelatedMaterial)
    {
        if (isset($nodoRelatedMaterial->RelatedProduct) == true) {
            $this->relatedProductList = new RelatedProductList($nodoRelatedMaterial);
        } else {
            $this->relatedProductList = null;
        }

        if (isset($nodoRelatedMaterial->RelatedWork) == true) {
            $this->relatedWorkList = new RelatedWorkList($nodoRelatedMaterial);
        } else {
            $this->relatedWorkList = null;
        }
    }
}

