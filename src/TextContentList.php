<?php
namespace OnixComponents;

use SimpleXMLElement;

class TextContentList
{

    /**
     *
     * @var TextContent[]
     */
    public $arrayTextContent = array();

    public function __construct(SimpleXMLElement $nodeCollateralDetail)
    {
        foreach ($nodeCollateralDetail->TextContent as $nodeTextContent) {
            $this->arrayTextContent[] = new TextContent($nodeTextContent);
        }
    }
}

