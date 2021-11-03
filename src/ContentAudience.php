<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContentAudience
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeContentAudience)
    {
        $this->contents = (string) $nodeContentAudience;
    }
}

