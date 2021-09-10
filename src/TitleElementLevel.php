<?php
namespace OnixComponents;

use SimpleXMLElement;

class TitleElementLevel
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTitleElementLevel)
    {
        $this->contents = (string) ($nodeTitleElementLevel);
    }
}

