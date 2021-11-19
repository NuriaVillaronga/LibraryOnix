<?php
namespace OnixComponents;

use SimpleXMLElement;

class TitleElement
{
    
    public ?SequenceNumber $sequenceNumber; //(0,1)
    
    public TitleElementLevel $titleElementLevel; //(1)
    
    public ?TitlePrefix $titlePrefix; //(0,1)
    
    public ?TitleWithoutPrefix $titleWithoutPrefix; //(0,1)
    
    public ?PartNumber $partNumber; //(0,1)
    
    public ?NoPrefix $noPrefix; //(0,1) -> Bandera, xml vacio
    
    public ?TitleText $titleText; //(0,1)

    public ?Subtitle $subtitle; //(0,1)
    
    public function __construct(SimpleXMLElement $nodeTitleElement)
    {
        $this->titleElementLevel = new TitleElementLevel($nodeTitleElement->TitleElementLevel);

        if (isset($nodeTitleElement->SequenceNumber) == true) {
            $this->sequenceNumber = new SequenceNumber($nodeTitleElement->SequenceNumber);
        } else {
            $this->sequenceNumber = null;
        }

        if (isset($nodeTitleElement->Subtitle) == true) {
            $this->subtitle = new Subtitle($nodeTitleElement->Subtitle);
        } else {
            $this->subtitle = null;
        }

        if (isset($nodeTitleElement->TitlePrefix) == true) {
            $this->titlePrefix = new TitlePrefix($nodeTitleElement->TitlePrefix);
        } else {
            $this->titlePrefix = null;
        }

        if (isset($nodeTitleElement->TitleWithoutPrefix) == true) {
            $this->titleWithoutPrefix = new TitleWithoutPrefix($nodeTitleElement->TitleWithoutPrefix);
        } else {
            $this->titleWithoutPrefix = null;
        }

        if (isset($nodeTitleElement->PartNumber) == true) {
            $this->partNumber = new PartNumber($nodeTitleElement->PartNumber);
        } else {
            $this->partNumber = null;
        }

        if (isset($nodeTitleElement->NoPrefix) == true) {
            $this->noPrefix = new NoPrefix($nodeTitleElement->NoPrefix);
        } else {
            $this->noPrefix = null;
        }

        if (isset($nodeTitleElement->TitleText) == true) {
            $this->titleText = new TitleText($nodeTitleElement->TitleText);
        } else {
            $this->titleText = null;
        }
    }
}

