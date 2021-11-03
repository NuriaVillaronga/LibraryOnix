<?php
namespace OnixComponents;

use SimpleXMLElement;

/**
 * Identifies the recipient of an ONIXBooks message
 */
class Addressee
{

    /**
     *
     * @see AddresseeName 
     */
    public ?AddresseeName $addresseeName;

    /**
     *
     * @param SimpleXMLElement $nodeAddressee
     *            node that can or can't contain the AddresseName node
     */
    public function __construct(SimpleXMLElement $nodeAddressee)
    {
        if (isset($nodeAddressee->AddresseeName) == true) {
            $this->addresseeName = new AddresseeName($nodeAddressee->AddresseeName);
        } else {
            $this->addresseeName = null;
        }
    }
}

