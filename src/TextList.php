<?php
namespace OnixComponents;

use SimpleXMLElement;

class TextList
{

    /**
     *
     * @var Text[]
     */
    public $arrayText = array();

    public function __construct(SimpleXMLElement $nodeTextContent)
    {
        foreach ($nodeTextContent->Text as $nodeText) {
            $this->arrayText[] = new Text($nodeText);
        }
    }
}

