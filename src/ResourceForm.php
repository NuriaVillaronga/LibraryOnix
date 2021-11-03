<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceForm
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeResourceForm)
    {
        $this->contents = (string) ($nodeResourceForm);
    }
}

