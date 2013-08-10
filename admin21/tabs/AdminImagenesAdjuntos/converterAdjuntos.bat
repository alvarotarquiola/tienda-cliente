@ECHO OFF


REM * set dirbase=%~dp0 

set dirbase=C:\IMGtienda\

set ftphost=team-web.es
set ftpuser=Tienda-70
set ftppass=19630006



set ftpdir=transferidas
set remotescript=http://localhost/Tienda/admin21/tabs/AdminImagenesAdjuntos/encuadreadj.php



ECHO trabajando..

ECHO Leyendo y conviertiendo archivos de adjuntos..

mkdir %dirbase%oktransfer\adjuntos
for /r %dirbase%adjuntos %%g in (*) do (
	echo %%~nxg
	copy %dirbase%adjuntos\%%~nxg %dirbase%oktransfer\adjuntos\%%~nxg
	)


ECHO Enviando archivos al ftp..

for /r %dirbase%oktransfer\adjuntos %%g in (*) do (
	echo %%~nxg
	
	echo user %ftpuser%> ftpcmd.dat
	echo %ftppass%>> ftpcmd.dat
	echo bin>> ftpcmd.dat
	echo literal pasv>>ftpcmd.dat
	echo mkdir %ftpdir%>>ftpcmd.dat
	echo cd %ftpdir%>>ftpcmd.dat
	echo mkdir adjuntos>>ftpcmd.dat
	echo cd adjuntos>>ftpcmd.dat
	
	echo put %dirbase%oktransfer\adjuntos\%%~nxg>> ftpcmd.dat
	echo quit>> ftpcmd.dat
	ftp -n -s:ftpcmd.dat %ftphost%
	del ftpcmd.dat
	
	
	)
	
ECHO Iniciando el script remoto para encuadre de adjuntos..
start %remotescript%