<?php
echo 'Este exemplo escreve na tela um texto dentro de uma caixa, com e sem t�tulo.'.PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
require 'php4console.class.php';

$Php4Console = new Php4Console(77);

$title = 'Isto � um teste';
$text = 'PHP, que significa "PHP: Hypertext Preprocessor", � uma linguagem de programa��o de ampla utiliza��o, interpretada, que � especialmente interessante para desenvolvimento para a Web e pode ser mesclada dentro do c�digo HTML. A sintaxe da linguagem lembra C, Java e Perl, e � f�cil de aprender. O objetivo principal da linguagem � permitir a desenvolvedores escreverem p�ginas que ser�o geradas dinamicamente rapidamente, mas voc� pode fazer muito mais do que isso com PHP.';


echo 'Este exemplo escreve na tela um texto dentro de uma caixa.'.PHP_EOL;
echo PHP_EOL;

echo $Php4Console->box($text);//escreve o texto num quadro

echo PHP_EOL;
echo 'Agora a caixa tem t�tulo.'.PHP_EOL;
echo PHP_EOL;

echo $Php4Console->box($text, $title);//escreve o texto num quadro com um t�tulo

?>
