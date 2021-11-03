<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublisherIdentifierList
{

    /**
     *
     * @var PublisherIdentifier[]
     */
    public $arrayPublisherIdentifier = array();

    public function __construct(SimpleXMLElement $nodePublisher)
    {
        foreach ($nodePublisher->PublisherIdentifier as $nodePublisherIdentifier) {
            $this->arrayPublisherIdentifier[] = new PublisherIdentifier($nodePublisherIdentifier);
        }
    }
}

