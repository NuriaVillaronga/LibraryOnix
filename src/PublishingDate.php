<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublishingDate
{

    public PublishingDateRole $publishingDateRole; // (1)

    public Date $date; // (1)

    public function __construct(SimpleXMLElement $nodePublishingDate) 
    {
        $this->publishingDateRole = new PublishingDateRole($nodePublishingDate->PublishingDateRole);

        $this->date = new Date($nodePublishingDate);
    }
}

