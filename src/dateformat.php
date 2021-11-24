<?php

namespace OnixComponents;

use SimpleXMLElement;

class dateformat
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAttributeDateformat_nodeDateformat)
    {
        $this->contents = (string) ($nodeAttributeDateformat_nodeDateformat);
    }
}
