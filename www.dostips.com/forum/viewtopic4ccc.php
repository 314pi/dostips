<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8822&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex" />

<title>DosTips.com &bull; Center Window and Move Window (yet more Powershell hybrids)</title>

<link href="styles/AllanStyle-SUBSILVER/theme/print.css" rel="stylesheet">
</head>
<body id="phpbb">
<div id="wrap" class="wrap">
	<a id="top" class="top-anchor" accesskey="t"></a>

	<div id="page-header">
		<h1>DosTips.com</h1>
		<p>A Forum all about DOS Batch<br /><a href="index-2.html">https://www.dostips.com/forum/</a></p>

		<h2>Center Window and Move Window (yet more Powershell hybrids)</h2>
		<p><a href="viewtopicd8f0.html?f=3&amp;t=8822">https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8822</a></p>
	</div>

	<div id="page-body" class="page-body">
		<div class="page-number">Page <strong>1</strong> of <strong>1</strong></div>
					<div class="post">
				<h3>Center Window and Move Window (yet more Powershell hybrids)</h3>
				<div class="date">Posted: <strong>06 Sep 2018 13:44</strong></div>
				<div class="author">by <strong>aGerman</strong></div>
				<div class="content">Center Window:
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off &amp;setlocal DisableDelayedExpansion
mode con lines=20 cols=50
 
