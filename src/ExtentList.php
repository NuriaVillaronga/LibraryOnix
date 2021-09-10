<?php
namespace OnixComponents;

use SimpleXMLElement;

class ExtentList
{

    /**
     *
     * @var Extent[]
     */
    public $arrayExtent = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->Extent as $nodeExtent) {
            $this->arrayExtent[] = new Extent($nodeExtent);
        }
    }
}

