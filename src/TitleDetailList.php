<?php
namespace OnixComponents;

use SimpleXMLElement;

class TitleDetailList
{

    /**
     *
     * @var TitleDetail[]
     */
    public $arrayTitleDetail = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail_nodeCollection)
    {
        foreach ($nodeDescriptiveDetail_nodeCollection->TitleDetail as $nodeTitleDetail) {
            $this->arrayTitleDetail[] = new TitleDetail($nodeTitleDetail);
        }
    }
}

