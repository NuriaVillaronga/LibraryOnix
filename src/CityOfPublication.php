<?php
namespace OnixComponents;

use SimpleXMLElement;

class CityOfPublication
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCityOfPublication)
    {
        $this->contents = (string) ($nodeCityOfPublication);
    }
}

