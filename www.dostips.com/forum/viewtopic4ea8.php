<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?p=57942 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>HEXDUMP.BAT version 2.1 using CERTUTIL - DosTips.com</title>


	<link rel="canonical" href="viewtopica24f.php?t=8816">

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
		
		
<h2 class="topic-title"><a href="viewtopic239b.html?f=3&amp;t=8816">HEXDUMP.BAT version 2.1 using CERTUTIL</a></h2>
<!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->
<div style="display: none !important;">Discussion forum for all Windows batch related topics.<br /></div>
<p>
	<strong>Moderator:</strong> <a href="memberlista6a8.html?mode=viewprofile&amp;u=5" class="username">DosItHelp</a>
</p>


<div class="action-bar bar-top">
	
			<a href="posting940c.php?mode=reply&amp;f=3&amp;t=8816" class="button" title="Post a reply">
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
					<a href="viewtopic8fc0.php?f=3&amp;t=8816&amp;view=print" title="Print view" accesskey="p">
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
				<input type="hidden" name="t" value="8816" />
<input type="hidden" name="sf" value="msgonly" />

			</fieldset>
			</form>
		</div>
	
			<div class="pagination">
			2 posts
							&bull; Page <strong>1</strong> of <strong>1</strong>
					</div>
		</div>




<div id="subsilver-nav-topic">
	<div class="inner"><div class="post has-profile">
		<div class="leftsided postbody subsilver-topic-title">Message</div>
		<div class="leftsided postprofile subsilver-topic-author">Author</div>
	</div></div>
</div>

			<div id="p57930" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57930">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57930">

						<h3 class="first"><a href="#p57930">HEXDUMP.BAT version 2.1 using CERTUTIL</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting006b.php?mode=quote&amp;f=3&amp;p=57930" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic95d3.php?p=57930#p57930" onclick="prompt('Message #1',this.href); return false;">#1</a></span> 
									<a class="unread" href="viewtopic95d3.php?p=57930#p57930" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>04 Sep 2018 13:46
			</p>
			
			
			
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
				<div id="p57942" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57942">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57942">

						<h3 ><a href="#p57942">Re: HEXDUMP.BAT version 2.1 using CERTUTIL</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting791a.php?mode=quote&amp;f=3&amp;p=57942" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic4ea8.php?p=57942#p57942" onclick="prompt('Message #2',this.href); return false;">#2</a></span> 
									<a class="unread" href="viewtopic4ea8.php?p=57942#p57942" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>05 Sep 2018 08:16
			</p>
			
			
			
			<div class="content">I've updated the original post to version 2.1<br>
<br>
The only change is some minor redesign of the exit process to ensure that temp files are "always" deleted, even if there is an error.<br>
<br>
<br>
Dave Benham</div>

			
									
									
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
	
			<a href="posting940c.php?mode=reply&amp;f=3&amp;t=8816" class="button" title="Post a reply">
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
					<a href="viewtopic8fc0.php?f=3&amp;t=8816&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>

			<form method="post" action="https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8816">
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
			2 posts
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

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?p=57942 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:02 GMT -->
</html>
