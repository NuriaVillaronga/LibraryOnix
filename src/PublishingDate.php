<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublishingDate
{

    public PublishingDateRole $publishingDateRole; // (1)

    public ?DateFormatNode $dateFormat;

    public Date $date; // (1)

    public function __construct(SimpleXMLElement $nodePublishingDate) 
    {
        $this->publishingDateRole = new PublishingDateRole($nodePublishingDate->PublishingDateRole);

        if (isset($nodePublishingDate->DateFormat) == true) {
            $this->dateFormat = new DateFormatNode($nodePublishingDate->DateFormat);
        } else {
            $this->dateFormat = null;
        }

        $this->date = new Date($nodePublishingDate->Date);
    }
}

