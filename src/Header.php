<?php
namespace OnixComponents;

use SimpleXMLElement;

class Header
{

    public Sender $sender; // (1)

    public ?AddresseeList $addresseeList; // (0,n)

    public ?MessageNumber $messageNumber; // (0,1)

    public SentDateTime $sentDateTime; // (1)

    public ?MessageNoteList $messageNoteList; // (0,n)

    public function __construct(SimpleXMLElement $nodeHeader)
    {
        $this->sender = new Sender($nodeHeader->Sender);
        $this->sentDateTime = new SentDateTime($nodeHeader->SentDateTime);

        if (isset($nodeHeader->Addressee) == true) {
            $this->addresseeList = new AddresseeList($nodeHeader);
        } else {
            $this->addresseeList = null;
        }

        if (isset($nodeHeader->MessageNumber) == true) {
            $this->messageNumber = new MessageNumber($nodeHeader->MessageNumber);
        } else {
            $this->messageNumber = null;
        }

        if (isset($nodeHeader->MessageNote) == true) {
            $this->messageNoteList = new MessageNoteList($nodeHeader);
        } else {
            $this->messageNoteList = null;
        }
    }
}

