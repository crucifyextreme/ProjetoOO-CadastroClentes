<?php

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = explode('/',$dados_url['path'],2);
$rotaFinal = str_replace('rotas.php','',$rota[1]);

/* Inclui a classe Clientes */
require_once('../src/Clientes.php');

if( $rotaFinal == "/clientes") {


    $cliente = [
        ['id' => 1, 'nome' => 'Guilherme Ferreira', 'cpf' => '000.000.000-01', 'endereco' => 'Rua A', 'cidade' => 'Montes Claros'],
        ['id' => 2, 'nome' => 'Jacqueline Soares', 'cpf' => '000.000.000-02', 'endereco' => 'Rua B', 'cidade' => 'São Pauo'],
        ['id' => 3, 'nome' => 'Luana Silva', 'cpf' => '000.000.000-03', 'endereco' => 'Rua C', 'cidade' => 'Santos'],
        ['id' => 4, 'nome' => 'Silvia Antunues', 'cpf' => '000.000.000-04', 'endereco' => 'Rua D', 'cidade' => 'Belo Horizonte'],
        ['id' => 5, 'nome' => 'Lucas Silva', 'cpf' => '000.000.000-05', 'endereco' => 'Rua E', 'cidade' => 'São Francisco'],
        ['id' => 6, 'nome' => 'Rafael Ferreira', 'cpf' => '000.000.000-06', 'endereco' => 'Rua F', 'cidade' => 'Sorocaba'],
        ['id' => 7, 'nome' => 'Julio Cesar', 'cpf' => '000.000.000-07', 'endereco' => 'Rua G', 'cidade' => 'Paracatú'],
        ['id' => 8, 'nome' => 'Luiz Henrique', 'cpf' => '000.000.000-08', 'endereco' => 'Rua H', 'cidade' => 'Montes Claros'],
        ['id' => 9, 'nome' => 'Fernanda Soares', 'cpf' => '000.000.000-09', 'endereco' => 'Rua I', 'cidade' => 'Rio Acima'],
        ['id' => 10, 'nome' => 'Nubia Soares', 'cpf' => '000.000.000-10', 'endereco' => 'Rua J', 'cidade' => 'Rio Acima'],
    ];

    echo json_encode( $cliente);

    //////
    /*$cliente[] = new Clientes();

    $cliente[0]->nome       = "Guilherme";
    $cliente[0]->cpf        = '073.094.094-23';
    $cliente[0]->telefone   = '(34)32223432';
    $cliente[0]->endereco   = 'Rua, Antonio A, Montes Claros';
    /* Cliente Dois *
    $cliente[1]->nome       = "Antonia";
    $cliente[1]->cpf        = '332.444.221-33';
    $cliente[1]->telefone   = '(34)43332544';
    $cliente[1]->endereco   = 'Rua, Antonio B, Montes Claros';
    /* Cliente Tres *
    $cliente[2]->nome       = "Luiz";
    $cliente[2]->cpf        = '222.111.333-11';
    $cliente[2]->telefone   = '(34)31112345';
    $cliente[2]->endereco   = 'Rua, Maria B, Sao Paulo';
    /* Cliente Quatro *
    $cliente[3]->nome       = "Lucas";
    $cliente[3]->cpf        = '444.333.234-65';
    $cliente[3]->telefone   = '(34)22221343';
    $cliente[3]->endereco   = 'Rua, Lucia C, Sao Paulo';
    /* Cliente Cinco *
    $cliente[4]->nome       = "Maria";
    $cliente[4]->cpf        = '112.678.345-32';
    $cliente[4]->telefone   = '(34)54443466';
    $cliente[4]->endereco   = 'Rua, Santa Lucia, Sao Paulo';*/

    //echo json_encode($cliente);

}
