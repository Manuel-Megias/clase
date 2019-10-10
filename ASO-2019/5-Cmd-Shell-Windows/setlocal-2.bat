

Rem sin enabledelayedexpansion y !!

@echo off
set var=antes
 if %var%==antes (set var=despues&if !var!==despues echo "Cambiado a despues") 

echo al terminar var es %var%

pause

Rem sin enabledelayedexpansion y %

@echo off
set var=antes
 if %var%==antes (set var=despues&if %var%==despues echo "Cambiado a despues") 

echo al terminar var es %var%
pause

Rem con enabledelayedexpansion


@echo off
setlocal enabledelayedexpansion

set var=antes
 if %var%==antes (set var=despues&if !var!==despues echo "Cambiado a despues") 

echo al salir var es %var%