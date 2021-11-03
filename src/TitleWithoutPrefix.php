<?php
namespace OnixComponents;

use SimpleXMLElement;

class TitleWithoutPrefix
{

    public ?textcase $textcase; //(0,1)

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTitleWithoutPrefix)
    {
        if (isset($nodeTitleWithoutPrefix['textcase']) == true) {
            $this->textcase = new textcase($nodeTitleWithoutPrefix['textcase']);
        } else {
            $this->textcase = null;
        }

        $this->contents = (string) ($nodeTitleWithoutPrefix);
    }
}

