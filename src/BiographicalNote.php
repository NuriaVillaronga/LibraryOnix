<?php
namespace OnixComponents;

use SimpleXMLElement;

class BiographicalNote
{

    public ?textformat $textformat; //(0,1)

    public string $contents;

    public function __construct(SimpleXMLElement $nodeBiographicalNote)
    { 
        if (isset($nodeBiographicalNote['textformat']) == true) {
            $this->textformat = new textformat($nodeBiographicalNote['textformat']);
        } else {
            $this->textformat = null;
        }

        $this->contents = (string) $nodeBiographicalNote;
    }
}

