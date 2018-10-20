<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?t=8822 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Center Window and Move Window (yet more Powershell hybrids) - DosTips.com</title>


	<link rel="canonical" href="viewtopic4bca.php?t=8822">

<!--
	phpBB style name: Allan Style - SUBSILVER
	Based on style:   prosilver (this is the default phpBB3 style)
	Based on style:   subsilver2 (this is the default phpBB3 style)
	Original author:  Tom Beddard ( http://www.subBlue.com/ )
	Modified by:  Allan ( http://x-tk.ru/ )
-->

<link href="assets/css/font-awesome.mind772.css?assets_version=34" rel="stylesheet">
<link href="styles/AllanStyle-SUBSILVER/theme/stylesheetd772.css?assets_version=34" rel="stylesheet">
<link href="styles/AllanStyle-SUBSILVER/theme/en/stylesheetd772.css?assets_version=34" rel="stylesheet">




<!--[if lte IE 9]>
	<link href="./styles/AllanStyle-SUBSILVER/theme/tweaks.css?assets_version=34" rel="stylesheet">
<![endif]-->




<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-280191-1', 'auto');
	ga('send', 'pageview');
</script>

</head>
<body id="phpbb" class="nojs notouch section-viewtopic ltr ">

<div id="header-subsilver">
	<a id="top" class="top-anchor" accesskey="t"></a>
		<div class="headerbar" role="banner">
					<div class="inner">

			<div id="site-description" class="site-description">
				<a id="logo" class="logo" href="../index.html" title="DosTips.com"><span class="site_logo"></span></a>
				<h1>DosTips.com</h1>
				<p>A Forum all about DOS Batch</p>
				<p class="skiplink"><a href="#start_here">Skip to content</a></p>
			</div>

									<div id="search-box" class="search-box search-header" role="search">
				<form action="https://www.dostips.com/forum/search.php" method="get" id="search">
				<fieldset>
					<input name="keywords" id="keywords" type="search" maxlength="128" title="Search for keywords" class="inputbox search tiny" size="20" value="" placeholder="Search…" />
					<button class="button button-search" type="submit" title="Search">
						<i class="icon fa-search fa-fw" aria-hidden="true"></i><span class="sr-only">Search</span>
					</button>
					<a href="search.html" class="button button-search-end" title="Advanced search">
						<i class="icon fa-cog fa-fw" aria-hidden="true"></i><span class="sr-only">Advanced search</span>
					</a>
					
				</fieldset>
				</form>
			</div>
						
			</div>
					</div>
</div>


<div id="wrap" class="wrap">
	<div id="page-header">
				<div class="navbar-top" role="navigation">
	<div class="inner">

	<ul id="nav-main" class="nav-main linklist" role="menubar">

		<li id="quick-links" class="quick-links dropdown-container responsive-menu" data-skip-responsive="true">
			<a href="#" class="dropdown-trigger">
				<i class="icon fa-bars fa-fw" aria-hidden="true"></i><span>Quick links</span>
			</a>
			<div class="dropdown">
				<div class="pointer"><div class="pointer-inner"></div></div>
				<ul class="dropdown-contents" role="menu">
					
											<li class="separator"></li>
																									<li>
								<a href="search33a7.html?search_id=unanswered" role="menuitem">
									<i class="icon fa-file-o fa-fw icon-gray" aria-hidden="true"></i><span>Unanswered topics</span>
								</a>
							</li>
							<li>
								<a href="search526f.html?search_id=active_topics" role="menuitem">
									<i class="icon fa-file-o fa-fw icon-blue" aria-hidden="true"></i><span>Active topics</span>
								</a>
							</li>
							<li class="separator"></li>
							<li>
								<a href="search.html" role="menuitem">
									<i class="icon fa-search fa-fw" aria-hidden="true"></i><span>Search</span>
								</a>
							</li>
					
											<li class="separator"></li>
																			<li>
								<a href="memberlist4bfd.html?mode=team" role="menuitem">
									<i class="icon fa-shield fa-fw" aria-hidden="true"></i><span>The team</span>
								</a>
							</li>
																<li class="separator"></li>

									</ul>
			</div>
		</li>

				<li data-skip-responsive="true">
			<a href="app.php/help/faq.html" rel="help" title="Frequently Asked Questions" role="menuitem">
				<i class="icon fa-question-circle fa-fw" aria-hidden="true"></i><span>FAQ</span>
			</a>
		</li>
						
			<li class="rightside"  data-skip-responsive="true">
			<a href="ucp26c3.html?mode=login" title="Login" accesskey="x" role="menuitem">
				<i class="icon fa-power-off fa-fw" aria-hidden="true"></i><span>Login</span>
			</a>
		</li>
					<li class="rightside" data-skip-responsive="true">
				<a href="ucp8319.html?mode=register" role="menuitem">
					<i class="icon fa-pencil-square-o  fa-fw" aria-hidden="true"></i><span>Register</span>
				</a>
			</li>
						</ul>

	</div>
</div>

<div class="navbar" role="navigation">
	<div class="inner">

	<ul id="nav-breadcrumbs" class="nav-breadcrumbs linklist navlinks" role="menubar">
						<li class="breadcrumbs">
							<span class="crumb"  itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="../index.html" itemprop="url" data-navbar-reference="home"><i class="icon fa-home fa-fw" aria-hidden="true"></i><span itemprop="title">DosTips.com</span></a></span>
										<span class="crumb"  itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="index.html" itemprop="url" accesskey="h" data-navbar-reference="index"><span itemprop="title">Board index</span></a></span>

											<span class="crumb"  itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" data-forum-id="4"><a href="viewforum31e6.html?f=4" itemprop="url"><span itemprop="title">DosTips - Dos Batch</span></a></span>
															<span class="crumb"  itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" data-forum-id="3"><a href="viewforum4d6b.html?f=3" itemprop="url"><span itemprop="title">DOS Batch Forum</span></a></span>
												</li>
		
					<li class="rightside responsive-search">
				<a href="search.html" title="View the advanced search options" role="menuitem">
					<i class="icon fa-search fa-fw" aria-hidden="true"></i><span class="sr-only">Search</span>
				</a>
			</li>
			</ul>

	</div>
</div>

<div class="navbar-top-link">
	<div class="inner">
		<ul>
			<li class="navbar-top-link-left"><a href="search33a7.html?search_id=unanswered">Unanswered topics</a></li>
			<li class="navbar-top-link-left"><a href="search526f.html?search_id=active_topics">Active topics</a></li>

											</ul>
	</div>
</div>
	</div>

	
	<a id="start_here" class="anchor"></a>
	<div id="page-body" class="page-body" role="main">
		
		
<h2 class="topic-title"><a href="viewtopicd8f0.html?f=3&amp;t=8822">Center Window and Move Window (yet more Powershell hybrids)</a></h2>
<!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->
<div style="display: none !important;">Discussion forum for all Windows batch related topics.<br /></div>
<p>
	<strong>Moderator:</strong> <a href="memberlista6a8.html?mode=viewprofile&amp;u=5" class="username">DosItHelp</a>
</p>


<div class="action-bar bar-top">
	
			<a href="posting2135.php?mode=reply&amp;f=3&amp;t=8822" class="button" title="Post a reply">
							<span>Post Reply</span> <i class="icon fa-reply fa-fw" aria-hidden="true"></i>
					</a>
	
			<div class="dropdown-container dropdown-button-control topic-tools">
		<span title="Topic tools" class="button button-secondary dropdown-trigger dropdown-select">
			<i class="icon fa-wrench fa-fw" aria-hidden="true"></i>
			<span class="caret"><i class="icon fa-sort-down fa-fw" aria-hidden="true"></i></span>
		</span>
		<div class="dropdown">
			<div class="pointer"><div class="pointer-inner"></div></div>
			<ul class="dropdown-contents">
																												<li>
					<a href="viewtopic4ccc.php?f=3&amp;t=8822&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>
	
			<div class="search-box" role="search">
			<form method="get" id="topic-search" action="https://www.dostips.com/forum/search.php">
			<fieldset>
				<input class="inputbox search tiny"  type="search" name="keywords" id="search_keywords" size="20" placeholder="Search this topic…" />
				<button class="button button-search" type="submit" title="Search">
					<i class="icon fa-search fa-fw" aria-hidden="true"></i><span class="sr-only">Search</span>
				</button>
				<a href="search.html" class="button button-search-end" title="Advanced search">
					<i class="icon fa-cog fa-fw" aria-hidden="true"></i><span class="sr-only">Advanced search</span>
				</a>
				<input type="hidden" name="t" value="8822" />
<input type="hidden" name="sf" value="msgonly" />

			</fieldset>
			</form>
		</div>
	
			<div class="pagination">
			7 posts
							&bull; Page <strong>1</strong> of <strong>1</strong>
					</div>
		</div>




<div id="subsilver-nav-topic">
	<div class="inner"><div class="post has-profile">
		<div class="leftsided postbody subsilver-topic-title">Message</div>
		<div class="leftsided postprofile subsilver-topic-author">Author</div>
	</div></div>
</div>

			<div id="p57958" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57958">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search661c.html?author_id=1265&amp;sr=posts">3386</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 22 Jan 2010 18:01</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57958">

						<h3 class="first"><a href="#p57958">Center Window and Move Window (yet more Powershell hybrids)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting6932.php?mode=quote&amp;f=3&amp;p=57958" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic1151.php?p=57958#p57958" onclick="prompt('Message #1',this.href); return false;">#1</a></span> 
									<a class="unread" href="viewtopic1151.php?p=57958#p57958" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a></strong> &raquo; </span>06 Sep 2018 13:44
			</p>
			
			
			
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

		</div>

				<div class="back2top">
						<a href="#top" class="top" title="Top">
				<i class="icon fa-chevron-circle-up fa-fw icon-gray" aria-hidden="true"></i>
				<span class="sr-only">Top</span>
			</a>
					</div>
		
		</div>
	</div>

	<hr class="divider" />
				<div id="p57959" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57959">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist11f0.html?mode=viewprofile&amp;u=8073" class="username">IcarusLives</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search393f.php?author_id=8073&amp;sr=posts">92</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 17 Jan 2016 23:55</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57959">

						<h3 ><a href="#p57959">Re: Center Window (yet another Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingddf2.php?mode=quote&amp;f=3&amp;p=57959" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopiced4c.php?p=57959#p57959" onclick="prompt('Message #2',this.href); return false;">#2</a></span> 
									<a class="unread" href="viewtopiced4c.php?p=57959#p57959" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist11f0.html?mode=viewprofile&amp;u=8073" class="username">IcarusLives</a></strong> &raquo; </span>06 Sep 2018 14:40
			</p>
			
			
			
			<div class="content">Ooooo I like this release! Very nice! Is it possible to place in more dynamic positions, or just the 5?</div>

			
									
									
						</div>

		</div>

				<div class="back2top">
						<a href="#top" class="top" title="Top">
				<i class="icon fa-chevron-circle-up fa-fw icon-gray" aria-hidden="true"></i>
				<span class="sr-only">Top</span>
			</a>
					</div>
		
		</div>
	</div>

	<hr class="divider" />
				<div id="p57960" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57960">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search661c.html?author_id=1265&amp;sr=posts">3386</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 22 Jan 2010 18:01</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57960">

						<h3 ><a href="#p57960">Re: Center Window (yet another Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingb7c0.php?mode=quote&amp;f=3&amp;p=57960" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic2d22.php?p=57960#p57960" onclick="prompt('Message #3',this.href); return false;">#3</a></span> 
									<a class="unread" href="viewtopic2d22.php?p=57960#p57960" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a></strong> &raquo; </span>06 Sep 2018 14:59
			</p>
			
			
			
			<div class="content">Since the macro is called "center" I can't think of any further locations that deserve this name <img class="smilies" src="images/smilies/icon_wink.gif" width="15" height="15" alt=":wink:" title="Wink">  Of course it would be possible to move the window to any position you want but in that case "center" would be rather misleading. If you want me to write another script to move the window to certain x,y coordinates I would be able to modify the code accordingly.<br>
<br>
Steffen</div>

			
									
									
						</div>

		</div>

				<div class="back2top">
						<a href="#top" class="top" title="Top">
				<i class="icon fa-chevron-circle-up fa-fw icon-gray" aria-hidden="true"></i>
				<span class="sr-only">Top</span>
			</a>
					</div>
		
		</div>
	</div>

	<hr class="divider" />
				<div id="p57966" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57966">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist11f0.html?mode=viewprofile&amp;u=8073" class="username">IcarusLives</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search393f.php?author_id=8073&amp;sr=posts">92</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 17 Jan 2016 23:55</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57966">

						<h3 ><a href="#p57966">Re: Center Window (yet another Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingf18c.php?mode=quote&amp;f=3&amp;p=57966" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic5cf9.php?p=57966#p57966" onclick="prompt('Message #4',this.href); return false;">#4</a></span> 
									<a class="unread" href="viewtopic5cf9.php?p=57966#p57966" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist11f0.html?mode=viewprofile&amp;u=8073" class="username">IcarusLives</a></strong> &raquo; </span>07 Sep 2018 07:08
			</p>
			
			
			
			<div class="content">Haha, I guess you've got a point! No, this script is great! Thank you very much for this release.</div>

			
									
									
						</div>

		</div>

				<div class="back2top">
						<a href="#top" class="top" title="Top">
				<i class="icon fa-chevron-circle-up fa-fw icon-gray" aria-hidden="true"></i>
				<span class="sr-only">Top</span>
			</a>
					</div>
		
		</div>
	</div>

	<hr class="divider" />
				<div id="p57970" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57970">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search661c.html?author_id=1265&amp;sr=posts">3386</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 22 Jan 2010 18:01</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57970">

						<h3 ><a href="#p57970">Re: Center Window and Move Window (yet more Powershell hybrids)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting03d2.php?mode=quote&amp;f=3&amp;p=57970" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicbb79.php?p=57970#p57970" onclick="prompt('Message #5',this.href); return false;">#5</a></span> 
									<a class="unread" href="viewtopicbb79.php?p=57970#p57970" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a></strong> &raquo; </span>07 Sep 2018 14:15
			</p>
			
			
			
			<div class="content">I updated the initial post with an additional move_window macro.<br>
<br>
Steffen</div>

			
									
									
						</div>

		</div>

				<div class="back2top">
						<a href="#top" class="top" title="Top">
				<i class="icon fa-chevron-circle-up fa-fw icon-gray" aria-hidden="true"></i>
				<span class="sr-only">Top</span>
			</a>
					</div>
		
		</div>
	</div>

	<hr class="divider" />
				<div id="p57971" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57971">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist11f0.html?mode=viewprofile&amp;u=8073" class="username">IcarusLives</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search393f.php?author_id=8073&amp;sr=posts">92</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 17 Jan 2016 23:55</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57971">

						<h3 ><a href="#p57971">Re: Center Window and Move Window (yet more Powershell hybrids)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingd16e.php?mode=quote&amp;f=3&amp;p=57971" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic4a57-2.php?p=57971#p57971" onclick="prompt('Message #6',this.href); return false;">#6</a></span> 
									<a class="unread" href="viewtopic4a57-2.php?p=57971#p57971" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist11f0.html?mode=viewprofile&amp;u=8073" class="username">IcarusLives</a></strong> &raquo; </span>07 Sep 2018 14:20
			</p>
			
			
			
			<div class="content">I love the move window macro! This is great, thank you very much for this.<br>
<br>
I also respect how short and concise it is.<br>
<br>
Both working Win 10 64bit</div>

			
									
									
						</div>

		</div>

				<div class="back2top">
						<a href="#top" class="top" title="Top">
				<i class="icon fa-chevron-circle-up fa-fw icon-gray" aria-hidden="true"></i>
				<span class="sr-only">Top</span>
			</a>
					</div>
		
		</div>
	</div>

	<hr class="divider" />
				<div id="p57972" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57972">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search661c.html?author_id=1265&amp;sr=posts">3386</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 22 Jan 2010 18:01</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57972">

						<h3 ><a href="#p57972">Re: Center Window and Move Window (yet more Powershell hybrids)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingacd1.php?mode=quote&amp;f=3&amp;p=57972" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic031d.php?p=57972#p57972" onclick="prompt('Message #7',this.href); return false;">#7</a></span> 
									<a class="unread" href="viewtopic031d.php?p=57972#p57972" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a></strong> &raquo; </span>07 Sep 2018 14:25
			</p>
			
			
			
			<div class="content">Thanks for your feedback, IcarusLives <img class="smilies" src="images/smilies/icon_smile.gif" width="15" height="15" alt=":)" title="Smile"> Much appreciated.<br>
<br>
Steffen</div>

			
									
									
						</div>

		</div>

				<div class="back2top">
						<a href="#top" class="top" title="Top">
				<i class="icon fa-chevron-circle-up fa-fw icon-gray" aria-hidden="true"></i>
				<span class="sr-only">Top</span>
			</a>
					</div>
		
		</div>
	</div>

	<hr class="divider" />
	

	<div class="action-bar bar-bottom">
	
			<a href="posting2135.php?mode=reply&amp;f=3&amp;t=8822" class="button" title="Post a reply">
							<span>Post Reply</span> <i class="icon fa-reply fa-fw" aria-hidden="true"></i>
					</a>
		
		<div class="dropdown-container dropdown-button-control topic-tools">
		<span title="Topic tools" class="button button-secondary dropdown-trigger dropdown-select">
			<i class="icon fa-wrench fa-fw" aria-hidden="true"></i>
			<span class="caret"><i class="icon fa-sort-down fa-fw" aria-hidden="true"></i></span>
		</span>
		<div class="dropdown">
			<div class="pointer"><div class="pointer-inner"></div></div>
			<ul class="dropdown-contents">
																												<li>
					<a href="viewtopic4ccc.php?f=3&amp;t=8822&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>

			<form method="post" action="https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8822">
		<div class="dropdown-container dropdown-container-left dropdown-button-control sort-tools">
	<span title="Display and sorting options" class="button button-secondary dropdown-trigger dropdown-select">
		<i class="icon fa-sort-amount-asc fa-fw" aria-hidden="true"></i>
		<span class="caret"><i class="icon fa-sort-down fa-fw" aria-hidden="true"></i></span>
	</span>
	<div class="dropdown hidden">
		<div class="pointer"><div class="pointer-inner"></div></div>
		<div class="dropdown-contents">
			<fieldset class="display-options">
							<label>Display: <select name="st" id="st"><option value="0" selected="selected">All posts</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select></label>
								<label>Sort by: <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="s">Subject</option></select></label>
				<label>Direction: <select name="sd" id="sd"><option value="a" selected="selected">Ascending</option><option value="d">Descending</option></select></label>
								<hr class="dashed" />
				<input type="submit" class="button2" name="sort" value="Go" />
						</fieldset>
		</div>
	</div>
</div>
		</form>
	
	
	
			<div class="pagination">
			7 posts
							&bull; Page <strong>1</strong> of <strong>1</strong>
					</div>
	</div>


<div class="action-bar actions-jump">
		<p class="jumpbox-return">
		<a href="viewforum4d6b.html?f=3" class="left-box arrow-left" accesskey="r">
			<i class="icon fa-angle-left fa-fw icon-black" aria-hidden="true"></i><span>Return to “DOS Batch Forum”</span>
		</a>
	</p>
	
		<div class="jumpbox dropdown-container dropdown-container-right dropdown-up dropdown-left dropdown-button-control" id="jumpbox">
			<span title="Jump to" class="button button-secondary dropdown-trigger dropdown-select">
				<span>Jump to</span>
				<span class="caret"><i class="icon fa-sort-down fa-fw" aria-hidden="true"></i></span>
			</span>
		<div class="dropdown">
			<div class="pointer"><div class="pointer-inner"></div></div>
			<ul class="dropdown-contents">
																				<li><a href="viewforum31e6.html?f=4" class="jumpbox-cat-link"> <span> DosTips - Dos Batch</span></a></li>
																<li><a href="viewforum4d6b.html?f=3" class="jumpbox-sub-link"><span class="spacer"></span> <span>&#8627; &nbsp; DOS Batch Forum</span></a></li>
											</ul>
		</div>
	</div>

	</div>


			</div>


<div id="page-footer" class="page-footer" role="contentinfo">
	<div class="navbar" role="navigation">
	<div class="inner">

	<ul id="nav-footer" class="nav-footer linklist" role="menubar">
		<li class="breadcrumbs">
							<span class="crumb"><a href="../index.html" data-navbar-reference="home"><i class="icon fa-home fa-fw" aria-hidden="true"></i><span>DosTips.com</span></a></span>									<span class="crumb"><a href="index.html" data-navbar-reference="index"><span>Board index</span></a></span>					</li>
		
				<li class="rightside">All times are <span title="UTC-6">UTC-06:00</span></li>
							<li class="rightside">
				<a href="ucp033a.html?mode=delete_cookies" data-ajax="true" data-refresh="true" role="menuitem">
					<i class="icon fa-trash fa-fw" aria-hidden="true"></i><span>Delete all board cookies</span>
				</a>
			</li>
												<li class="rightside" data-last-responsive="true">
				<a href="memberlist4bfd.html?mode=team" role="menuitem">
					<i class="icon fa-shield fa-fw" aria-hidden="true"></i><span>The team</span>
				</a>
			</li>
									<li class="rightside" data-last-responsive="true">
				<a href="memberlist8733.html?mode=contactadmin" role="menuitem">
					<i class="icon fa-envelope fa-fw" aria-hidden="true"></i><span>Contact us</span>
				</a>
			</li>
			</ul>

	</div>
</div>

	<div class="copyright">
				<!-- WARNING NO DELETE -->Style developer by <a href="http://tricolor.x-tk.ru/">support forum tricolor</a>, <!-- END WARNING NO DELETE -->Powered by <a href="https://www.phpbb.com/">phpBB</a>&reg; Forum Software &copy; phpBB Limited
									</div>

	<div id="darkenwrapper" class="darkenwrapper" data-ajax-error-title="AJAX error" data-ajax-error-text="Something went wrong when processing your request." data-ajax-error-text-abort="User aborted request." data-ajax-error-text-timeout="Your request timed out; please try again." data-ajax-error-text-parsererror="Something went wrong with the request and the server returned an invalid reply.">
		<div id="darken" class="darken">&nbsp;</div>
	</div>

	<div id="phpbb_alert" class="phpbb_alert" data-l-err="Error" data-l-timeout-processing-req="Request timed out.">
		<a href="#" class="alert_close">
			<i class="icon fa-times-circle fa-fw" aria-hidden="true"></i>
		</a>
		<h3 class="alert_title">&nbsp;</h3><p class="alert_text"></p>
	</div>
	<div id="phpbb_confirm" class="phpbb_alert">
		<a href="#" class="alert_close">
			<i class="icon fa-times-circle fa-fw" aria-hidden="true"></i>
		</a>
		<div class="alert_text"></div>
	</div>
</div>

</div>

<div>
	<a id="bottom" class="anchor" accesskey="z"></a>
	<img src="cron5495.gif?cron_type=cron.task.text_reparser.poll_title" width="1" height="1" alt="cron" /></div>

<script type="text/javascript" src="assets/javascript/jquery.mind772.js?assets_version=34"></script>
<script type="text/javascript" src="assets/javascript/cored772.js?assets_version=34"></script>



<script type="text/javascript" src="styles/prosilver/template/forum_fnd772.js?assets_version=34"></script>
<script type="text/javascript" src="styles/prosilver/template/ajaxd772.js?assets_version=34"></script>
<script type="text/javascript" src="styles/AllanStyle-SUBSILVER/template/jquery-uid772.js?assets_version=34"></script>
<script type="text/javascript" src="styles/AllanStyle-SUBSILVER/template/collapsed772.js?assets_version=34"></script>



</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?t=8822 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:26 GMT -->
</html>
