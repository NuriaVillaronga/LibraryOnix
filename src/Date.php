<?php
namespace OnixComponents;

use DateTime;
use SimpleXMLElement;

class Date
{
    public string $contents;
    
    public ?DateTime $valor;

    public ?DateFormatNode $dateFormat;

    public ?dateformatAttr $dateformat; // (0,1)

    public function __construct(SimpleXMLElement $nodePublishingDate)  
    {
        $this->contents = (string)($nodePublishingDate->Date);

        if (isset($nodePublishingDate->DateFormat) == true && isset($nodePublishingDate->Date['dateformat']) == false) {
            $this->dateFormat = new DateFormatNode($nodePublishingDate->DateFormat);
            $this->dateformat = null;
            if (DateTime::createFromFormat($this->dateFormat->contents, $this->contents) != null) {
                $this->valor = DateTime::createFromFormat($this->dateFormat->contents, $this->contents);
            } 
            else {
                $this->valor = null;
            }
        }
        if (isset($nodePublishingDate->Date['dateformat']) == true && isset($nodePublishingDate->DateFormat) == false) {
            $this->dateformat = new dateformatAttr($nodePublishingDate->Date['dateformat']);
            $this->dateFormat = null;
            if (DateTime::createFromFormat($this->dateformat->contents, $this->contents) != null) {
                $this->valor = DateTime::createFromFormat($this->dateformat->contents, $this->contents);
            } 
            else {
                $this->valor = null;
            }
        } 
        if (isset($nodePublishingDate->DateFormat) == false && isset($nodePublishingDate->Date['dateformat']) == false) {
            $this->dateFormat = null;
            $this->dateformat = new dateformatAttr();
            if (DateTime::createFromFormat($this->dateformat->contents, $this->contents) != null) {
                $this->valor = DateTime::createFromFormat($this->dateformat->contents, $this->contents);
            } 
            else {
                $this->valor = null;
            }
        }
    }
}

