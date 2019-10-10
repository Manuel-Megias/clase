rem @echo off
rem se habilita la expansion de variables

setlocal enabledelayedexpansion
if %1.==. (
	echo Sintaxis: %0 fichero-entrada
	goto fin
)

rem asignamos a la variable fichero-salida el nombre del fichero de entrada terminado en "-reves.txt"

set fichero-salida=%~n1-reves.txt
rem creamos vacio el fichero de salida

echo 2>%fichero-salida% >nul

rem %%L contendrá una linea del fichero de entrada en cada iteración

for /f  %%L in (%1) do call :contar-caracteres %%L

goto fin

rem funcion --------------------------------------------------------------------

:contar-caracteres

rem Se asigna a la variable linea los argumentos pasados a la función contar-caracteres

set linea=%*
rem inicializamos el contador de caracteres y la variable que contendra la linea invertida
set c=0
set linea-reves=

rem cuenta mientras haya caracteres
rem recorre la linea del ultimo al primer caracter llevandolos a la variable linea-reves

:bucle
if not "!linea:~%c%,1!"== "" ( 
 	set /a c+=1
 	goto bucle
) else (
 	for /L %%a in (%c%, -1, 0) do set linea-reves=!linea-reves!!linea:~%%a,1!
	echo !linea-reves! >> !fichero-salida! 
 	goto :EOF
)
rem ---------------------------------------------------------------------------------

:fin
