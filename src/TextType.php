<?php
namespace OnixComponents;

use SimpleXMLElement;

class TextType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTextType)
    {
        $this->contents = (string) $nodeTextType;
    }
}

