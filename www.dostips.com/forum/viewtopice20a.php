<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8811&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex" />

<title>DosTips.com &bull; Exist in /s &quot;directory&quot;doesn't work</title>

<link href="styles/AllanStyle-SUBSILVER/theme/print.css" rel="stylesheet">
</head>
<body id="phpbb">
<div id="wrap" class="wrap">
	<a id="top" class="top-anchor" accesskey="t"></a>

	<div id="page-header">
		<h1>DosTips.com</h1>
		<p>A Forum all about DOS Batch<br /><a href="index-2.html">https://www.dostips.com/forum/</a></p>

		<h2>Exist in /s &quot;directory&quot;doesn't work</h2>
		<p><a href="viewtopicc08e.html?f=3&amp;t=8811">https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8811</a></p>
	</div>

	<div id="page-body" class="page-body">
		<div class="page-number">Page <strong>1</strong> of <strong>1</strong></div>
					<div class="post">
				<h3>Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>31 Aug 2018 14:55</strong></div>
				<div class="author">by <strong>Roy</strong></div>
				<div class="content">Hello all,<br>
<br>
I am trying to build a batch that looks for .pdf files in a folder, checks for duplicates in a second folder and <strong class="text-strong">all of its directories</strong> and finally if they exist in that (2nd) folder it moves the files from 1st folder to a 3rd one.<br>
<br>
<span style="text-decoration: underline">for better understanding</span><br>
look for .pdf files in F1<br>
if they exists in F2 or its subdirs<br>
move files from F1 to F3<br>
<br>
My script looks like below but it doesn't work due to /s parameter in if exist command.<br>

<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off
for /f "tokens=* delims=" %%v in ('dir /b %userprofile%\Desktop\F1\*.pdf') do (
	if exist "%userprofile%\Desktop\F2" /s move /y "%userprofile%\Desktop\F1\%%v" "%userprofile%\Desktop\F3"
	if not exist "%userprofile%\Desktop\F2" /s echo File %%v is not a duplicate
)
pause</code></pre></div>

Any ideas please?</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>31 Aug 2018 15:36</strong></div>
				<div class="author">by <strong>Roy</strong></div>
				<div class="content">for /f "tokens=* delims=" %%v in ...<br>
corrected</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>31 Aug 2018 21:30</strong></div>
				<div class="author">by <strong>ShadowThief</strong></div>
				<div class="content">What are you expecting the /s flag to do? The only flag that if has is /i for case-insensitive comparisons.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>31 Aug 2018 23:58</strong></div>
				<div class="author">by <strong>Roy</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056">ShadowThief</a> wrote: <a href="viewtopic9435.php?p=57892#p57892" data-post-id="57892" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">31 Aug 2018 21:30</div></cite>
What are you expecting the /s flag to do? The only flag that if has is /i for case-insensitive comparisons.
</div></blockquote>

I am expecting to check if exist in subdirectories also but it doesn't. Is there any other way to do it ?</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>01 Sep 2018 00:02</strong></div>
				<div class="author">by <strong>pieh-ejdsch</strong></div>
				<div class="content">Hello<br>
A small modification<br>

<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off
pushD %userprofile%\desktop\F2
for /r %%i in ( *.pdf ) do (
  if exist "..\F1\%%~nxi" ( move /y "..\F1\%%~nxi" ..\F3
  ) else echo File %%~nxi is not a duplicate
)
popD
</code></pre></div>

Phil</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>01 Sep 2018 00:32</strong></div>
				<div class="author">by <strong>Roy</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlistc1e4.html?mode=viewprofile&amp;u=5414">pieh-ejdsch</a> wrote: <a href="viewtopic07c6.php?p=57895#p57895" data-post-id="57895" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">01 Sep 2018 00:02</div></cite>
Hello<br>
A small modification<br>

<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off
pushD %userprofile%\desktop\F2
for /r %%i in ( *.pdf ) do (
  if exist "..\F1\%%~nxi" ( move /y "..\F1\%%~nxi" ..\F3
  ) else echo File %%~nxi is not a duplicate
)
popD
</code></pre></div>

Phil
</div></blockquote>

