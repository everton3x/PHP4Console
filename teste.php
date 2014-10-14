<?php

require 'php4console.class.php';

$Php4Console = new Php4Console(77);

/*$title = 'Isto � um teste';
$text = 'PHP, que significa "PHP: Hypertext Preprocessor", � uma linguagem de programa��o de ampla utiliza��o, interpretada, que � especialmente interessante para desenvolvimento para a Web e pode ser mesclada dentro do c�digo HTML. A sintaxe da linguagem lembra C, Java e Perl, e � f�cil de aprender. O objetivo principal da linguagem � permitir a desenvolvedores escreverem p�ginas que ser�o geradas dinamicamente rapidamente, mas voc� pode fazer muito mais do que isso com PHP.';
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
        ,'len' => '20'
    )
    ,'nota' => array(
        'len' => '13'
    )
);

echo $Php4Console->write($text);//escreve um texto na tela

echo $Php4Console->box($text);//escreve o texto num quadro

echo $Php4Console->box($text, $title);//escreve o texto num quadro com um t�tulo

echo $Php4Console->table($data, $colmodel);//escreve uma tabela

echo $Php4Console->table($data, $colmodel, $title);//escreve uma tabela com t�tulo
*/

/*$Php4Console->openLoadLine('Iniciando carregamento de alguma coisa');
sleep(3);
$Php4Console->closeLoadLine();

$Php4Console->openLoadLine('Carregando alguma coisa que ir� falhar');
sleep(3);
$Php4Console->closeLoadLine(false);

$Php4Console->openLoadGroupLine('Iniciando um grupo de linhas');
$Php4Console->openLoadStepLine('Esta � uma etapa do carregamento');
sleep(3);
$Php4Console->closeLoadStepLine();
$Php4Console->openLoadStepLine('Esta � uma etapa do carregamento que falha');
sleep(3);
$Php4Console->closeLoadStepLine(false);
$Php4Console->closeLoadGroupLine('Todas etapas prontas', false);

$Php4Console->initProgressBar(3);
sleep(3);
$Php4Console->runProgressBar();
sleep(3);
$Php4Console->runProgressBar();*/

//echo $Php4Console->prompt();
echo $Php4Console->prompt('Prompt#');
?>
