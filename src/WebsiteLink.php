<?php
namespace OnixComponents;

use SimpleXMLElement;

class WebsiteLink
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeWebsiteLink)
    {
        $this->contents = (string) ($nodeWebsiteLink);
    }
}

