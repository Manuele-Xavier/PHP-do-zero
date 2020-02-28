<?php
$variavel = array("nome" => "Manuele","sobrenome" => "Moura", "idade"=> 18,"sexo" => "feminino");
//alterando o dado
// $variavel["idade"] = 17;

//mostrar todo array
// print_r($variavel);

$produtos = array(
    0 => array(
        "nome" => "1",
        "quantidade" => "",
        "info" => ""

        ),
    1 => array(
        "nome" => "2",
        "quantidade" => "",
        "info" => ""

        ),
    );

    //adicionando um novo produto
    $produtos[] = array(
        "nome" => "3",
        "quantidade" => "",
        "info" =>""

    );
    
    //adicionando qualquer informação
    $produtos[] = "teste";

    print_r($produtos);
?>