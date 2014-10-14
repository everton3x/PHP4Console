<?php
echo 'Este exemplo escreve na tela uma tabela com dados, com e sem título.'.PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
require 'php4console.class.php';

$Php4Console = new Php4Console(77);

$title = 'Isto é um teste';
$data = array(
    array(
        'valor' => '1'
        ,'constante' => 'E_ERROR'
        ,'descricao' => 'Erros fatais em tempo de execução. Estes indicam erros que não podem ser recuperados, como problemas de alocação de memória. A execução do script é interrompida.'
        ,'nota' => ''
    )
    ,array(
        'valor' => '2'
        ,'constante' => 'E_WARNING'
        ,'descricao' => 'Avisos em tempo de execução (erros não fatais). A execução do script não é interrompida. '
        ,'nota' => ''
    )
    ,array(
        'valor' => '4'
        ,'constante' => 'E_PARSE'
        ,'descricao' => 'Erro em tempo de compilação. Erros gerados pelo interpretador.'
        ,'nota' => ''
    )
    ,array(
        'valor' => '8'
        ,'constante' => 'E_NOTICE'
        ,'descricao' => 'Notícia em tempo de execução. Indica que o script encontrou alguma coisa que pode indicar um erro, mas que também possa acontecer durante a execução normal do script.'
        ,'nota' => 'Isto é um exemplo'
    )
);

$colmodel = array(
    'valor' => array(
        'label' => 'Valor'
        ,'len' => '7'
        ,'align' => 'RIGHT'
    )
    ,'constante' => array(
        'label' => 'Constante'
        ,'len' => '10'
        ,'align' => 'CENTER'
    )
    ,'descricao' => array(
        'label' => 'Descrição'
        ,'len' => '47'
    )
    ,'nota' => array(
        'len' => '13'
    )
);


echo 'Este exemplo escreve na tela uma tabela com dados.'.PHP_EOL;
echo PHP_EOL;

echo $Php4Console->table($data, $colmodel);//escreve uma tabela

echo PHP_EOL;
echo 'Agora a tabela tem título.'.PHP_EOL;
echo PHP_EOL;

echo $Php4Console->table($data, $colmodel, $title);//escreve uma tabela com título

?>
