<?php

require_once('ClienteInterface.php');
require_once('ClienteInterfaceClassificacao.php');
require_once('ClienteInterfaceCobranca.php');

class ClienteFisica implements ClienteInterface, ClienteInterfaceClassificacao, ClienteInterfaceCobranca
{

    private $id, $nome, $cpf, $telefone, $endereco, $cidade, $tipoCliente, $classificacao, $enderecoCobranca, $cidadeCobranca;


    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }


    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }


    public function setCidadeCobranca($cidadeCobranca)
    {
        $this->cidadeCobranca = $cidadeCobranca;
        return $this;
    }


    public function getCidadeCobranca()
    {
        return $this->cidadeCobranca;
    }


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }


    public function getCidade()
    {
        return $this->cidade;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }


    public function getCpf()
    {
        return $this->cpf;
    }


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;
        return $this;
    }


    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }

    public function setClassificacao($classificacao)
    {
        $this->classificacao = $classificacao;
        return $this;
    }

    public function getClassificacao()
    {
        return $this->classificacao;
    }


} 