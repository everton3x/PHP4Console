<?php

echo 'Exemplos disponíveis:'.PHP_EOL;
echo PHP_EOL;
foreach(glob('./exemplos/*.exemplo.php') as $filename){
	echo "\t".basename($filename, '.exemplo.php').PHP_EOL;
}
echo PHP_EOL;
echo 'Digite um exemplo desejado e pressione ENTER.'.PHP_EOL;

?>
