<?php
namespace OnixComponents;

use SimpleXMLElement;

class TelephoneNumberList
{

    /**
     *
     * @var TelephoneNumber[]
     */
    public $arrayTelephoneNumber = array();

    public function __construct(SimpleXMLElement $nodeSupplier)
    {
        foreach ($nodeSupplier->TelephoneNumber as $nodeTelephoneNumber) {
            $this->arrayTelephoneNumber[] = new TelephoneNumber($nodeTelephoneNumber);
        }
    }
}

