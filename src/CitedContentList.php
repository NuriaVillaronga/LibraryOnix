<?php
namespace OnixComponents;

use SimpleXMLElement;

class CitedContentList
{

    /**
     *
     * @var CitedContent[]
     */
    public $arrayCitedContent = array();

    public function __construct(SimpleXMLElement $nodeCollateralDetail)
    {
        foreach ($nodeCollateralDetail->CitedContent as $nodeCitedContent) {
            $this->arrayCitedContent[] = new CitedContent($nodeCitedContent);
        } 
    }
}

