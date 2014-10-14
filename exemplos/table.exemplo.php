<?php
echo 'Este exemplo escreve na tela uma tabela com dados, com e sem t�tulo.'.PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
require 'php4console.class.php';

$Php4Console = new Php4Console(77);

$title = 'Isto � um teste';
$data = array(
    array(
        'valor' => '1'
        ,'constante' => 'E_ERROR'
        ,'descricao' => 'Erros fatais em tempo de execu��o. Estes indicam erros que n�o podem ser recuperados, como problemas de aloca��o de mem�ria. A execu��o do script � interrompida.'
        ,'nota' => ''
    )
    ,array(
        'valor' => '2'
        ,'constante' => 'E_WARNING'
        ,'descricao' => 'Avisos em tempo de execu��o (erros n�o fatais). A execu��o do script n�o � interrompida. '
        ,'nota' => ''
    )
    ,array(
        'valor' => '4'
        ,'constante' => 'E_PARSE'
        ,'descricao' => 'Erro em tempo de compila��o. Erros gerados pelo interpretador.'
        ,'nota' => ''
    )
    ,array(
        'valor' => '8'
        ,'constante' => 'E_NOTICE'
        ,'descricao' => 'Not�cia em tempo de execu��o. Indica que o script encontrou alguma coisa que pode indicar um erro, mas que tamb�m possa acontecer durante a execu��o normal do script.'
        ,'nota' => 'Isto � um exemplo'
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
        'label' => 'Descri��o'
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
echo 'Agora a tabela tem t�tulo.'.PHP_EOL;
echo PHP_EOL;

echo $Php4Console->table($data, $colmodel, $title);//escreve uma tabela com t�tulo

?>
