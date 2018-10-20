<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8820&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex" />

<title>DosTips.com &bull; Refresh Desktop (Powershell hybrid)</title>

<link href="styles/AllanStyle-SUBSILVER/theme/print.css" rel="stylesheet">
</head>
<body id="phpbb">
<div id="wrap" class="wrap">
	<a id="top" class="top-anchor" accesskey="t"></a>

	<div id="page-header">
		<h1>DosTips.com</h1>
		<p>A Forum all about DOS Batch<br /><a href="index-2.html">https://www.dostips.com/forum/</a></p>

		<h2>Refresh Desktop (Powershell hybrid)</h2>
		<p><a href="viewtopic908b.html?f=3&amp;t=8820">https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8820</a></p>
	</div>

	<div id="page-body" class="page-body">
		<div class="page-number">Page <strong>1</strong> of <strong>1</strong></div>
					<div class="post">
				<h3>Refresh Desktop (Powershell hybrid)</h3>
				<div class="date">Posted: <strong>05 Sep 2018 10:44</strong></div>
				<div class="author">by <strong>aGerman</strong></div>
				<div class="content">In that thread the question came up how to refresh the desktop programmatically.<br>
<a href="viewtopic21cb.html?f=3&amp;t=8805" class="postlink">viewtopic.php?f=3&amp;t=8805</a><br>
Using platform invokation you can use Windows API functions in a little Powershell snippet. A lot of different API calls can be found in the internet to simulate the behavior of pressing F5 but none of them do all of the stuff that F5 invokes. Only one of the solutions that I found does direcly simulate F5 by sending the desired accelerator ID.
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off &amp;setlocal

set refresh_desktop=powershell.exe -NoProfile -ExecutionPolicy Bypass -Command ^"try{$c=Add-Type -Name WinAPI -PassThru -MemberDefinition '^
[DllImport(\"user32.dll\")] public static extern IntPtr GetShellWindow();^
[DllImport(\"user32.dll\")] public static extern int SendMessageW(IntPtr hWnd, uint Msg, UIntPtr wParam, IntPtr lParam);';^
$dsktp=$c::GetShellWindow(); $WM_COMMAND=273; $accel_F5=New-Object UIntPtr(41504); $nullptr=[IntPtr]::Zero;^
exit [int](($dsktp -eq $nullptr) -or ($c::SendMessageW($dsktp, $WM_COMMAND, $accel_F5, $nullptr) -ne 0));}catch{exit 1;}^"

:: Send command message 41504 to the Shell desktop window and call its window procedure. Number 41504 is the reverse-engineered accelerator
:: ID of the F5 virtual key in explorer windows. Thus, executing this macro simulates the same behavior as if you would have pressed F5 to
:: refresh the desktop. The advantage is that the desktop doesn't need to have the keyboard focus to make it work.
%refresh_desktop%
echo %errorlevel%
pause
</code></pre></div>

I already tested on Win10 32 and 64 bit. For a couple of days I don't have any access to older versions anymore. Our IT dept. decided to begin with upgrading all of the company's computers because the support for Win7 will expire in January 2020.<br>
I'd really like you to test the code on other versions and give feedback because I don't know if the accelerator ID ever changed.<br>
<br>
Steffen</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Refresh Desktop (Powershell hybrid)</h3>
				<div class="date">Posted: <strong>05 Sep 2018 13:42</strong></div>
				<div class="author">by <strong>ShadowThief</strong></div>
				<div class="content">Working on my XP Pro virtual machine (once I installed the Windows Management Framework Core package), as well as Windows 7 32-bit and 64-bit.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Refresh Desktop (Powershell hybrid)</h3>
				<div class="date">Posted: <strong>05 Sep 2018 14:24</strong></div>
				<div class="author">by <strong>aGerman</strong></div>
				<div class="content">Thank you for testing ShadowThief!<br>
<br>
Now I suspect it will work from XP onwards and I'm fully aware that it doesn't make any sense to try on even older versions. As you said Powershell did not belong to XP. It was introduced in 2006 and became a default installation in Win7. However once Powershell was installed the code will work and your reply answered my question and eased my doubt <img class="smilies" src="images/smilies/icon_biggrin.gif" width="15" height="15" alt=":D" title="Very Happy"><br>
FWIW I'm also aware that the performance is rather bad. Powershell.exe is an external process that the OS has to schedule before it gets loaded. Furthermore platform invokations in Powershell require a compiled temporary DLL (you'll find it for a few milliseconds in the %temp% directory) which wastes even more time. But I didn't find any better solution yet.<br>
<br>
Steffen</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Refresh Desktop (Powershell hybrid)</h3>
				<div class="date">Posted: <strong>05 Sep 2018 18:17</strong></div>
				<div class="author">by <strong>Squashman</strong></div>
				<div class="content">I am not a .net programmer but didn't someone show an example of creating and compiling quick and dirty .net code. Not sure if that would be faster.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Refresh Desktop (Powershell hybrid)</h3>
				<div class="date">Posted: <strong>05 Sep 2018 22:36</strong></div>
				<div class="author">by <strong>ShadowThief</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist2675.html?mode=viewprofile&amp;u=2988">Squashman</a> wrote: <a href="viewtopic90fb.php?p=57950#p57950" data-post-id="57950" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">05 Sep 2018 18:17</div></cite>
I am not a .net programmer but didn't someone show an example of creating and compiling quick and dirty .net code. Not sure if that would be faster.
</div></blockquote>

You mean <a href="viewtopic867c.php?t=4762#p27555" class="postlink">viewtopic.php?t=4762#p27555</a>?</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Refresh Desktop (Powershell hybrid)</h3>
				<div class="date">Posted: <strong>06 Sep 2018 07:01</strong></div>
				<div class="author">by <strong>Squashman</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056">ShadowThief</a> wrote: <a href="viewtopicbebc.php?p=57953#p57953" data-post-id="57953" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">05 Sep 2018 22:36</div></cite>
<blockquote><div><cite><a href="memberlist2675.html?mode=viewprofile&amp;u=2988">Squashman</a> wrote: <a href="viewtopic90fb.php?p=57950#p57950" data-post-id="57950" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">05 Sep 2018 18:17</div></cite>
I am not a .net programmer but didn't someone show an example of creating and compiling quick and dirty .net code. Not sure if that would be faster.
</div></blockquote>

You mean <a href="viewtopic867c.php?t=4762#p27555" class="postlink">viewtopic.php?t=4762#p27555</a>?
</div></blockquote>
This one <a href="viewtopic07b9.php?t=5260" class="postlink">viewtopic.php?t=5260</a></div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Refresh Desktop (Powershell hybrid)</h3>
				<div class="date">Posted: <strong>06 Sep 2018 10:34</strong></div>
				<div class="author">by <strong>aGerman</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist2675.html?mode=viewprofile&amp;u=2988">Squashman</a> wrote: <a href="viewtopic90fb.php?p=57950#p57950" data-post-id="57950" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">05 Sep 2018 18:17</div></cite>Not sure if that would be faster.</div></blockquote>I'm pretty sure it would be faster but only if you reuse the compiled utility  <img class="smilies" src="images/smilies/icon_wink.gif" width="15" height="15" alt=":wink:" title="Wink"><br>
I just tried to keep it a scripting solution.<br>
<br>
Steffen</div>
			</div>
			<hr />
			</div>

	<div id="page-footer" class="page-footer">
		<div class="page-number">All times are <span title="UTC-6">UTC-06:00</span><br />Page <strong>1</strong> of <strong>1</strong></div>
		<div class="copyright">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>
	</div>
</div>

</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8820&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:37 GMT -->
</html>
