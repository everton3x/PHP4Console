<?php
echo 'Este exemplo imprime um texto quebrando as linhas em 77 colunas.'.PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

require 'php4console.class.php';

$Php4Console = new Php4Console(77);

$text = 'PHP, que significa "PHP: Hypertext Preprocessor", � uma linguagem de programa��o de ampla utiliza��o, interpretada, que � especialmente interessante para desenvolvimento para a Web e pode ser mesclada dentro do c�digo HTML. A sintaxe da linguagem lembra C, Java e Perl, e � f�cil de aprender. O objetivo principal da linguagem � permitir a desenvolvedores escreverem p�ginas que ser�o geradas dinamicamente rapidamente, mas voc� pode fazer muito mais do que isso com PHP.';

echo $Php4Console->write($text);//escreve um texto na tela

?>
