@ECHO OFF
REM -- Source dostips.com, provided AS-IS, no warranty what so ever.
REM -- This batch fakes out the help command for testing of the DosCommandRef.bat.
REM -- put a help.bat file into the root folder that emulates the "help" command without arguments
SET "h=;APPEND /?;ARP -?;ATMADM -?;AUDITUSR /?;BLASTCLN /?;CSCRIPT -?;DEBUG /?;DEFRAG -?;DIANTZ /?;DISKPART /?;DISKPERF /?;EDLIN /?;EXE2BIN /?;EXPAND /?;FINGER -?;FLTMC HELP;FORCEDOS /?;FSUTIL ;FTP -?;HOSTNAME -?;IPCONFIG -?;JAVA -?;LODCTR /?;LOGMAN /?;LPQ /?;LPR /?;MAKECAB /?;MEM /?;MOUNTVOL /?;MRINFO /?;MSG /?;NBTSTAT /?;NET /?;NET1 /?;NETSH /?;NETSTAT /?;NLSFUNC /?;NSLOOKUP /?;PATHPING /?;PENTNT /?;PING /?;PING6 /?;POWERCFG /?;PROXYCFG /?;QAPPSRV /?;QPROCESS /?;QWINSTA /?;RASAUTOU -?;RASDIAL /?;RCP /?;REG /?;REXEC /?;ROUTE /?;RSH -?;RSM ;RUNAS /?;RWINSTA /?;SC ;SETVER /?;SHADOW /?;SHUTDOWN /?;SMBINST /?;TELNET /?;TFTP /?;TRACERT /?;TRACERT6 /?;TSCON /?;TSDISCON /?;TSKILL /?;TSSHUTDN /?;TZCHANGE /?;UNLODCTR /?;VERIFIER /?;VSSADMIN /?;W32TM /?;"
rem set "h=%h: =	%"

if "%~1"=="" (
    pushd \&help&popd
    for /f "delims=;" %%A in ('"echo.%%h:;=&echo.%%"') do for /f %%B in ("%%A") do echo.%%B
    GOTO:EOF
)

call set "v=%%h:*;%~1 =%%"
if "%h%"=="%v%" (
    pushd \&help %~1&popd
    GOTO:EOF
)
SET "v=%v:;=&rem.%"
%~1 %v%