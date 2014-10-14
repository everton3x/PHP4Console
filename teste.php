<?php

require 'php4console.class.php';

$Php4Console = new Php4Console(77);

/*$title = 'Isto é um teste';
$text = 'PHP, que significa "PHP: Hypertext Preprocessor", é uma linguagem de programação de ampla utilização, interpretada, que é especialmente interessante para desenvolvimento para a Web e pode ser mesclada dentro do código HTML. A sintaxe da linguagem lembra C, Java e Perl, e é fácil de aprender. O objetivo principal da linguagem é permitir a desenvolvedores escreverem páginas que serão geradas dinamicamente rapidamente, mas você pode fazer muito mais do que isso com PHP.';
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
        ,'len' => '20'
    )
    ,'nota' => array(
        'len' => '13'
    )
);

echo $Php4Console->write($text);//escreve um texto na tela

echo $Php4Console->box($text);//escreve o texto num quadro

echo $Php4Console->box($text, $title);//escreve o texto num quadro com um título

echo $Php4Console->table($data, $colmodel);//escreve uma tabela

echo $Php4Console->table($data, $colmodel, $title);//escreve uma tabela com título
*/

/*$Php4Console->openLoadLine('Iniciando carregamento de alguma coisa');
sleep(3);
$Php4Console->closeLoadLine();

$Php4Console->openLoadLine('Carregando alguma coisa que irá falhar');
sleep(3);
$Php4Console->closeLoadLine(false);

$Php4Console->openLoadGroupLine('Iniciando um grupo de linhas');
$Php4Console->openLoadStepLine('Esta é uma etapa do carregamento');
sleep(3);
$Php4Console->closeLoadStepLine();
$Php4Console->openLoadStepLine('Esta é uma etapa do carregamento que falha');
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