It works. Thanks for it. <br>
Is there any way to limit the search in %userprofile%\desktop\F2 only to files (.pdf) that have been modified the current date? something like forfiles /d +0</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>01 Sep 2018 05:20</strong></div>
				<div class="author">by <strong>Roy</strong></div>
				<div class="content">I only want to search today's files so i must put a date parameter in below command<br>
<br>
for /r %%i in ( *.pdf )<br>
<br>
something like ( 'date /t' ) or something , <br>
any ideas?</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>01 Sep 2018 17:39</strong></div>
				<div class="author">by <strong>Ed Dyreen</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist757c.html?mode=viewprofile&amp;u=9370">Roy</a> wrote: <a href="viewtopicb8a5.php?p=57896#p57896" data-post-id="57896" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">01 Sep 2018 00:32</div></cite>
<blockquote><div><cite><a href="memberlistc1e4.html?mode=viewprofile&amp;u=5414">pieh-ejdsch</a> wrote: <a href="viewtopic07c6.php?p=57895#p57895" data-post-id="57895" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">01 Sep 2018 00:02</div></cite>
Hello<br>
A small modification<br>

<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off
pushD %userprofile%\desktop\F2
for /r %%i in ( *.pdf ) do (
  if exist "..\F1\%%~nxi" ( move /y "..\F1\%%~nxi" ..\F3
  ) else echo File %%~nxi is not a duplicate
)
popD
</code></pre></div>
assuming DATE format: dayName day/month/year<br>
assuming TIMESTAMP format:<br>
<br>
Phil
</div></blockquote>

It works. Thanks for it. <br>
Is there any way to limit the search in %userprofile%\desktop\F2 only to files (.pdf) that have been modified the current date? something like forfiles /d +0
</div></blockquote>
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off

pushD "%userprofile%\desktop\F2"

for /r %%i in ( *.pdf ) do if exist "..\F1\%%~nxi" (

	for /F "useback tokens=1 delims= " %%? in (

		'%%~ti'

	) do 	for /F "useback tokens=2 delims= " %%D in (
	
		'%DATE%'
		
	) do	if /I "%%~?" EQU "%%~D" (

		move /y "..\F1\%%~nxi" "..\F3"

	) else	echo. File %%~nxi last modified %%~? today %%~D ignoring

) else	echo. File %%~nxi is not a duplicate

popD
</code></pre></div>
assuming DATE format		: dayName <span style="color: #FF0000">day/month/year</span><br>
assuming TIMESTAMP format	: <span style="color: #FF0000">day/month/year</span> hour:sec</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>02 Sep 2018 02:32</strong></div>
				<div class="author">by <strong>Roy</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberliste2cd.html?mode=viewprofile&amp;u=2453">Ed Dyreen</a> wrote: <a href="viewtopica7d5.php?p=57903#p57903" data-post-id="57903" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">01 Sep 2018 17:39</div></cite>
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off

pushD "%userprofile%\desktop\F2"

for /r %%i in ( *.pdf ) do if exist "..\F1\%%~nxi" (

	for /F "useback tokens=1 delims= " %%? in (

		'%%~ti'

	) do 	for /F "useback tokens=2 delims= " %%D in (
	
		'%DATE%'
		
	) do	if /I "%%~?" EQU "%%~D" (

		move /y "..\F1\%%~nxi" "..\F3"

	) else	echo. File %%~nxi last modified %%~? today %%~D ignoring

) else	echo. File %%~nxi is not a duplicate

popD
</code></pre></div>
assuming DATE format		: dayName <span style="color: #FF0000">day/month/year</span><br>
assuming TIMESTAMP format	: <span style="color: #FF0000">day/month/year</span> hour:sec
</div></blockquote>

Thank you for your answer and solution. The problem with time it takes to finish, still persists though. <br>
<br>
Folder F2 has almost 300k pdf files in subdirs (~80GB). We should first filter the files with modified date of today and then start checking if they exist.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>02 Sep 2018 04:42</strong></div>
				<div class="author">by <strong>Ed Dyreen</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist757c.html?mode=viewprofile&amp;u=9370">Roy</a> wrote: <a href="viewtopicd474.php?p=57906#p57906" data-post-id="57906" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">02 Sep 2018 02:32</div></cite>
