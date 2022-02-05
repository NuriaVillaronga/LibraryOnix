<?php
namespace OnixComponents;

use DateTime;
use SimpleXMLElement;

class ExpectedDate
{
    public ?dateformatAttr $dateformat; // (0,1)

    public string $contents;
    
    public ?DateTime $valor;

    public function __construct(SimpleXMLElement $nodeExpectedDate)  
    {
        if (isset($nodeExpectedDate['dateformat']) == true) {
            $this->dateformat = new dateformatAttr($nodeExpectedDate['dateformat']);
        } 
        else {
            $this->dateformat = new dateformatAttr();
        }

        $this->contents = (string)($nodeExpectedDate);
        
        if (DateTime::createFromFormat($this->dateformat->contents, $this->contents) != null) {
            $this->valor = DateTime::createFromFormat($this->dateformat->contents, $this->contents);
        } 
        else {
            $this->valor = null;
        }
    }
}