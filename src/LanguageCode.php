<?php
namespace OnixComponents;

use SimpleXMLElement;

class LanguageCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeLanguageCode)
    {
        $this->contents = (string) ($nodeLanguageCode);
    }
}

