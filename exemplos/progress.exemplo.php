<?php
echo 'Este exemplo mostra como utilizar os métodos de load e progresso.'.PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
require 'php4console.class.php';

$Php4Console = new Php4Console(77);

$Php4Console->openLoadLine('Iniciando carregamento de alguma coisa');
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
$Php4Console->runProgressBar();

?>
