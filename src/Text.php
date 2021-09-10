<?php
namespace OnixComponents;

use SimpleXMLElement;

class Text
{
    
    public ?textformat $textformat; //(0,1)
    
    public string $contents;
    
    public function __construct(SimpleXMLElement $nodeText)
    {
        if (isset($nodeText['textformat']) == true) {
            $this->textformat = new textformat($nodeText['textformat']);
        } else {
            $this->textformat = null;
        }

        $this->contents = (string) $nodeText;
    }
}

