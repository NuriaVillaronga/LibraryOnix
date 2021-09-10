<?php
namespace OnixComponents;

use SimpleXMLElement;

class NameIdentifier
{

    public NameIDType $nameIDType; // (1)

    public ?IDTypeName $idTypeName; // (0,1)

    public IDValue $idValue; // (1)

    public function __construct(SimpleXMLElement $nodeNameIdentifier)
    {
        $this->nameIDType = new NameIDType($nodeNameIdentifier->NameIDType);

        if (isset($nodeNameIdentifier->IDTypeName) == true) {
            $this->idTypeName = new IDTypeName($nodeNameIdentifier->IDTypeName);
        } else {
            $this->idTypeName = null;
        }

        $this->idValue = new IDValue($nodeNameIdentifier->IDValue);
    }
}

