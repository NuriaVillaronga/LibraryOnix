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

        if (isset($nodeDate['dateformat']) == true) {
            $this->dateformat = new dateformat($nodoPublishingDate->Date['dateformat']);
        } else {
            $this->dateformat = null;
        }

        if (isset($nodoPublishingDate->DateFormat) == true) {
            $this->dateformat = new dateformat($nodoPublishingDate->DateFormat);
        } else {
            $this->dateformat = null;
        }

        if ($this->dateformat == null) {
            $formato = "Ymd";
        }
        else {
            $formato = (string) $this->dateformat;
        }

        $nodeDate = (string) $nodoPublishingDate->Date;

        $this->contents = DateTime::createFromFormat($formato, $nodeDate);

    }
}

