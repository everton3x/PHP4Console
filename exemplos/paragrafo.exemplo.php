<?php
echo 'Este exemplo imprime um texto quebrando as linhas em 77 colunas.'.PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

require 'php4console.class.php';

$Php4Console = new Php4Console(77);

$text = 'PHP, que significa "PHP: Hypertext Preprocessor", é uma linguagem de programação de ampla utilização, interpretada, que é especialmente interessante para desenvolvimento para a Web e pode ser mesclada dentro do código HTML. A sintaxe da linguagem lembra C, Java e Perl, e é fácil de aprender. O objetivo principal da linguagem é permitir a desenvolvedores escreverem páginas que serão geradas dinamicamente rapidamente, mas você pode fazer muito mais do que isso com PHP.';

echo $Php4Console->write($text);//escreve um texto na tela

?>
