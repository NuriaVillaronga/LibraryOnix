<?php
namespace OnixComponents;

use DateTime;
use SimpleXMLElement;

class Date
{
    public ?dateformat $dateformat; // (0,1)

    public DateTime $contents;

    public function __construct(SimpleXMLElement $nodoPublishingDate)
    {
        $nodeDate = $nodoPublishingDate->Date;

        if (isset($nodeDate['dateformat']) == true) {
            $this->dateformat = new dateformat($nodeDate['dateformat']);
        } else {
            $this->dateformat = "Ymd";
        }

        if (isset($nodoPublishingDate->DateFormat) == true) {
            $this->dateformat = new dateformat($nodoPublishingDate->DateFormat);
        } else {
            $this->dateformat = "Ymd";
        }

        $formato = (string) $this->dateformat;

        $this->contents = DateTime::createFromFormat($formato, $nodeDate);

    }
}

