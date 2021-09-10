<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductClassification
{

    public ProductClassificationType $productClassificationType; //(1)
    
    public ProductClassificationCode $productClassificationCode; //(1)
    
    public function __construct(SimpleXMLElement $nodeProductClassification)
    {
        $this->productClassificationType = new ProductClassificationType($nodeProductClassification->ProductClassificationType);
        $this->productClassificationCode = new ProductClassificationCode($nodeProductClassification->ProductClassificationCode);
    }
}

