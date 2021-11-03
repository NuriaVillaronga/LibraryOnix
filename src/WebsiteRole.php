<?php
namespace OnixComponents;

use SimpleXMLElement;

class WebsiteRole
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeWebsiteRole)
    {
        $this->contents = (string) ($nodeWebsiteRole);
    }
}

