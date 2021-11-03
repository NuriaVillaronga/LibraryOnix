<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublisherList
{

    /**
     *
     * @var Publisher[]
     */
    public $arrayPublisher = array();

    public function __construct(SimpleXMLElement $nodePublishingDetail)
    {
        foreach ($nodePublishingDetail->Publisher as $nodePublisher) {
            $this->arrayPublisher[] = new Publisher($nodePublisher);
        }
    }
}

