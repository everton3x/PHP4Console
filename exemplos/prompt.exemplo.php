<?php
echo 'Este exemplo mostra como utilizar o método prompt.'.PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
require 'php4console.class.php';

$Php4Console = new Php4Console(77);
echo 'Este é um prompt com mesnagem padrão. Digite alguma coisa e tecle ENTER.'.PHP_EOL;
echo 'Você digitou '.$Php4Console->prompt();
echo PHP_EOL;
echo 'Este é um prompt com mesnagem personalizada. Digite alguma coisa e tecle ENTER.'.PHP_EOL;
echo 'Você digitou '.$Php4Console->prompt('Prompt#');
echo PHP_EOL;

?>
