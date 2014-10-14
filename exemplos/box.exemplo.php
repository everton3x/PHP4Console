<?php
echo 'Este exemplo escreve na tela um texto dentro de uma caixa, com e sem título.'.PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
require 'php4console.class.php';

$Php4Console = new Php4Console(77);

$title = 'Isto é um teste';
$text = 'PHP, que significa "PHP: Hypertext Preprocessor", é uma linguagem de programação de ampla utilização, interpretada, que é especialmente interessante para desenvolvimento para a Web e pode ser mesclada dentro do código HTML. A sintaxe da linguagem lembra C, Java e Perl, e é fácil de aprender. O objetivo principal da linguagem é permitir a desenvolvedores escreverem páginas que serão geradas dinamicamente rapidamente, mas você pode fazer muito mais do que isso com PHP.';


echo 'Este exemplo escreve na tela um texto dentro de uma caixa.'.PHP_EOL;
echo PHP_EOL;

echo $Php4Console->box($text);//escreve o texto num quadro

echo PHP_EOL;
echo 'Agora a caixa tem título.'.PHP_EOL;
echo PHP_EOL;

echo $Php4Console->box($text, $title);//escreve o texto num quadro com um título

?>
