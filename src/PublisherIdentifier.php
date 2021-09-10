<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublisherIdentifier
{

    public PublisherIDType $publisherIDType; //(1) 

    public IDValue $idValue; //(1) 

    public function __construct(SimpleXMLElement $nodePublisherIdentifier)
    {
        $this->publisherIDType = new PublisherIDType($nodePublisherIdentifier->PublisherIDType);
        $this->idValue = new IDValue($nodePublisherIdentifier->IDValue);
    }
}

