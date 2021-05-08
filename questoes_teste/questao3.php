<?php
class AssinaDocumentoClass{
    public function __construct($ProprietarioDocumento,$ValidadeDocumento)
    {
         $this->ProprietarioDocumento = $ProprietarioDocumento;
         $this->ValidadeDocumento = $ValidadeDocumento;
    } 

    public function assinarDocumento() {
    	echo "Nome: ". $this->ProprietarioDocumento ."\nValidade: ". $this->ValidadeDocumento;
    }
}

$documento1 = new AssinaDocumentoClass("João","08/05/2021");
$documento1->assinarDocumento();