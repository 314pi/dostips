<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8816&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex" />

<title>DosTips.com &bull; HEXDUMP.BAT version 2.1 using CERTUTIL</title>

<link href="styles/AllanStyle-SUBSILVER/theme/print.css" rel="stylesheet">
</head>
<body id="phpbb">
<div id="wrap" class="wrap">
	<a id="top" class="top-anchor" accesskey="t"></a>

	<div id="page-header">
		<h1>DosTips.com</h1>
		<p>A Forum all about DOS Batch<br /><a href="index-2.html">https://www.dostips.com/forum/</a></p>

		<h2>HEXDUMP.BAT version 2.1 using CERTUTIL</h2>
		<p><a href="viewtopic239b.html?f=3&amp;t=8816">https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8816</a></p>
	</div>

	<div id="page-body" class="page-body">
		<div class="page-number">Page <strong>1</strong> of <strong>1</strong></div>
					<div class="post">
				<h3>HEXDUMP.BAT version 2.1 using CERTUTIL</h3>
				<div class="date">Posted: <strong>04 Sep 2018 13:46</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">Over 7 years ago I wrote a pure batch <a href="viewtopicfc17.php?f=3&amp;t=1786" class="postlink">HEXDUMP.BAT script</a> (and function) that could read a binary file and write out a nicely formatted hex dump of the content. That script relied on a clever FC technique to read the data. It works great, but is very slow.<br>
<br>
Now that we have a bunch of <a href="viewtopic0ae5.html?f=3&amp;t=8521" class="postlink">options for CERTUTIL -encodeHex formatting</a>, I decided to completely redesign HEXDUMP to use CERTUTIL. The new HEXDUMP.BAT doesn't do anything that CERTUTIL can't already do, it just makes it much easier to use.<br>
<br>
<span style="font-size: 120%; line-height: normal"><strong class="text-strong">Pros compared to the old FC based version</strong></span>
<ul>
 <li> Much faster</li>
 <li> Ability to read stdin, so it can be used with pipes and redirection</li>
 <li> Ability to control line terminator in output: \r\n, \n, or none</li>
 <li> Ability to write Unicode output</li>
 <li> Simpler to control the output format</li>
</ul>

<span style="font-size: 120%; line-height: normal"><strong class="text-strong">Cons compared to the old version</strong></span>
<ul>
 <li> No longer pure batch - I use a bit of JScript to read binary piped or redirected input.</li>
 <li> No longer able to dump a portion of a file, but this was rarely used before because large files were so slow.</li>
 <li> Not quite as much flexibility in the output format, but all the important features are still there.</li>
</ul>

