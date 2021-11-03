<?php
namespace OnixComponents;

use SimpleXMLElement;

class TitlePrefix
{

    public ?textcase $textcase; // (0,1)

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTitlePrefix)
    {
        if (isset($nodeTitlePrefix['textcase']) == true) {
            $this->textcase = new textcase($nodeTitlePrefix['textcase']);
        } else {
            $this->textcase = null;
        }

        $this->contents = (string) ($nodeTitlePrefix);
    }
}

