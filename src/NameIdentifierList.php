<?php
namespace OnixComponents;

use SimpleXMLElement;

class NameIdentifierList
{

    /**
     *
     * @var NameIdentifier[]
     */
    public $arrayNameIdentifier = array();

    public function __construct(SimpleXMLElement $nodeContributor)
    {
        foreach ($nodeContributor->NameIdentifier as $nodeNameIdentifier) {
            $this->arrayNameIdentifier[] = new NameIdentifier($nodeNameIdentifier);
        }
    }
}

