<?php
namespace OnixComponents;

use DateTime;
use SimpleXMLElement;

class Date
{

    public ?dateformat $dateformat; // (0,1)

    public DateTime $contents;

    public function __construct(SimpleXMLElement $nodeDate)
    {
        if (isset($nodeDate['dateformat']) == true) {
            $this->dateformat = new dateformat($nodeDate['dateformat']);
        } else {
            $this->dateformat = null;
        }

        $this->contents = $nodeDate;
    }
}