Full documentation is embedded within the script. Use <strong class="text-strong"><span style="font-size: 110%; line-height: normal">HEXDUMP /?</span></strong> from the command line to get the help.<br>
<br>
<span style="font-size: 120%; line-height: normal"><strong class="text-strong">HEXDUMP.BAT</strong></span>
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@if (@X)==(@Y) @end /* Harmless hybrid line that begins a JScript comment
:::
:::HEXDUMP [/Option [Value]]...
:::
:::  Writes the content of stdin as hexadecimal to stdout, with 16 bytes per line,
:::  using the following format:
:::
:::    OOOOOOO XX XX XX XX XX XX XX XX  XX XX XX XX XX XX XX XX   AAAAAAAAAAAAAAAA
:::
:::  where:
:::
:::    0000000          = the hexadecimal offset within the input
:::    XX               = the hexadecimal value of a byte
:::    AAAAAAAAAAAAAAAA = the bytes as ASCII (control codes and non-ASCII as .)
:::
:::  Output is encoded as ASCII, with each line terminated by CarriageReturn
:::  LineFeed.
:::
:::  The behavior can be modified by appending any combination of the following
:::  options:
:::
:::    /I InFile  - Input from InFile instead of stdin
:::    /O OutFile - Output to OutFile instead of stdout: - overwrites InFile
:::    /NA - No ASCII
:::    /NO - No Offsets
:::    /R  - Raw hexadecimal on a single line, with no space between bytes
:::    /LF - LineFeed as line terminator instead of CarriageReturn LineFeed
:::    /NL - No Line terminators, all output on one line without line terminator
:::    /U  - Unicode encoded output with BOM (UTF-16)
:::    /V  - Write version info to stdout
:::    /?  - Write this help to stdout
:::
:::HEXDUMP.BAT version 2.1 was written by Dave Benham
:::and is maintained at https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8816

@echo off
setlocal disableDelayedExpansion
set "tempRoot="

:: Define options
set "/options= /I:"" /LF: /NA: /NL: /NO: /O:"" /R: /U: /V: /?: "

:: Set default option values
for %%O in (%/options%) do for /f "tokens=1,* delims=:" %%A in ("%%O") do set "%%A=%%~B"
set "/?="

:GetOptions
if not "%~1"=="" (
  set "/test=%~1"
  setlocal enableDelayedExpansion
  if "!/test:~0,1!" neq "/" call :exitErr "Invalid argument" 1
  set "/test=!/options:*%~1:=! "
  if "!/test!"=="!/options! " (
      endlocal
      call :exitErr "Invalid option %~1" 1
  ) else if "!/test:~0,1!"==" " (
      endlocal
      set "%~1=1"
  ) else (
      endlocal
      set "%~1=%~2"
      shift /1
  )
  shift /1
  goto :GetOptions
)

if defined /? (
  for /f "delims=: tokens=*" %%A in ('findstr "^:::" "%~f0"') do @echo(%%A
  exit /b 0
)

if defined /V (
  for /f "delims=: tokens=*" %%A in ('findstr /bic:":::HEXDUMP.BAT version" "%~f0"') do echo(%%A
  exit /b 0
)

if "%/O%"=="-" if not defined /I call :exitErr "Cannot write to stdin" 1

set /a "type= 11 - 0%/NA% - 0%/NO%*2"
if %type%==9 set "type=5"
if defined /R set "type=12"
set /a "type|= (0%/LF%*0x80000000 | 0%/NL%*0x40000000)"
if %type% lss 0 cmd /c exit /b %type%
if %type% lss 0 set "type=0x%=exitCode%"

set "unicode="
if defined /U set "unicode=-UnicodeText"

if defined /I set "in=%/I%" &amp; goto :getOutput
call :getTempRoot
set "in=%tempRoot%.stdin"
cscript //nologo //E:JScript "%~f0" "%in%"

:getOutput
if "%/O%" equ "-" set "out=%~1" &amp; goto :go
if defined /O set "out=%/O%" &amp; goto :go
if not defined tempRoot call :getTempRoot
set "out=%tempRoot%.hexdump"

:go
(certutil %unicode% -f -encodehex "%in%" "%out%" %type% || echo ERROR: HexDump failed during CertUtil processing) | findstr "ERROR" &gt;&amp;2 &amp;&amp; call :exit 1

if not defined /O (findstr "^" "%out%") else echo Hexdump successfully written to "%out%".
call :exit 0

:getTempRoot
set "tempRoot="
if defined temp for %%T in ("%temp%") do set "tempRoot=%%~fT\"
if not defined tempRoot if defined tmp for %%T in ("%tmp%") do set "tempRoot=%%~fT\"
set "tempRoot=%tempRoot%%~nx0.%time::=_%.%random%"
if exist "%tempRoot%.lock" goto :getTempRoot
2&gt;nul (break &gt;"%tempRoot%.lock") || goto :getTempRoot
exit /b

:exitErr
&gt;&amp;2 echo ERROR: %~1.
shift
:: Fall through to :exit

:exit
if defined tempRoot del "%tempRoot%.*"
(goto) 2&gt;nul &amp; exit /b %1


************* JScript portion - read stdin and write to file defined by arg0 **********/
var fso = new ActiveXObject("Scripting.FileSystemObject");
var out = fso.OpenTextFile(WScript.Arguments(0),2,true);
var chr;
while( !WScript.StdIn.AtEndOfStream ) {
  chr=WScript.StdIn.Read(1000000);
  out.Write(chr);
}
</code></pre></div></div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: HEXDUMP.BAT version 2.1 using CERTUTIL</h3>
				<div class="date">Posted: <strong>05 Sep 2018 08:16</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">I've updated the original post to version 2.1<br>
<br>
The only change is some minor redesign of the exit process to ensure that temp files are "always" deleted, even if there is an error.<br>
<br>
<br>
Dave Benham</div>
			</div>
			<hr />
			</div>

	<div id="page-footer" class="page-footer">
		<div class="page-number">All times are <span title="UTC-6">UTC-06:00</span><br />Page <strong>1</strong> of <strong>1</strong></div>
		<div class="copyright">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>
	</div>
</div>

</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8816&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:01 GMT -->
</html>
