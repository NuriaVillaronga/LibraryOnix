<?php
namespace OnixComponents;

use SimpleXMLElement;

class CollateralDetail
{

    public ?TextContentList $textContentList; //0,n

    public ?CitedContentList $citedContentList; //0,n

    public ?SupportingResourceList $supportingResourceList; //0,n

    public ?PrizeList $prizeList; // (0,n) -

    public function __construct(SimpleXMLElement $nodeCollateralDetail)
    {
        if (isset($nodeCollateralDetail->Prize) == true) {
            $this->prizeList = new PrizeList($nodeCollateralDetail);
        } else {
            $this->prizeList = null;
        }

        if (isset($nodeCollateralDetail->TextContent) == true) {
            $this->textContentList = new TextContentList($nodeCollateralDetail);
        } else {
            $this->textContentList = null;
        }

        if (isset($nodeCollateralDetail->CitedContent) == true) {
            $this->citedContentList = new CitedContentList($nodeCollateralDetail);
        } else {
            $this->citedContentList = null;
        }

        if (isset($nodeCollateralDetail->SupportingResource) == true) {
            $this->supportingResourceList = new SupportingResourceList($nodeCollateralDetail);
        } else {
            $this->supportingResourceList = null;
        }
    }
}

