<?php
namespace OnixComponents;

use SimpleXMLElement;

class Publisher
{
    
    public PublishingRole $publishingRole; //(1)
    
    public ?PublisherName $publisherName; //(0,1)
    
    public ?PublisherIdentifierList $publisherIdentifierList; //(0,n)
    
    public ?WebsiteList $websiteList; //(0,n)
    
    public function __construct(SimpleXMLElement $nodePublisher)
    {
        $this->publishingRole = new PublishingRole($nodePublisher->PublishingRole);

        if (isset($nodePublisher->PublisherName) == true) {
            $this->publisherName = new PublisherName($nodePublisher->PublisherName);
        } else {
            $this->publisherName = null;
        }

        if (isset($nodePublisher->Website) == true) {
            $this->websiteList = new WebsiteList($nodePublisher);
        } else {
            $this->websiteList = null;
        }

        if (isset($nodePublisher->PublisherIdentifier) == true) {
            $this->publisherIdentifierList = new PublisherIdentifierList($nodePublisher);
        } else {
            $this->publisherIdentifierList = null;
        }
    }
}

