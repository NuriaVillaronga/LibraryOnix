<?php

namespace OnixComponents;

use SimpleXMLElement;

class DateFormat
{
    public string $contents;

    public function __construct(SimpleXMLElement $nodeDateFormat) 
    {
        $this->contents = (string) ($nodeDateFormat);

        if ($this->contents == "00"){ 
            $this->contents = "Ymd"; //AAAAMMDD
        }
        if ($this->contents == "01"){
            $this->contents = "Ym"; //AAAAMM
        }
        if ($this->contents == "02"){ 
            $this->contents = "oW"; //AAAASS siendo S numero de la semana del año (o)
        }
        if ($this->contents == "05"){
            $this->contents = "Y"; //AAAA
        }
        if ($this->contents == "06"){
            $this->contents = "YmdYmd"; //AAAAMMDDAAAAMMDD
        }
        if ($this->contents == "07"){
            $this->contents = "YmYm"; //AAAAMMAAAAMM
        }
        if ($this->contents == "08"){
            $this->contents = "oWoW"; //formato AAAASSAAAASS
        }
        if ($this->contents == "11"){
            $this->contents = "YY"; //AAAAAAAA
        }
        if ($this->contents == "13"){
            $this->contents = "YmdHi"; //YYYYMMDDThhmm
        }
        if ($this->contents == "14"){
            $this->contents = "YmdHis"; //YYYYMMDDThhmmss
        }
        if ($this->contents == "20"){
            $this->contents = "Ymd"; //YYYYMMDD (Calendario Hijri)
        }
        if ($this->contents == "21"){
            $this->contents = "Ym"; //YYYYMM (Calendario Hijri)
        }
        if ($this->contents == "25"){
            $this->contents = "Y"; //YYYY (Calendario Hijri)
        }
        /*
        if ($this->contents == "03"){
            $this->contents = ""; //AAAAT -> trimestre ( T = 1,2,3,4)
        }
        if ($this->contents == "04"){
            $this->contents = ""; //AAAAE -> estación (E = 1, 2, 3, 4, siendo 1 = primavera)
        }
        if ($this->contents == "09"){
            $this->contents = ""; //formato AAAATAAAAT
        }
        if ($this->contents == "10"){
            $this->contents = ""; //AAAAEAAAAE
        }
        if ($this->contents == "12"){
            $this->contents = ""; //Texto. Para fechas complejas, aproximadas o inciertas, o para fechas antes de la era común (AEC o a.C.)
        }
        if ($this->contents == "32"){
            $this->contents = ""; //Cadena de texto (H)
        }
       */   
    }
}
