<?php

require_once('ClienteInterface.php');

class ClienteJuridica extends ClienteFisica implements ClienteInterface {

    private $cnpj;

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }
}