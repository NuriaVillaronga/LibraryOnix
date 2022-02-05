<?php
namespace OnixComponents;

use SimpleXMLElement;

class OnOrderDetailList 
{

    /**
     *
     * @var OnOrderDetail[] 
     */
    public $arrayOnOrderDetail = array();
 
    public function __construct(SimpleXMLElement $nodeOnOrderDetail)
    {
        foreach ($nodeOnOrderDetail->OnOrderDetail as $nodeOnOrderDetail) {
            $this->arrayOnOrderDetail[] = new OnOrderDetail($nodeOnOrderDetail);
        }
    }
}