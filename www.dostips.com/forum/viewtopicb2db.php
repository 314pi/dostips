<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8817&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex" />

<title>DosTips.com &bull; Help can JREPL do this?</title>

<link href="styles/AllanStyle-SUBSILVER/theme/print.css" rel="stylesheet">
</head>
<body id="phpbb">
<div id="wrap" class="wrap">
	<a id="top" class="top-anchor" accesskey="t"></a>

	<div id="page-header">
		<h1>DosTips.com</h1>
		<p>A Forum all about DOS Batch<br /><a href="index-2.html">https://www.dostips.com/forum/</a></p>

		<h2>Help can JREPL do this?</h2>
		<p><a href="viewtopic52ad.html?f=3&amp;t=8817">https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8817</a></p>
	</div>

	<div id="page-body" class="page-body">
		<div class="page-number">Page <strong>1</strong> of <strong>1</strong></div>
					<div class="post">
				<h3>Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>04 Sep 2018 23:17</strong></div>
				<div class="author">by <strong>JacobMIX</strong></div>
				<div class="content">I wanna use a bat file to delete "[", "]", and anything between them.<br>
Plus replace any "." with spaces, and remove everything after the last "."<br>
Then also remove any blank space " " that might be at the start or the end.<br>
Can't seem to find an easy way to do it. Then i stumbled upon JREPL.BAT, but i have no idea were to start.<br>
Can JREPL even do what i want? If anyone can straight up code it, and post it they get double points.<br>
<br>
I wanna use it in a setting like this btw:
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>:Loop
For /F "Tokens=1* Delims=:" %%A In ( 'TaskList /V /Fi "ImageName Eq PotPlayerMini64.exe" /Fo List' ) Do @For /F "Tokens=*" %%C In ("%%B") Do @Set "_PotPlayerWindowTitle=%%C"
echo %_PotPlayerWindowTitle% &gt;PotPlayerTitle.txt

"Code here that edits PotPlayerTitle.txt and puts it in PotPlayerEditedTitle.txt"

set /p PotPlayerEditedTitle=&lt;PotPlayerEditedTitle.txt
goto Loop</code></pre></div></div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 04:16</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">Untested, as I am not at a Windows machine, but I believe the following should work:
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>call jrepl "^[. ]+|[. ]+$|\[[^\]]*\]#\." "# " /t # /f PotPlayerTitle.txt /o PotPlayerTitle.txt
</code></pre></div>
The above uses the /T option to do multiple find/replace in one pass, using # as the delimiter between expressions.<br>
<br>
<span style="font-size: 120%; line-height: normal">^[. ]+|[. ]+$|\[[^\]]*\]</span> matches:<br>
 - any combination of dots and spaces at the beginning of the line<br>
 - any combination of dots and spaces at the end of the line<br>
 - any string beginning with [ and ending with ]<br>
