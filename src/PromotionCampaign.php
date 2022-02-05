<?php
namespace OnixComponents;

use SimpleXMLElement;

class PromotionCampaign
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePromotionCampaign)
    {
        $this->contents = (string) ($nodePromotionCampaign); 
    }
}