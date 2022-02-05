<?php
namespace OnixComponents;

use SimpleXMLElement;

class AncillaryContentList
{

    /**
     *
     * @var AncillaryContent[] 
     */
    public $arrayAncillaryContent = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->AncillaryContent as $nodeAncillaryContent) {
            $this->arrayAncillaryContent[] = new AncillaryContent($nodeAncillaryContent);
        }
    }
}