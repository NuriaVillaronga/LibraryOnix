<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublishingDate
{

    public PublishingDateRole $publishingDateRole; // (1)

    public Date $date; // (1)

    public ?dateformat $dateFormat; // (0,1)

    public function __construct(SimpleXMLElement $nodoPublishingDate)
    {
        $this->publishingDateRole = new PublishingDateRole($nodoPublishingDate->PublishingDateRole);
        $this->date = new Date($nodoPublishingDate->Date);

        if (isset($nodoPublishingDate->DateFormat) == true) {
            $this->dateFormat = new dateformat($nodoPublishingDate->DateFormat);
        } else {
            $this->dateFormat = null;
        }
    }
}

