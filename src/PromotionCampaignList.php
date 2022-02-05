<?php
namespace OnixComponents;

use SimpleXMLElement;

class PromotionCampaignList
{

    /**
     *
     * @var PromotionCampaign[] 
     */
    public $arrayPromotionCampaign = array();

    public function __construct(SimpleXMLElement $nodeMarketPublishingDetail)
    {
        foreach ($nodeMarketPublishingDetail->PromotionCampaign as $nodePromotionCampaign) {
            $this->arrayPromotionCampaign[] = new PromotionCampaign($nodePromotionCampaign);
        }
    }
}