Thank you for your answer and solution. The problem with time it takes to finish, still persists though. <br>
<br>
Folder F2 has almost 300k pdf files in subdirs (~80GB). We should first filter the files with modified date of today and then start checking if they exist.
</div></blockquote>
If performance is important you made an ill choice using batch. Better use vbscript, jscript or if you have it powershell. You could first filter the files with modified date of today and then start checking if they exist but it will make little difference, batch is slow by nature.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>02 Sep 2018 10:52</strong></div>
				<div class="author">by <strong>Roy</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberliste2cd.html?mode=viewprofile&amp;u=2453">Ed Dyreen</a> wrote: <a href="viewtopicc129.html?p=57907#p57907" data-post-id="57907" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">02 Sep 2018 04:42</div></cite>
<blockquote><div><cite><a href="memberlist757c.html?mode=viewprofile&amp;u=9370">Roy</a> wrote: <a href="viewtopicd474.php?p=57906#p57906" data-post-id="57906" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">02 Sep 2018 02:32</div></cite>
Thank you for your answer and solution. The problem with time it takes to finish, still persists though. <br>
<br>
Folder F2 has almost 300k pdf files in subdirs (~80GB). We should first filter the files with modified date of today and then start checking if they exist.
</div></blockquote>
If performance is important you made an ill choice using batch. Better use vbscript, jscript or if you have it powershell. You could first filter the files with modified date of today and then start checking if they exist but it will make little difference, batch is slow by nature.
</div></blockquote>

I created a script in Powershell, it was easier to build and runs well!<br>
<br>
Code is as follows for anyone else looking for it.<br>

<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>$src = Get-ChildItem -path C:\Users\Roy\Desktop\F1
$pdf = Get-ChildItem -Recurse -Filter *.pdf -path C:\Users\Roy\Desktop\F2 | ? { $_.LastWriteTime -gt (Get-Date).Date}

$matches = (Compare-Object -ReferenceObject $src -DifferenceObject $pdf -ExcludeDifferent -IncludeEqual -PassThru -Property Name)

foreach ($file in $matches)
{
	Move-Item -path C:\Users\Roy\Desktop\F1\$($file.Name) -destination C:\Users\Roy\Desktop\F3 
}</code></pre></div></div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>02 Sep 2018 10:53</strong></div>
				<div class="author">by <strong>pieh-ejdsch</strong></div>
				<div class="content">than use xcopy<br>
<br>
Note: Xcopy /L /U /Y /D:m-t-y <br>
... does not check whether the target file is more up-to-date,<br>
   but outputs the source file name if the specified date is the same as or older than the source file and the target file is also present.<br>
Only: Xcopy /L /U /Y /D<br>
... this will Output all NOT up-to-date target files.
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off
setlocal
set prompt=$g$s

:getCurrent.timestamp
 rem robocopy /L "\.. Timestamp ..\\" .
for /f "eol=D tokens=1-6 delims=/: " %%T in (' robocopy /L  /njh "\|" .^|find "123" ') do (
   rem XcopyToday=MM-DD-YYYY      OR M-D-Y
  set "XcopyToday=%%U-%%V-%%T"
)
 rem END get.currentTimestamp

&gt; "%temp%\todayList" (
  for /d /r "%userprofile%\desktop\F2" %%i in (.) do xcopy /L /U /Y /D:%XcopyToday% "%userprofile%\desktop\F1\*.pdf" "%%~i"
)
if not exist "%userprofile%\desktop\F3" md "%userprofile%\desktop\F3"
pushD "%userprofile%\desktop\F3"
for /f "usebackQ delims=" %%i in ( "%temp%\todayList" ) do if exist "%%~i" move /y "%%~i"
popD
del "%temp%\todayList"
</code></pre></div>

Phil</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Exist in /s &quot;directory&quot;doesn't work</h3>
				<div class="date">Posted: <strong>04 Sep 2018 01:49</strong></div>
				<div class="author">by <strong>Roy</strong></div>
				<div class="content">Thank you very much Phil, works great and it seems it is faster than the one i created in PowerShell.</div>
			</div>
			<hr />
			</div>

	<div id="page-footer" class="page-footer">
		<div class="page-number">All times are <span title="UTC-6">UTC-06:00</span><br />Page <strong>1</strong> of <strong>1</strong></div>
		<div class="copyright">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>
	</div>
</div>

</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8811&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:17 GMT -->
</html>
