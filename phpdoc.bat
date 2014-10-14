@echo off

e:\xampp\php\php.exe e:\app\PhpDocumentor\bin\phpdoc.php run --target=e:\www\dev\PHP4Console\doc --filename=php4console.class.php,text4shell.class.php --title="Php4Console" --force --defaultpackagename=Php4Console --sourcecode=on --template=abstract

pause
cls