(set \n=^^^
%= This creates an escaped Line Feed - DO NOT ALTER =%
)
set center=for %%i in (1 2) do if %%i==2 (%\n%
%=% if defined arg set arg=!arg:/?=help!%\n%
%=% for /f %%j in ("!arg! middle") do (%\n%
%=====% powershell -NoProfile -ExecutionPolicy Bypass -Command ^"try {^
%=========% Add-Type -TypeDefinition '^
%=========% using System;^
%=========% using System.Runtime.InteropServices;^
%=========% public class C {^
%=============% [StructLayout(LayoutKind.Sequential)]^
%=============% public struct POINT {^
%=================% public int x;^
%=================% public int y;^
%=============% }^
%=============% [StructLayout(LayoutKind.Sequential)]^
%=============% public struct RECT {^
%=================% public int Left;^
%=================% public int Top;^
%=================% public int Right;^
%=================% public int Bottom;^
%=============% }^
%=============% [StructLayout(LayoutKind.Sequential)]^
%=============% public struct WINDOWPLACEMENT {^
%=================% public uint length;^
%=================% public uint flags;^
%=================% public uint showCmd;^
%=================% public POINT ptMinPosition;^
%=================% public POINT ptMaxPosition;^
%=================% public RECT rcNormalPosition;^
%=============% }^
%=============% [DllImport(\^"user32.dll\^")]^
%=============% public static extern int GetSystemMetrics(int nIndex);^
%=============% [DllImport(\^"kernel32.dll\^")]^
%=============% public static extern IntPtr GetConsoleWindow();^
%=============% [DllImport(\^"user32.dll\^")]^
%=============% public static extern int GetWindowPlacement(IntPtr hWnd, ref WINDOWPLACEMENT lpwndpl);^
%=============% [DllImport(\^"user32.dll\^")]^
%=============% public static extern int SetWindowPlacement(IntPtr hWnd, ref WINDOWPLACEMENT lpwndpl);^
%=============% public void center_middle() {^
%=================% int screen_width = GetSystemMetrics(16), screen_height = GetSystemMetrics(17);^
%=================% var wpl = new WINDOWPLACEMENT() {length = (uint)Marshal.SizeOf(typeof(WINDOWPLACEMENT))};^
%=================% GetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=================% int top = screen_height / 2 - (wpl.rcNormalPosition.Bottom - wpl.rcNormalPosition.Top) / 2,^
%=====================% left = screen_width / 2 - (wpl.rcNormalPosition.Right - wpl.rcNormalPosition.Left) / 2,^
%=====================% bottom = screen_height / 2 + (wpl.rcNormalPosition.Bottom - wpl.rcNormalPosition.Top) / 2,^
%=====================% right = screen_width / 2 + (wpl.rcNormalPosition.Right - wpl.rcNormalPosition.Left) / 2;^
%=================% wpl.flags = 0;^
%=================% wpl.showCmd = 1;^
%=================% wpl.rcNormalPosition.Left = left;^
%=================% wpl.rcNormalPosition.Top = top;^
%=================% wpl.rcNormalPosition.Right = right;^
%=================% wpl.rcNormalPosition.Bottom = bottom;^
%=================% SetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=============% }^
%=============% public void center_left() {^
%=================% int screen_height = GetSystemMetrics(17);^
%=================% var wpl = new WINDOWPLACEMENT() {length = (uint)Marshal.SizeOf(typeof(WINDOWPLACEMENT))};^
%=================% GetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=================% int top = screen_height / 2 - (wpl.rcNormalPosition.Bottom - wpl.rcNormalPosition.Top) / 2,^
%=====================% right = wpl.rcNormalPosition.Right - wpl.rcNormalPosition.Left,^
%=====================% bottom = screen_height / 2 + (wpl.rcNormalPosition.Bottom - wpl.rcNormalPosition.Top) / 2;^
%=================% wpl.flags = 0;^
%=================% wpl.showCmd = 1;^
%=================% wpl.rcNormalPosition.Left = 0;^
%=================% wpl.rcNormalPosition.Top = top;^
%=================% wpl.rcNormalPosition.Right = right;^
%=================% wpl.rcNormalPosition.Bottom = bottom;^
%=================% SetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=============% }^
%=============% public void center_top() {^
%=================% int screen_width = GetSystemMetrics(16);^
%=================% var wpl = new WINDOWPLACEMENT() {length = (uint)Marshal.SizeOf(typeof(WINDOWPLACEMENT))};^
%=================% GetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=================% int left = screen_width / 2 - (wpl.rcNormalPosition.Right - wpl.rcNormalPosition.Left) / 2,^
%=====================% right = screen_width / 2 + (wpl.rcNormalPosition.Right - wpl.rcNormalPosition.Left) / 2,^
%=====================% bottom = wpl.rcNormalPosition.Bottom - wpl.rcNormalPosition.Top;^
%=================% wpl.flags = 0;^
%=================% wpl.showCmd = 1;^
%=================% wpl.rcNormalPosition.Left = left;^
%=================% wpl.rcNormalPosition.Top = 0;^
%=================% wpl.rcNormalPosition.Right = right;^
%=================% wpl.rcNormalPosition.Bottom = bottom;^
%=================% SetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=============% }^
%=============% public void center_right() {^
%=================% int screen_width = GetSystemMetrics(16), screen_height = GetSystemMetrics(17);^
%=================% var wpl = new WINDOWPLACEMENT() {length = (uint)Marshal.SizeOf(typeof(WINDOWPLACEMENT))};^
%=================% GetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=================% int top = screen_height / 2 - (wpl.rcNormalPosition.Bottom - wpl.rcNormalPosition.Top) / 2,^
%=====================% left = screen_width - (wpl.rcNormalPosition.Right - wpl.rcNormalPosition.Left),^
%=====================% bottom = screen_height / 2 + (wpl.rcNormalPosition.Bottom - wpl.rcNormalPosition.Top) / 2;^
%=================% wpl.flags = 0;^
%=================% wpl.showCmd = 1;^
%=================% wpl.rcNormalPosition.Left = left;^
%=================% wpl.rcNormalPosition.Top = top;^
%=================% wpl.rcNormalPosition.Right = screen_width;^
%=================% wpl.rcNormalPosition.Bottom = bottom;^
%=================% SetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=============% }^
%=============% public void center_bottom() {^
%=================% int screen_width = GetSystemMetrics(16), screen_height = GetSystemMetrics(17);^
%=================% var wpl = new WINDOWPLACEMENT() {length = (uint)Marshal.SizeOf(typeof(WINDOWPLACEMENT))};^
%=================% GetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=================% int top = screen_height - (wpl.rcNormalPosition.Bottom - wpl.rcNormalPosition.Top),^
%=====================% left = screen_width / 2 - (wpl.rcNormalPosition.Right - wpl.rcNormalPosition.Left) / 2,^
%=====================% right = screen_width / 2 + (wpl.rcNormalPosition.Right - wpl.rcNormalPosition.Left) / 2;^
%=================% wpl.flags = 0;^
%=================% wpl.showCmd = 1;^
%=================% wpl.rcNormalPosition.Left = left;^
%=================% wpl.rcNormalPosition.Top = top;^
%=================% wpl.rcNormalPosition.Right = right;^
%=================% wpl.rcNormalPosition.Bottom = screen_height;^
%=================% SetWindowPlacement(GetConsoleWindow(), ref wpl);^
%=============% }^
%=========% }';^
%=========% (New-Object C).center_%%~j();^
%=========% exit 0;^
%=====% }^
%=====% catch {^
%========% $hlp = \^" Usage:`r`n%%center%% [middle^^^|left^^^|top^^^|right^^^|bottom^^^|help]\^";^
%========% if ('%%~j' -eq 'help') {^
%=============% \^"Center The Current Console Window`r`n`r`n\^" + $hlp;^
%=============% exit 0;^
%=========% } else {^
%============% [Console]::Error.WriteLine(\^"Syntax Error`r`n`r`n\^" + $hlp);^
%============% exit 1;^
%========% }^
%=====% }^"%\n%
%=% )%\n%
%=% endlocal%\n%
) else setlocal EnableDelayedExpansion ^&amp;set arg=

