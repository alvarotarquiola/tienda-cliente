@ECHO OFF


REM * set dirbase=%~dp0 

set dirbase=C:\IMGtienda\

set ftphost=team-web.es
set ftpuser=Tienda-70
set ftppass=19630006



set ftpdir=transferidas
set remotescript=http://localhost/Tienda/admin21/tabs/AdminImagenesAdjuntos/encuadre.php



ECHO trabajando..

ECHO Leyendo y convirtiendo archivos de imagenes..

del /Q %dirbase%oktransfer


mkdir %dirbase%oktransfer\imagenes
for /r %dirbase%imagenes %%g in (*) do (
	echo %%~nxg
	convert %dirbase%imagenes\%%~nxg -thumbnail 960x960 %dirbase%oktransfer\imagenes\%%~ng.jpg
	)






ECHO Enviando archivos al ftp..

for /r %dirbase%oktransfer\imagenes %%g in (*) do (
	echo %%~nxg
	
	echo user %ftpuser%> ftpcmd.dat
	echo %ftppass%>> ftpcmd.dat
	echo bin>> ftpcmd.dat
	echo literal pasv>>ftpcmd.dat
	echo mkdir %ftpdir%>>ftpcmd.dat
	echo cd %ftpdir%>>ftpcmd.dat
	echo mkdir imagenes>>ftpcmd.dat
	echo cd imagenes>>ftpcmd.dat
	
	echo put %dirbase%oktransfer\imagenes\%%~nxg>> ftpcmd.dat
	echo quit>> ftpcmd.dat
	ftp -n -s:ftpcmd.dat %ftphost%
	del ftpcmd.dat
	
	
	)
	
ECHO Iniciando el script remoto para encuadre de imagenes..
start %remotescript%