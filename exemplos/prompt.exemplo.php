<?php
echo 'Este exemplo mostra como utilizar o m�todo prompt.'.PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
require 'php4console.class.php';

$Php4Console = new Php4Console(77);
echo 'Este � um prompt com mesnagem padr�o. Digite alguma coisa e tecle ENTER.'.PHP_EOL;
echo 'Voc� digitou '.$Php4Console->prompt();
echo PHP_EOL;
echo 'Este � um prompt com mesnagem personalizada. Digite alguma coisa e tecle ENTER.'.PHP_EOL;
echo 'Voc� digitou '.$Php4Console->prompt('Prompt#');
echo PHP_EOL;

?>
