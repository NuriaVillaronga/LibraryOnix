<?php
namespace OnixComponents;

use SimpleXMLElement;

class MainSubject
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeMainSubject)
    {
        //$this->contents = (string) $nodeMainSubject;
        $this->contents = true;
    }
}

