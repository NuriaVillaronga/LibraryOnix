<?php
namespace OnixComponents;

use SimpleXMLElement;

class NotificationType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeNotificationType)
    {
        $this->contents = (string) ($nodeNotificationType);
    }
}

