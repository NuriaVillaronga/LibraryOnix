<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublishingStatus
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePublishingStatus)
    {
        $this->contents = (string) ($nodePublishingStatus);
    }
}

