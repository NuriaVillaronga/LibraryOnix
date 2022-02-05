<?php
namespace OnixComponents;

use SimpleXMLElement;

class AncillaryContentDescriptionList 
{

    /**
     *
     * @var AncillaryContentDescription[] 
     */
    public $arrayAncillaryContentDescription = array();

    public function __construct(SimpleXMLElement $nodeAncillaryContent) 
    {
        foreach ($nodeAncillaryContent->AncillaryContentDescription as $nodeAncillaryContentDescription) {
            $this->arrayAncillaryContentDescription[] = new AncillaryContentDescription($nodeAncillaryContentDescription);
        }
    }
}