<?php
namespace OnixComponents;

use SimpleXMLElement;

class AncillaryContent
{

    public ?AncillaryContentDescriptionList $AncillaryContentDescriptionList; // (0,n)

    public ?Number $number; // (0,1)  

    public AncillaryContentType $ancillaryContentType; // (1)

    public function __construct(SimpleXMLElement $nodeAncillaryContent)
    {
        $this->ancillaryContentType = new AncillaryContentType($nodeAncillaryContent->AncillaryContentType);

        if (isset($nodeAncillaryContent->AncillaryContentDescription) == true) {
            $this->AncillaryContentDescriptionList = new AncillaryContentDescriptionList($nodeAncillaryContent);
        } else {
            $this->AncillaryContentDescriptionList = null; 
        }

        if (isset($nodeAncillaryContent->Number) == true) {
            $this->number = new Number($nodeAncillaryContent->Number);
        } else {
            $this->number = null;
        }

    }
}

