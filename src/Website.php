<?php
namespace OnixComponents;

use SimpleXMLElement;

class Website
{
    
    public ?WebsiteRole $websiteRole; //(0,1)
    
    public WebsiteLink $websiteLink; //(1)
    
    public function __construct(SimpleXMLElement $nodeWebsite)
    {
        $this->websiteLink = new WebsiteLink($nodeWebsite->WebsiteLink);

        if (isset($nodeWebsite->WebsiteRole) == true) {
            $this->websiteRole = new WebsiteRole($nodeWebsite->WebsiteRole);
        } else {
            $this->websiteRole = null;
        }
    }
}