%center% help

for /l %%i in () do (
  %center%
  %center% left
  %center% right
  %center% top
  %center% bottom
)
</code></pre></div>
Press [Ctrl]+[C] if you can't catch the red X <img class="smilies" src="images/smilies/icon_lol.gif" width="15" height="15" alt=":lol:" title="Laughing"> <br>
<br>
~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>
Move Window:
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off &amp;setlocal DisableDelayedExpansion

(set \n=^^^
%= This creates an escaped Line Feed - DO NOT ALTER =%
)
set move_window=for %%i in (1 2) do if %%i==2 (%\n%
%=% for /f "tokens=1*" %%j in ("!arg!") do (%\n%
%=====% powershell.exe -NoProfile -ExecutionPolicy Bypass -Command ^"try{$c=Add-Type -Name WinAPI -PassThru -MemberDefinition '^
%=====% [DllImport(\"user32.dll\")] public static extern int SetWindowPos(IntPtr hWnd, IntPtr hWndInsertAfter, int X, int Y, int cx, int cy, uint uFlags);^
%=====% [DllImport(\"kernel32.dll\")] public static extern IntPtr GetConsoleWindow();';^
%=====% $x=0; $y=0;^
%=====% if (([Int32]::TryParse(\"%%~j\", [ref]$x) -eq $false) -or ([Int32]::TryParse(\"%%~k\", [ref]$y) -eq $false)){^
%=========% [Console]::Error.WriteLine(\"Syntax Error`r`n Usage:`r`n%%move_window%% X Y`r`n   X  left side of the window`r`n   Y  top of the window\");^
%=========% exit 1;^
%=====% }^
%=====% exit [int]($c::SetWindowPos($c::GetConsoleWindow(), [IntPtr]::Zero, $x, $y, 0, 0, 5) -eq 0);}catch{exit 1;}^"%\n%
%=% )%\n%
%=% endlocal%\n%
) else setlocal EnableDelayedExpansion ^&amp;set arg=

%move_window% 100 50
echo %errorlevel%
pause
</code></pre></div>

Steffen</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Center Window (yet another Powershell hybrid)</h3>
				<div class="date">Posted: <strong>06 Sep 2018 14:40</strong></div>
				<div class="author">by <strong>IcarusLives</strong></div>
				<div class="content">Ooooo I like this release! Very nice! Is it possible to place in more dynamic positions, or just the 5?</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Center Window (yet another Powershell hybrid)</h3>
				<div class="date">Posted: <strong>06 Sep 2018 14:59</strong></div>
				<div class="author">by <strong>aGerman</strong></div>
				<div class="content">Since the macro is called "center" I can't think of any further locations that deserve this name <img class="smilies" src="images/smilies/icon_wink.gif" width="15" height="15" alt=":wink:" title="Wink">  Of course it would be possible to move the window to any position you want but in that case "center" would be rather misleading. If you want me to write another script to move the window to certain x,y coordinates I would be able to modify the code accordingly.<br>
<br>
Steffen</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Center Window (yet another Powershell hybrid)</h3>
				<div class="date">Posted: <strong>07 Sep 2018 07:08</strong></div>
				<div class="author">by <strong>IcarusLives</strong></div>
				<div class="content">Haha, I guess you've got a point! No, this script is great! Thank you very much for this release.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Center Window and Move Window (yet more Powershell hybrids)</h3>
				<div class="date">Posted: <strong>07 Sep 2018 14:15</strong></div>
				<div class="author">by <strong>aGerman</strong></div>
				<div class="content">I updated the initial post with an additional move_window macro.<br>
<br>
Steffen</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Center Window and Move Window (yet more Powershell hybrids)</h3>
				<div class="date">Posted: <strong>07 Sep 2018 14:20</strong></div>
				<div class="author">by <strong>IcarusLives</strong></div>
				<div class="content">I love the move window macro! This is great, thank you very much for this.<br>
<br>
I also respect how short and concise it is.<br>
<br>
Both working Win 10 64bit</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: Center Window and Move Window (yet more Powershell hybrids)</h3>
				<div class="date">Posted: <strong>07 Sep 2018 14:25</strong></div>
				<div class="author">by <strong>aGerman</strong></div>
				<div class="content">Thanks for your feedback, IcarusLives <img class="smilies" src="images/smilies/icon_smile.gif" width="15" height="15" alt=":)" title="Smile"> Much appreciated.<br>
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

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8822&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:26 GMT -->
</html>
