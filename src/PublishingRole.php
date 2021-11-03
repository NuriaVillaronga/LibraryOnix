<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublishingRole
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePublishingRole)
    {
        $this->contents = (string) ($nodePublishingRole);
    }
}

