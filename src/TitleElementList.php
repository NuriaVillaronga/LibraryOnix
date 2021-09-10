<?php
namespace OnixComponents;

use SimpleXMLElement;

class TitleElementList
{

    /**
     *
     * @var TitleElement[]
     */
    public $arrayTitleElement = array();

    public function __construct(SimpleXMLElement $nodeTitleDetail)
    {
        foreach ($nodeTitleDetail->TitleElement as $nodeTitleElement) {
            $this->arrayTitleElement[] = new TitleElement($nodeTitleElement);
        }
    }
}

