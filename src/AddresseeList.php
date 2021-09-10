<?php
namespace OnixComponents;

use SimpleXMLElement;

class AddresseeList
{

    /**
     *
     * @var Addressee[]
     */
    public $arrayAddressee = array();

    public function __construct(SimpleXMLElement $nodeHeader)
    {
        foreach ($nodeHeader->Addressee as $nodeAddressee) {
            $this->arrayAddressee[] = new Addressee($nodeAddressee);
        }
    }
}

