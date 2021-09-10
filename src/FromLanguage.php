<?php
namespace OnixComponents;

use SimpleXMLElement;

class FromLanguage
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeFromLanguage)
    {
        $this->contents = (string) ($nodeFromLanguage);
    }
}

