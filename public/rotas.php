<?php

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = explode('/',$dados_url['path'],2);
$rotaFinal = str_replace('rotas.php','',$rota[1]);

/* Inclui a classe Clientes */
require_once('../src/Clientes.php');

if( $rotaFinal == "/clientes") {

    $cliente_1 = new Clientes();
    $cliente_1->id          = 1;
    $cliente_1->nome        = 'Guilherme Ferreira';
    $cliente_1->cpf         = '000.000.000-01';
    $cliente_1->endereco    = 'Rua A';
    $cliente_1->cidade      = 'Montes Claros';

    $cliente_2 = new Clientes();
    $cliente_2->id          = 2;
    $cliente_2->nome        = 'Jacqueline Soares';
    $cliente_2->cpf         = '000.000.000-02';
    $cliente_2->endereco    = 'Rua B';
    $cliente_2->cidade      = 'São Paulo';

    $cliente_3 = new Clientes();
    $cliente_3->id          = 3;
    $cliente_3->nome        = 'Luana Silva';
    $cliente_3->cpf         = '000.000.000-03';
    $cliente_3->endereco    = 'Rua C';
    $cliente_3->cidade      = 'Santos';

    $cliente_4 = new Clientes();
    $cliente_4->id          = 4;
    $cliente_4->nome        = 'Silvia Antunues';
    $cliente_4->cpf         = '000.000.000-04';
    $cliente_4->endereco    = 'Rua D';
    $cliente_4->cidade      = 'Belo Horizonte';

    $cliente_5 = new Clientes();
    $cliente_5->id          = 5;
    $cliente_5->nome        = 'Lucas Silva';
    $cliente_5->cpf         = '000.000.000-05';
    $cliente_5->endereco    = 'Rua E';
    $cliente_5->cidade      = 'São Francisco';

    $cliente_6 = new Clientes();
    $cliente_6->id          = 6;
    $cliente_6->nome        = 'Rafael Ferreira';
    $cliente_6->cpf         = '000.000.000-06';
    $cliente_6->endereco    = 'Rua F';
    $cliente_6->cidade      = 'Sorocaba';

    $cliente_7 = new Clientes();
    $cliente_7->id          = 7;
    $cliente_7->nome        = 'Julio Cesar';
    $cliente_7->cpf         = '000.000.000-07';
    $cliente_7->endereco    = 'Rua G';
    $cliente_7->cidade      = 'Paracatú';

    $cliente_8 = new Clientes();
    $cliente_8->id          = 8;
    $cliente_8->nome        = 'Luiz Henrique';
    $cliente_8->cpf         = '000.000.000-08';
    $cliente_8->endereco    = 'Rua H';
    $cliente_8->cidade      = 'Montes Claros';

    $cliente_9 = new Clientes();
    $cliente_9->id          = 9;
    $cliente_9->nome        = 'Fernanda Soares';
    $cliente_9->cpf         = '000.000.000-09';
    $cliente_9->endereco    = 'Rua I';
    $cliente_9->cidade      = 'Rio Acima';

    $cliente_10 = new Clientes();
    $cliente_10->id          = 10;
    $cliente_10->nome        = 'Nubia Soares';
    $cliente_10->cpf         = '000.000.000-010';
    $cliente_10->endereco    = 'Rua J';
    $cliente_10->cidade      = 'Rio Acima';


    $clientes = array(
        '0' => $cliente_1,
        '1' => $cliente_2,
        '2' => $cliente_3,
        '3' => $cliente_4,
        '4' => $cliente_5,
        '5' => $cliente_6,
        '6' => $cliente_7,
        '7' => $cliente_8,
        '8' => $cliente_9,
        '9' => $cliente_10,
    );

    echo json_encode($clientes);

}