And the matching string is replaced by nothing (there is no string before the # delimiter in the replace argument)<br>
<br>
<span style="font-size: 120%; line-height: normal">\.</span> matches a dot which is replaced by a space<br>
<br>
<br>
Or you can overwrite the original file with
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>call jrepl "^[. ]+|[. ]+$|\[[^\]]*\]#\." "# " /t # /f PotPlayerTitle.txt /o -
</code></pre></div>

Or you can eliminate the FOR /F or need for FIND, and write the final result directly to PotPlayerTitle.txt with:
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>tasklist /fi "imagename eq PotPlayerMini64.exe" /fo list /v | jrepl "^[. ]+|[. ]+$|\[[^\]]*\]#\." "# " /t # /inc "/window title/i" /exc "/N\/A/" /a /o PotPlayerTitle.txt
</code></pre></div>
This last code assumes JREPL will always make at least one change to the "window title" line, else it won't work. The /A option only writes lines that are altered.<br>
<br>
<br>
Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 05:25</strong></div>
				<div class="author">by <strong>JacobMIX</strong></div>
				<div class="content">Thanks. Your script works almost perfectly. But some stuff at the end isn't gone. (The stuff after the last "." i mean)<br>
Does JREPL have a way to detect the last ".", and delete it with everything ahead of it?</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 06:30</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">Oops. Yes, I forgot about that requirement.<br>
<br>
Yes, you can use the negative look ahead feature to find the last dot. With this requirement it is easier to break the operation into 2 JREPL steps, saving the removal of leading and trailing spaces until the second step.
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>tasklist /fi "imagename eq PotPlayerMini64.exe" /fo list /v | jrepl "\[[^\]]*\]|\.(?!.*\.).*#\." "# " /t # /inc "/window title/i" /exc /N\/A/ /a|jrepl "^ +| +$" ""
</code></pre></div>

<br>
Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 06:42</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">I should think you don't need (want) to preserve the "Window Title:" text at the beginning, as this is a constant. It is easy to remove it, and then you are guaranteed that all relevant lines have at least one change, so the /A option is safe to use.<br>
<br>
I also refined the /INC and /EXC options to be more specific.
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>tasklist /fi "imagename eq PotPlayerMini64.exe" /fo list /v | jrepl "^Window Title:|\[[^\]]*\]|\.(?!.*\.).*#\." "# " /t # /inc "/^Window Title:/" /exc "/^Window Title: N\/A/" /a|jrepl "^ +| +$" ""
</code></pre></div>

<br>
Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 09:19</strong></div>
				<div class="author">by <strong>Squashman</strong></div>
				<div class="content">In the future may I suggest you provide a verifiable example of what the input of your example is and what you want to the output to look like.  A wordy description can sometimes gets confusing without seeing a real world example of your data.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 13:14</strong></div>
				<div class="author">by <strong>JacobMIX</strong></div>
				<div class="content">It seems to work the first time it runs it, but next loop it doesn't. I get this error: JScript runtime error in Search regular expression: Syntax error in regular expression<br>
I want a cleaned up version of what file the PotPlayer is playing. Something like:<br>
[TextHere].CoolVidoe.-.Hip.video.-.#01.(Pilot)_(Year)_[BD 1920x1080p AVC FLAC]_[More things].mkv - PotPlayer<br>
Which i would like to output as:<br>
CoolVidoe - Hip video - #01 (Pilot) (Year)<br>
<br>
Full script i'm using right now:
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@Echo Off
:CheckEasyRP
tasklist /FI "IMAGENAME eq easyrp.exe" 2&gt;NUL | find /I /N "easyrp.exe"&gt;NUL
if "%ERRORLEVEL%"=="0" goto LoopStart
goto EasyRPNotRunning


:EasyRPNotRunning
start /d "C:\srcds\Bots\Discord\EasyRP-windows" easyrp.exe
timeout /t 5
goto CheckEasyRP


:LoopStart
timeout /t 2
tasklist /FI "IMAGENAME eq easyrp.exe" 2&gt;NUL | find /I /N "easyrp.exe"&gt;NUL
if "%ERRORLEVEL%"=="0" goto EasyRPGo
goto EasyRPNotGo

:EasyRPGo
timeout /t 1
goto PotPlayer

:EasyRPNotGo
exit


:PotPlayer
timeout /t 2
tasklist /FI "IMAGENAME eq PotPlayerMini64.exe" 2&gt;NUL | find /I /N "PotPlayerMini64.exe"&gt;NUL
if "%ERRORLEVEL%"=="0" goto PotPlayerRunning
goto PotPlayerNotRunning

:PotPlayerRunning
timeout /t 1
goto StartScript

:PotPlayerNotRunning
taskkill /im "easyrp.exe"
exit


:StartScript
For /F "Tokens=1* Delims=:" %%A In ( 'TaskList /V /Fi "ImageName Eq PotPlayerMini64.exe" /Fo List' ) Do @For /F "Tokens=*" %%C In ("%%B") Do @Set "_PotPlayerWindowTitle=%%C"
echo %_PotPlayerWindowTitle% &gt;PotPlayerTitle.txt


call jrepl "\[[^\]]*\]|\.(?!.*\.).*#\." "# " /t # /f PotPlayerTitle.txt /o PotPlayerEditedTitle.txt
timeout /t 1

set /p PotPlayerTitle=&lt;PotPlayerEditedTitle.txt
timeout /t 1

SetLocal EnableDelayedExpansion
:: Edit the following three lines as needed.
:: Specifiy the full path to the file, or the current directory will be used
Set _PathtoFile=C:\srcds\Bots\Discord\EasyRP-windows\config.ini
Set _OldLine=State=
Set _NewLine=State=%PotPlayerTitle%
:: End of Search parameters
Call :_Parse "%_PathtoFile%"
Set _Len=0
Set _Str=%_OldLine%
Set _Str=%_Str:"=.%987654321
:_Loop
If NOT "%_Str:~18%"=="" Set _Str=%_Str:~9%&amp; Set /A _Len+=9&amp; Goto _Loop
Set _Num=%_Str:~9,1%
Set /A _Len=_Len+_Num
PushD %_FilePath%
If Exist %_FileName%.new Del %_FileName%.new
If Exist %_FileName%.old Del %_FileName%.old
Set _LineNo=0
For /F "Tokens=* Eol=" %%I In (%_FileName%%_FileExt%) Do (
Set _tmp=%%I
Set /A _LineNo+=1
If /I "!_tmp:~0,%_Len%!"=="%_OldLine%" (
&gt;&gt;%_FileName%.new Echo %_NewLine%
) Else (
If !_LineNo! GTR 1 If "!_tmp:~0,1!"=="[" Echo.&gt;&gt;%_FileName%.new
SetLocal DisableDelayedExpansion
&gt;&gt;%_FileName%.new Echo %%I
EndLocal
))
Ren %_FileName%%_FileExt% %_FileName%.old
Ren %_FileName%.new %_FileName%.ini
PopD
Goto :LoopStart
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
:: Subroutines
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
:_Parse
Set _FilePath=%~dp1
Set _FileName=%~n1
Set _FileExt=%~x1
exit /b</code></pre></div>
Edit never mind. Got it working using your latest script with "&gt;PotPlayerTitle.txt" or "/o PotPlayerTitle.txt" Didn't wanna work if i tried with the whole ( ' HERE ' ) Do @For /F "Tokens=*" %%C In ("%%B") Do @Set "_PotPlayerWindowTitle=%%C" Thing.
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>tasklist /fi "imagename eq PotPlayerMini64.exe" /fo list /v | jrepl "^Window Title:|\[[^\]]*\]|\.(?!.*\.).*#\.|\_" "# " /t # /inc "/^Window Title:/" /exc "/^Window Title: N\/A/" /a|jrepl "^ +| +$" ""&gt;PotPlayerTitle.txt</code></pre></div></div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 17:42</strong></div>
				<div class="author">by <strong>JacobMIX</strong></div>
				<div class="content">Damn it nope. Seems it still fails after the loop. I get this error now: <a href="http://prntscr.com/kr3gu3" class="postlink">http://prntscr.com/kr3gu3</a></div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 18:14</strong></div>
				<div class="author">by <strong>Squashman</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist9852.html?mode=viewprofile&amp;u=9372">JacobMIX</a> wrote: <a href="viewtopic260a.php?p=57948#p57948" data-post-id="57948" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">05 Sep 2018 17:42</div></cite>
Damn it nope. Seems it still fails after the loop. I get this error now: <a href="http://prntscr.com/kr3gu3" class="postlink">http://prntscr.com/kr3gu3</a>
</div></blockquote>
IMHO, it would be easier to copy and paste the text from the console window then creating a screenshot and creating a link for it. Also you should be able to do everything you need to do without JREPL. A FOR /F and some string substitution should easily do the trick.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 18:19</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">The error is due to a ! within the regex search string and delayedExpansion.<br>
<br>
You start out with delayed expansion off, so JREPL works the first time. But after you run JREPL, you SETLOCAL EnableDelayedExpansion, but fail to ENDLOCAL before you loop back. (Actually you have 2 SETLOCAL, but only 1 ENDLOCAL). So now when you loop back the delayed expansion corrupts the regex with !. Even if you didn't get this error, you would eventually get a stack overflow error because you can only have 31(?) active SETLOCAL within one CALL level.<br>
<br>
Your code is easily fixed by adding an ENDLOCAL before GOTO :LoopStart<br>
<br>
<br>
Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Help can JREPL do this?</h3>
				<div class="date">Posted: <strong>05 Sep 2018 18:54</strong></div>
				<div class="author">by <strong>JacobMIX</strong></div>
				<div class="content">You're totally right. Got it fixed now, and it's working perfectly. Thanks for the great help.</div>
			</div>
			<hr />
			</div>

	<div id="page-footer" class="page-footer">
		<div class="page-number">All times are <span title="UTC-6">UTC-06:00</span><br />Page <strong>1</strong> of <strong>1</strong></div>
		<div class="copyright">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>
	</div>
</div>

</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8817&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:58 GMT -->
</html>
