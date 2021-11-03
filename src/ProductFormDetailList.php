<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductFormDetailList
{

    /**
     *
     * @var ProductFormDetail[]
     */
    public $arrayProductFormDetail = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->ProductFormDetail as $nodeProductFormDetail) {
            $this->arrayProductFormDetail[] = new ProductFormDetail($nodeProductFormDetail);
        }
    }
}

