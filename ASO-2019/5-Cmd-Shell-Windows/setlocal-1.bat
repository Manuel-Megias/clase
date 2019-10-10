@echo off

setlocal enabledelayedexpansion

set /a VExterna=1
set /a VInterna=1

REM Las variables definidas dentro del bucle debe estar entre!(valores durante la ejecucion)
REM Las Variables establecidas fuera del bucle están encerrados entre % (valores de carga)
REM El parámetro %%i es reemplazable por una excepción a esta

for /L %%i IN (1,1,5) do (
   set /a VInterna+=%VExterna%
   echo.VExterna=%VExterna% VInterna=!VInterna! Con porcentaje  VInterna=%VInterna% i vale %%i
)
echo.VExterna= %VExterna% VInterna= %VInterna%
endlocal
pause