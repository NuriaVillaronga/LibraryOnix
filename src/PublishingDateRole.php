<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublishingDateRole
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePublishingDateRole)
    {
        $this->contents = (string) ($nodePublishingDateRole);
    }
}

