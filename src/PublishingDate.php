<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublishingDate
{

    public PublishingDateRole $publishingDateRole; // (1)

    public DateFormat $dateFormat;

    public Date $date; // (1)

    public function __construct(SimpleXMLElement $nodePublishingDate) 
    {
        $this->publishingDateRole = new PublishingDateRole($nodePublishingDate->PublishingDateRole);
        $this->dateFormat = new DateFormat($nodePublishingDate->DateFormat);
        $this->date = new Date($nodePublishingDate->Date);
    }
}

