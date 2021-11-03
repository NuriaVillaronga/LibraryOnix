<?php
namespace OnixComponents;

use SimpleXMLElement;

class LanguageRole
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeLanguageRole)
    {
        $this->contents = (string) ($nodeLanguageRole);
    }
}

