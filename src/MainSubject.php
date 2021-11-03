<?php
namespace OnixComponents;

use SimpleXMLElement;

class MainSubject
{

    public bool $contents;

    public function __construct(SimpleXMLElement $nodeMainSubject)
    {
        $this->contents = (bool) $nodeMainSubject;
    }
}

