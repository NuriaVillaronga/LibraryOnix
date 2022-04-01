<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublisherRepresentative
{

    public ?WebsiteList $websiteList; //(0,n)
    
    public function __construct(SimpleXMLElement $nodePublisherRepresentative)
    {
        if (isset($nodePublisherRepresentative->Website) == true) {
            $this->websiteList = new WebsiteList($nodePublisherRepresentative); 
        } else {
            $this->websiteList = null; 
        }
    }
}