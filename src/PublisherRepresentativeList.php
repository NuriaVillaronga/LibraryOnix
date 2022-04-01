<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublisherRepresentativeList 
{

    /**
     *
     * @var PublisherRepresentative[]
     */
    public $arrayPublisherRepresentative = array();

    public function __construct(SimpleXMLElement $nodeMarketPublishingDetail) 
    {
        foreach ($nodeMarketPublishingDetail->PublisherRepresentative as $nodePublisherRepresentative) {
            $this->arrayPublisherRepresentative[] = new PublisherRepresentative($nodePublisherRepresentative);
        }
    }
}