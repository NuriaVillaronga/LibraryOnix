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
        if (isset($nodoPublishingDate->Date['dateformat']) == true) {
            $this->dateformat = new dateformat($nodoPublishingDate->Date['dateformat']);
        } 
        elseif(isset($nodoPublishingDate->DateFormat) == true) {
            $this->dateformat = new dateformat($nodoPublishingDate->DateFormat);
        }
        else {
            $this->dateformat = new dateformat();
        }

        $this->contents = DateTime::createFromFormat($this->dateformat->contents, (string)($nodoPublishingDate->Date));
    }
}

