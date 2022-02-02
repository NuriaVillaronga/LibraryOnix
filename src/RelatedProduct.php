<?php
namespace OnixComponents;

use SimpleXMLElement;

class RelatedProduct
{
    
    public ProductRelationCodeList $productRelationCodeList; //(1,n)
    
    public ProductIdentifierList $productIdentifierList; //(1,n)

    public ?ProductFormDetailList $productFormDetailList; //(0,n) 
    
    public ?ProductForm $productForm; //(0,1) 
    
    public function __construct(SimpleXMLElement $nodeRelatedProduct)
    {
        $this->productRelationCodeList = new ProductRelationCodeList($nodeRelatedProduct);
        $this->productIdentifierList = new ProductIdentifierList($nodeRelatedProduct);

        if (isset($nodeRelatedProduct->ProductFormDetail) == true) {
            $this->productFormDetailList = new ProductFormDetailList($nodeRelatedProduct);
        } else {
            $this->productFormDetailList = null; 
        }

        if (isset($nodeRelatedProduct->ProductForm) == true) {
            $this->roductForm = new ProductForm($nodeRelatedProduct->ProductForm);
        } else {
            $this->roductForm = null;
        }
    }
}

