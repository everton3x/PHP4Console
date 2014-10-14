@echo off
chcp 1252
:inicio
cls
echo Para sair da interface de exemplos, pressione CONTROL+C
echo.
e:\xampp\php\php.exe -f exemplos.php

SET /P exemplo=Nome do exemplo: 
cls
e:\xampp\php\php.exe -f .\exemplos\%exemplo%.exemplo.php
echo.
echo Para sair da interface de exemplos, pressione CONTROL+C ou
echo.
pause
goto inicio
