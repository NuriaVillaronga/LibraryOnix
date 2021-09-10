<?php
namespace OnixComponents;

use SimpleXMLElement;

class Sender
{
    
    public ?SenderName $senderName; //(0,1)
    
    public ?ContactName $contactName; //(0,1)
    
    public ?EmailAddress $emailAddress; //(0,1)
    
    public function __construct(SimpleXMLElement $nodeSender)
    {
        if (isset($nodeSender->ContactName) == true) {
            $this->contactName = new ContactName($nodeSender->ContactName);
        } else {
            $this->contactName = null;
        }

        if (isset($nodeSender->SenderName) == true) {
            $this->senderName = new SenderName($nodeSender->SenderName);
        } else {
            $this->senderName = null;
        }

        if (isset($nodeSender->EmailAddress) == true) {
            $this->emailAddress = new EmailAddress($nodeSender->EmailAddress);
        } else {
            $this->emailAddress = null;
        }
    }
}
