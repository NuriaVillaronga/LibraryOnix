<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductClassificationList
{

    /**
     *
     * @var ProductClassification[]
     */
    public $arrayProductClassification = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->ProductClassification as $nodeProductClassification) {
            $this->arrayProductClassification[] = new ProductClassification($nodeProductClassification);
        }
    }
}

