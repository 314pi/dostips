<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=1786 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>New function - :hexDump - DosTips.com</title>


	<link rel="canonical" href="viewtopic9915-3.html?t=1786">

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
		
		
<h2 class="topic-title"><a href="viewtopicfc17.php?f=3&amp;t=1786">New function - :hexDump</a></h2>
<!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->
<div style="display: none !important;">Discussion forum for all Windows batch related topics.<br /></div>
<p>
	<strong>Moderator:</strong> <a href="memberlista6a8.html?mode=viewprofile&amp;u=5" class="username">DosItHelp</a>
</p>


<div class="action-bar bar-top">
	
			<a href="posting26e7.html?mode=reply&amp;f=3&amp;t=1786" class="button" title="Post a reply">
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
					<a href="viewtopicdb81-2.html?f=3&amp;t=1786&amp;view=print" title="Print view" accesskey="p">
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
				<input type="hidden" name="t" value="1786" />
<input type="hidden" name="sf" value="msgonly" />

			</fieldset>
			</form>
		</div>
	
			<div class="pagination">
			11 posts
							&bull; Page <strong>1</strong> of <strong>1</strong>
					</div>
		</div>




<div id="subsilver-nav-topic">
	<div class="inner"><div class="post has-profile">
		<div class="leftsided postbody subsilver-topic-title">Message</div>
		<div class="leftsided postprofile subsilver-topic-author">Author</div>
	</div></div>
</div>

			<div id="p7038" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile7038">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content7038">

						<h3 class="first"><a href="#p7038">New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting040d.html?mode=quote&amp;f=3&amp;p=7038" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic2ce1.html?p=7038#p7038" onclick="prompt('Message #1',this.href); return false;">#1</a></span> 
									<a class="unread" href="viewtopic2ce1.html?p=7038#p7038" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>27 Apr 2011 23:57
			</p>
			
			
			
			<div class="content"><strong class="text-strong"><span style="font-size: 120%; line-height: normal">A much faster version of HEXDUMP.BAT based on CERTUTIL is available at <a href="viewtopic239b.html?f=3&amp;t=8816" class="postlink">viewtopic.php?f=3&amp;t=8816</a></span></strong><br>
<br>
Jeb posted a clever technique for reading binary files as an addendum to the <a href="viewtopic2bb2-2.html?f=3&amp;t=1226&amp;start=30" class="postlink">ROT13 encryption thread</a>.<br>
<br>
I've expanded the concept into a flexible hexDump routine with a good number of options. I've done some testing, but with all the options I wouldn't be surprised if there are some bugs lurking somewhere. In theory it should be able to handle reading up to 2 gigabytes, but I don't recommend it! As long as the /S option startOffset is in the tens of thousands then performance isn't too bad. But I tried looking at 200 bytes with startOffset=200000 and the wait was painful.<br>
<br>
hexDump.bat
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off
:hexDump [/option]... file  -- dump a file in hex format
::
::  Displays the content of a binary file using a pair of hexadecimal digits
::  for each byte. By default the ouput displays 16 bytes per line, with the
::  the bytes (hexadecimal pairs) delimited by a space.
::
::  The format of the dump can be modified by the following case insensitive
::  options:
::
::    /BblockSize   The blockSize after the /B specifies the number of bytes
::                  to print in each block. Bytes within a block are not
::                  delimited. If the blockSize is &lt;= 0 then /C, /A and /O
::                  options are ignored and the bytes are output in a
::                  continuous stream without any delimiters or linebreaks.
::                  The default blockSize is 1.
::
::    /CblockCount  The blockCount after the /C specifies the number of blocks
::                  to include on each line of output. Blocks are delimited
::                  by a space.
::                  The default blockCount is 16.
::
::    /SstartOffset The startOffset after the /S specifies the number of bytes
::                  to skip before displaying bytes.
::                  The default startOffset is 0.
::
::    /Nlengh       The length after the /N specifies the total number of
::                  bytes to display after the startOffset. The default is to
::                  display up until the end of the file.
::
::    /A            Append the ASCII representation of the bytes to the end
::                  of each line. Non-printable and extended ASCII characters
::                  are displayed as periods.
::
::    /O            Prefix each line with the starting offset of the line in
::                  hexadecimal notation.
::
::  Each option must be entered as a separate argument.
::
  setlocal enableDelayedExpansion
  set /a blockSize=1, blockCount=16, startOffset=0
  set ascii=
  set offset=
  set len=
  set opts=
  for %%a in (%*) do (
    if not defined opts (
      set "arg=%%~a"
      if "!arg:~0,1!"=="/" (
        shift /1
        set "opt=!arg:~1,1!"
        if /i "!opt!"=="B" set /a blockSize=!arg:~2!
        if /i "!opt!"=="C" set /a blockCount=!arg:~2!
        if /i "!opt!"=="S" set /a startOffset=!arg:~2!
        if /i "!opt!"=="N" set /a len=!arg:~2!
        if /i "!opt!"=="A" set "ascii=  "
        if /i "!opt!"=="O" set offset=TRUE
      ) else set opts=TRUE
    )
  )
  if not exist %1 (
    echo ERROR: File not found &gt;&amp;2
    exit /b 1
  )
  set fileSize=%~z1
  if defined len (
    set /a "endOffset = startOffset + len"
    if !endOffset! gtr %fileSise% set endOffset=%fileSize%
  ) else set endOffset=%fileSize%
  if defined offset set offset=%startOffset%
  set "blockDelim= "
  if %blockSize% lss 1 (
    set /a "blockSize=0, blockCount=2000"
    set "ascii="
    set "offset="
    set "blockDelim="
  )
  set dummy="!temp!\hexDumpDummy%random%.txt"
  &lt;nul &gt;%dummy% set /p ".=A"
  set dummySize=1
  for /l %%n in (1,1,32) do (if !dummySize! lss %endOffset% set /a "dummySize*=2" &amp; type !dummy! &gt;&gt;!dummy!)
  set /a "pos=0, cnt=0, skipStart=startOffset+1, lnBytes=blockSize*blockCount"
  set "off="
  set "hex="
  set "txt=%ascii%"
  set map= ^^^!^"#$%%^&amp;'^(^)*+,-./0123456789:;^&lt;=^&gt;?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^^^^_`abcdefghijklmnopqrstuvwxyz{^|}~
  set hexMap=0123456789ABCDEF
  for /f "eol=F usebackq tokens=1,2 skip=1 delims=:[] " %%A in (`fc /b "%~dpf1" %dummy%`) do (
    set /a skipEnd=0x%%A &amp;&amp; (
      if !skipEnd! geq %startOffset% if !skipStart! leq %endOffset% (
        for /l %%n in (!skipStart!,1,!skipEnd!) do call :hexDump.addChar 41
        call :hexDump.addChar %%B
        set /a skipStart=skipEnd+2
      )
    )
  )
  for /l %%n in (%skipStart%,1,%endOffset%) do call :hexDump.addChar 41
  if %blockSize%==0 if defined hex call :hexDump.writeLn
  for /l %%n in (1,1,%lnBytes%) do if defined hex call :hexDump.addChar "  "
  del %dummy%
  exit /b
  :hexDump.addChar  hexPair
    set "hex=!hex!%~1"
    if defined ascii (
      2&gt;nul set /a "d=0x%1-32" &amp;&amp; (
        if !d! lss 0 set d=14
        if !d! gtr 94 set d=14
        for %%d in (!d!) do set txt=!txt!!map:~%%d,1!
      )
    )
    if %blockSize% gtr 0 set /a pos+=1
    if !pos!==%blockSize% set /a "pos=0, cnt+=1"
    if not !cnt!==!blockCount! (
		  if !pos!==0 set "hex=!hex!%blockDelim%"
			exit /b
		)
    set cnt=0
  :hexDump.writeLn
    if defined offset (
      set off=
      set dec=!offset!
      for /l %%n in (1,1,8) do (
        set /a "d=dec&amp;15,dec&gt;&gt;=4"
        for %%d in (!d!) do set "off=!hexMap:~%%d,1!!off!"
      )
      set "off=!off!: "
      set /a offset+=lnBytes
    )
    set "ln=!off!!hex!!txt!"
    if %blockSize%==0 (&lt;nul set /p ".=!ln!") else echo !ln!
    set hex=
    set "txt=%ascii%"
exit /b
</code></pre></div>

Here is output using a few of the options. I dumped the 1st 200 bytes of the hexDump.bat file.
<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>&gt;hexdump /a /o /n200 hexdump.bat
00000000: 40 65 63 68 6F 20 6F 66 66 0D 0A 3A 68 65 78 44  @echo off..:hexD
00000010: 75 6D 70 20 5B 2F 6F 70 74 69 6F 6E 5D 2E 2E 2E  ump [/option]...
00000020: 20 66 69 6C 65 20 20 2D 2D 20 64 75 6D 70 20 61   file  -- dump a
00000030: 20 66 69 6C 65 20 69 6E 20 68 65 78 20 66 6F 72   file in hex for
00000040: 6D 61 74 0D 0A 3A 3A 0D 0A 3A 3A 20 20 44 69 73  mat..::..::  Dis
00000050: 70 6C 61 79 73 20 74 68 65 20 63 6F 6E 74 65 6E  plays the conten
00000060: 74 20 6F 66 20 61 20 62 69 6E 61 72 79 20 66 69  t of a binary fi
00000070: 6C 65 20 75 73 69 6E 67 20 61 20 70 61 69 72 20  le using a pair
00000080: 6F 66 20 68 65 78 61 64 65 63 69 6D 61 6C 20 64  of hexadecimal d
00000090: 69 67 69 74 73 0D 0A 3A 3A 20 20 66 6F 72 20 65  igits..::  for e
000000A0: 61 63 68 20 62 79 74 65 2E 20 42 79 20 64 65 66  ach byte. By def
000000B0: 61 75 6C 74 20 74 68 65 20 6F 75 70 75 74 20 64  ault the ouput d
000000C0: 69 73 70 6C 61 79 73 20                          isplays
</code></pre></div>

Dave Benham</div>

			
													<div class="notice">
					Last edited by <a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a> on 29 Jan 2014 19:53, edited 1 time in total.
									</div>
			
									
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
				<div id="p7039" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile7039">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist5282.html?mode=viewprofile&amp;u=2419" class="username">nitt</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searche315.html?author_id=2419&amp;sr=posts">218</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 22 Apr 2011 02:43</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content7039">

						<h3 ><a href="#p7039">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting97a6.html?mode=quote&amp;f=3&amp;p=7039" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic0a6d.html?p=7039#p7039" onclick="prompt('Message #2',this.href); return false;">#2</a></span> 
									<a class="unread" href="viewtopic0a6d.html?p=7039#p7039" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist5282.html?mode=viewprofile&amp;u=2419" class="username">nitt</a></strong> &raquo; </span>28 Apr 2011 18:21
			</p>
			
			
			
			<div class="content">I tried this with an executable and got a crap-ton of hex. I then converted all the hex to characters with VBScript and got &quot;MZ&quot;.<br /><br />I also hexdumped a .vbs file, then used the converter to read the hex and I got something close to the original, but not the same:<br /><br />Original:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>set fc = createobject(&quot;scripting.filesystemobject&quot;)<br />string1 = fc.opentextfile(&quot;test.txt&quot;).readall<br /><br />arry1 = split(string1,&quot; &quot;)<br />final = &quot;&quot;<br />for each a in arry1<br />on error resume next<br />final = final &amp; chr(CLng(&quot;&amp;h&quot; &amp; a))<br />next<br /><br />msgbox(final)<br /><br /><br /></code></pre></div><br /><br />After converting:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>set fc = createject(&quot;scriptinfilesystemobje&quot;)<br />string1 = .opentextfile(est.exe&quot;).readl<br /><br />arry1 = sit(string1,&quot; &quot;<br />final = &quot;&quot;<br />f each a in arr<br />on error rese next<br />final final &amp; chr(CL(&quot;&amp;h&quot; &amp; a))<br />nt<br /><br />msgbox(fil)</code></pre></div></div>

			
									
									
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
				<div id="p7041" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile7041">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content7041">

						<h3 ><a href="#p7041">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting1f47.html?mode=quote&amp;f=3&amp;p=7041" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic2ccf.html?p=7041#p7041" onclick="prompt('Message #3',this.href); return false;">#3</a></span> 
									<a class="unread" href="viewtopic2ccf.html?p=7041#p7041" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>28 Apr 2011 21:20
			</p>
			
			
			
			<div class="content">Thanks for testing nitt, but I am unable to reproduce your results.<br /><br />I copied your test source code into a file named original.txt and then ran the following test.bat<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>setlocal enableDelayedExpansion<br />call hexdump /b0 original.txt &gt;original.hex<br />echo on<br />for /f %%h in ('type original.hex') do set hex=%%h<br />call charlib hex2str hex str<br />echo on<br />:: The following &quot;echos&quot; the value of str without introducing a new line<br />:: with the output redirected to copy.txt<br />&lt;nul &gt;copy.txt set /p &quot;.=!str!&quot;<br />type copy.txt<br />fc original.txt copy.txt<br /></code></pre></div><br />The charlib utility I am using to convert from hex to a string can be found here <a href="https://sites.google.com/site/dbenhamfiles/" class="postlink">dbenham files</a> and is the result of collaboration in this thread <a href="viewtopicf6d0-2.html?f=3&amp;t=1733" class="postlink">character conversion functions - :asc, :chr, :str2hex, :hex2str</a><br /><br />Here are my results demonstrating successful conversion to and from hex: The only editing I did was to introduce line continuation in the set hex statement results.<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>&gt;test<br /><br />&gt;setlocal enableDelayedExpansion<br /><br />&gt;call hexdump /b0 original.txt&nbsp; 1&gt;original.hex<br /><br />&gt;for /F %h in ('type original.hex') do set hex=%h<br /><br />&gt;set hex=736574206663203D206372656174656F626A6563742822736372697^<br />074696E672E66696C6573797374656D6F626A65637422290D0A737472696E67^<br />31203D2066632E6F70656E7465787466696C652822746573742E74787422292E^<br />72656164616C6C0D0A0D0A6172727931203D2073706C697428737472696E673^<br />12C222022290D0A66696E616C203D2022220D0A666F72206561636820612069^<br />6E2061727279310D0A6F6E206572726F7220726573756D65206E6578740D0A6^<br />6696E616C203D2066696E616C20262063687228434C6E672822266822202620^<br />6129290D0A6E6578740D0A0D0A6D7367626F782866696E616C290D0A<br /><br />&gt;call charlib hex2str hex str<br /><br />&gt;set /p &quot;.=!str!&quot; 0&lt;nul 1&gt;copy.txt<br /><br />&gt;type copy.txt<br />set fc = createobject(&quot;scripting.filesystemobject&quot;)<br />string1 = fc.opentextfile(&quot;test.txt&quot;).readall<br /><br />arry1 = split(string1,&quot; &quot;)<br />final = &quot;&quot;<br />for each a in arry1<br />on error resume next<br />final = final &amp; chr(CLng(&quot;&amp;h&quot; &amp; a))<br />next<br /><br />msgbox(final)<br /><br />&gt;fc original.txt copy.txt<br />Comparing files original.txt and COPY.TXT<br />FC: no differences encountered<br /><br /></code></pre></div><br /><br />Hopefully the problem is with your conversion code and not a Windows version issue (or God forbid a bug in my code  <img class="smilies" src="images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> ) One other possibility is I am running a more recent version of hexDump with a few more options, but no bug fixes that I am aware of.<br /><br />If you still think you have found a bug in hexDump.bat, please post a short test file, the hexDump command line you used, and the hexDump output. Posting only your conversion results leaves open the possibility that the bug is on your end.<br /><br />Here is the &quot;final&quot; version of hexDump, barring bug fixes. It now supports user defined delimiters within and between blocks, as well as user definable default formatting via an environment variable:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code><br />@echo off<br />:hexDump &#91;/option&#93;... file&nbsp; -- dump a file in hex format<br />::<br />::&nbsp; Displays the content of a binary file using a pair of hexadecimal digits<br />::&nbsp; for each byte. By default the ouput displays 16 bytes per line, with the<br />::&nbsp; bytes (hexadecimal pairs) delimited by a space.<br />::<br />::&nbsp; The format of the dump can be modified by the following case insensitive<br />::&nbsp; options:<br />::<br />::&nbsp; &nbsp; /BblockSize&nbsp; &nbsp;The blockSize after the /B specifies the number of bytes<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to print in each block. If the blockSize is &lt;= 0 then /C,<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; /D, /E, /A and /O options are ignored and the bytes are<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; output in a continuous stream without any delimiters or<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; linebreaks.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default blockSize is 1.<br />::<br />::&nbsp; &nbsp; /CblockCount&nbsp; The blockCount after the /C specifies the number of blocks<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to include on each line of output.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default blockCount is 16.<br />::<br />::&nbsp; &nbsp; /DbyteDelim&nbsp; &nbsp;The byteDelim after the /D specifies the delimiter string<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to use between bytes within a block.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default byteDelim is undefined (no delimiter)<br />::<br />::&nbsp; &nbsp; /EblockDelim&nbsp; The blockDelim after the /E specifies the delimiter string<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to use between blocks within a line.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default blockDelim is &quot;/E &quot; (a single space)<br />::<br />::&nbsp; &nbsp; /SstartOffset The startOffset after the /S specifies the number of bytes<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to skip before displaying bytes.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default startOffset is 0.<br />::<br />::&nbsp; &nbsp; /Nlength&nbsp; &nbsp; &nbsp; The length after the /N specifies the total number of<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bytes to display after the startOffset. The default is to<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; display up until the end of the file.<br />::<br />::&nbsp; &nbsp; /A&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Append the ASCII representation of the bytes to the end<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; of each line. Non-printable and extended ASCII characters<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; are displayed as periods.<br />::<br />::&nbsp; &nbsp; /O&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Prefix each line with the starting offset of the line in<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hexadecimal notation.<br />::<br />::&nbsp; Each option must be entered as a separate argument. Numeric components to<br />::&nbsp; options may be specified using any numeric expression supported by SET /A.<br />::&nbsp; The option defaults may be modified by presetting a hexDumpDefaults<br />::&nbsp; variable.<br />::<br />&nbsp; setlocal enableDelayedExpansion<br />&nbsp; set /a blockSize=1, blockCount=16, startOffset=0<br />&nbsp; set ascii=<br />&nbsp; set offset=<br />&nbsp; set len=<br />&nbsp; set opts=<br />&nbsp; set byteDelim=<br />&nbsp; set &quot;blockDelim= &quot;<br />&nbsp; set endDefault=<br />&nbsp; for %%a in (!hexDumpDefaults! // %*) do (<br />&nbsp; &nbsp; if not defined opts (<br />&nbsp; &nbsp; &nbsp; set &quot;arg=%%~a&quot;<br />&nbsp; &nbsp; &nbsp; if &quot;!arg:~0,1!&quot;==&quot;/&quot; (<br />&nbsp; &nbsp; &nbsp; &nbsp; if defined endDefault shift /1<br />&nbsp; &nbsp; &nbsp; &nbsp; set &quot;opt=!arg:~1,1!&quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;B&quot; set /a blockSize=!arg:~2!<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;C&quot; set /a blockCount=!arg:~2!<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;D&quot; set &quot;byteDelim=!arg:~2!&quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;E&quot; set &quot;blockDelim=!arg:~2!&quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;S&quot; set /a startOffset=!arg:~2!<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;N&quot; set /a len=!arg:~2!<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;A&quot; set &quot;ascii=&nbsp; &quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;O&quot; set offset=TRUE<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;/&quot; set endDefault=true<br />&nbsp; &nbsp; &nbsp; ) else set opts=TRUE<br />&nbsp; &nbsp; )<br />&nbsp; )<br />&nbsp; if not exist %1 (<br />&nbsp; &nbsp; echo ERROR: File not found &gt;&amp;2<br />&nbsp; &nbsp; exit /b 1<br />&nbsp; )<br />&nbsp; set fileSize=%~z1<br />&nbsp; if defined len (<br />&nbsp; &nbsp; set /a &quot;endOffset = startOffset + len&quot;<br />&nbsp; &nbsp; if !endOffset! gtr %fileSise% set endOffset=%fileSize%<br />&nbsp; ) else set endOffset=%fileSize%<br />&nbsp; if defined offset set offset=%startOffset%<br />&nbsp; if %blockSize% lss 1 (<br />&nbsp; &nbsp; set /a &quot;blockSize=0, blockCount=2000&quot;<br />&nbsp; &nbsp; set &quot;ascii=&quot;<br />&nbsp; &nbsp; set &quot;offset=&quot;<br />&nbsp; &nbsp; set &quot;byteDelim=&quot;<br />&nbsp; &nbsp; set &quot;blockDelim=&quot;<br />&nbsp; )<br />&nbsp; set dummy=&quot;!temp!\hexDumpDummy%random%.txt&quot;<br />&nbsp; &lt;nul &gt;%dummy% set /p &quot;.=A&quot;<br />&nbsp; set dummySize=1<br />&nbsp; for /l %%n in (1,1,32) do (if !dummySize! lss %endOffset% set /a &quot;dummySize*=2&quot; &amp; type !dummy! &gt;&gt;!dummy!)<br />&nbsp; set /a &quot;pos=0, cnt=0, skipStart=startOffset+1, lnBytes=blockSize*blockCount&quot;<br />&nbsp; set &quot;off=&quot;<br />&nbsp; set &quot;hex=&quot;<br />&nbsp; set &quot;txt=%ascii%&quot;<br />&nbsp; set map= ^^^!^&quot;#$%%^&amp;'^(^)*+,-./0123456789:;^&lt;=^&gt;?@ABCDEFGHIJKLMNOPQRSTUVWXYZ&#91;\&#93;^^^^_`abcdefghijklmnopqrstuvwxyz{^|}~<br />&nbsp; set hexMap=0123456789ABCDEF<br />&nbsp; for /f &quot;eol=F usebackq tokens=1,2 skip=1 delims=:&#91;&#93; &quot; %%A in (`fc /b &quot;%~dpf1&quot; %dummy%`) do (<br />&nbsp; &nbsp; set /a skipEnd=0x%%A &amp;&amp; (<br />&nbsp; &nbsp; &nbsp; if !skipEnd! geq %startOffset% if !skipStart! leq %endOffset% (<br />&nbsp; &nbsp; &nbsp; &nbsp; for /l %%n in (!skipStart!,1,!skipEnd!) do call :hexDump.addChar 41<br />&nbsp; &nbsp; &nbsp; &nbsp; call :hexDump.addChar %%B<br />&nbsp; &nbsp; &nbsp; &nbsp; set /a skipStart=skipEnd+2<br />&nbsp; &nbsp; &nbsp; )<br />&nbsp; &nbsp; )<br />&nbsp; )<br />&nbsp; for /l %%n in (%skipStart%,1,%endOffset%) do call :hexDump.addChar 41<br />&nbsp; if %blockSize%==0 if defined hex call :hexDump.writeLn<br />&nbsp; for /l %%n in (1,1,%lnBytes%) do if defined hex call :hexDump.addChar &quot;&nbsp; &quot;<br />&nbsp; del %dummy%<br />&nbsp; exit /b<br />&nbsp; :hexDump.addChar&nbsp; hexPair<br />&nbsp; &nbsp; if defined ascii (<br />&nbsp; &nbsp; &nbsp; 2&gt;nul set /a &quot;d=0x%1-32&quot; &amp;&amp; (<br />&nbsp; &nbsp; &nbsp; &nbsp; if !d! lss 0 set d=14<br />&nbsp; &nbsp; &nbsp; &nbsp; if !d! gtr 94 set d=14<br />&nbsp; &nbsp; &nbsp; &nbsp; for %%d in (!d!) do set txt=!txt!!map:~%%d,1!<br />&nbsp; &nbsp; &nbsp; )<br />&nbsp; &nbsp; )<br />&nbsp; &nbsp; if %blockSize% gtr 0 set /a pos+=1<br />&nbsp; &nbsp; if !pos!==%blockSize% set /a &quot;pos=0, cnt+=1&quot;<br />&nbsp; &nbsp; if not !cnt!==!blockCount! (<br />&nbsp; &nbsp; &nbsp; if !pos!==0 (set &quot;hex=!hex!%~1!blockDelim!&quot;) else set &quot;hex=!hex!%~1!byteDelim!&quot;<br />&nbsp; &nbsp; &nbsp; exit /b<br />&nbsp; &nbsp; )<br />&nbsp; &nbsp; set &quot;hex=!hex!%~1&quot;<br />&nbsp; &nbsp; set cnt=0<br />&nbsp; :hexDump.writeLn<br />&nbsp; &nbsp; if defined offset (<br />&nbsp; &nbsp; &nbsp; set off=<br />&nbsp; &nbsp; &nbsp; set dec=!offset!<br />&nbsp; &nbsp; &nbsp; for /l %%n in (1,1,8) do (<br />&nbsp; &nbsp; &nbsp; &nbsp; set /a &quot;d=dec&amp;15,dec&gt;&gt;=4&quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; for %%d in (!d!) do set &quot;off=!hexMap:~%%d,1!!off!&quot;<br />&nbsp; &nbsp; &nbsp; )<br />&nbsp; &nbsp; &nbsp; set &quot;off=!off!: &quot;<br />&nbsp; &nbsp; &nbsp; set /a offset+=lnBytes<br />&nbsp; &nbsp; )<br />&nbsp; &nbsp; set &quot;ln=!off!!hex!!txt!&quot;<br />&nbsp; &nbsp; if %blockSize%==0 (&lt;nul set /p &quot;.=!ln!&quot;) else echo !ln!<br />&nbsp; &nbsp; set hex=<br />&nbsp; &nbsp; set &quot;txt=%ascii%&quot;<br />exit /b<br /></code></pre></div><br /><br />Finally here are results demonstrating the new features:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code><br />&gt;set hexDumpDefaults=/o /a /b8 /c2 &quot;/d &quot; &quot;/e - &quot;<br /><br />&gt;hexdump /s150 /n200 hexdump.bat<br />00000096: 0A 3A 3A 20 20 66 6F 72 - 20 65 61 63 68 20 62 79&nbsp; .::&nbsp; for each by<br />000000A6: 74 65 2E 20 42 79 20 64 - 65 66 61 75 6C 74 20 74&nbsp; te. By default t<br />000000B6: 68 65 20 6F 75 70 75 74 - 20 64 69 73 70 6C 61 79&nbsp; he ouput display<br />000000C6: 73 20 31 36 20 62 79 74 - 65 73 20 70 65 72 20 6C&nbsp; s 16 bytes per l<br />000000D6: 69 6E 65 2C 20 77 69 74 - 68 20 74 68 65 0D 0A 3A&nbsp; ine, with the..:<br />000000E6: 3A 20 20 62 79 74 65 73 - 20 28 68 65 78 61 64 65&nbsp; :&nbsp; bytes (hexade<br />000000F6: 63 69 6D 61 6C 20 70 61 - 69 72 73 29 20 64 65 6C&nbsp; cimal pairs) del<br />00000106: 69 6D 69 74 65 64 20 62 - 79 20 61 20 73 70 61 63&nbsp; imited by a spac<br />00000116: 65 2E 0D 0A 3A 3A 0D 0A - 3A 3A 20 20 54 68 65 20&nbsp; e...::..::&nbsp; The<br />00000126: 66 6F 72 6D 61 74 20 6F - 66 20 74 68 65 20 64 75&nbsp; format of the du<br />00000136: 6D 70 20 63 61 6E 20 62 - 65 20 6D 6F 64 69 66 69&nbsp; mp can be modifi<br />00000146: 65 64 20 62 79 20 74 68 - 65 20 66 6F 6C 6C 6F 77&nbsp; ed by the follow<br />00000156: 69 6E 67 20 63 61 73 65 -&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ing case<br /></code></pre></div><br /><br />Dave Benham</div>

			
									
									
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
				<div id="p7407" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile7407">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content7407">

						<h3 ><a href="#p7407">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingc318.html?mode=quote&amp;f=3&amp;p=7407" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic9e4d.html?p=7407#p7407" onclick="prompt('Message #4',this.href); return false;">#4</a></span> 
									<a class="unread" href="viewtopic9e4d.html?p=7407#p7407" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>21 May 2011 17:14
			</p>
			
			
			
			<div class="content">Up until now, all of my hexDump posts have relied on a &quot;local&quot; hexDump.addChar function that must be called for each character. This is a tremendous overhead. I remember wanting to embed the function code directly in the various loops, but the function was called 4 times, so I opted for improved readability and maintenance over performance.<br /><br />But since there is now a mechanism for <a href="viewtopicbcaf.html?f=3&amp;t=1827" class="postlink">Batch &quot;macros&quot; with arguments</a>, I can have my cake and eat it to! Here is a much faster version of hexDump that uses a macro to replace the :hexDump.addChar function. I've also added an /h option that provides help on the usage of hexDump. Running the batch file without any options will also display the help.<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off<br />:hexDump &#91;/option&#93;... file&nbsp; &nbsp; &nbsp; &nbsp; -- dump a file in hex format<br />::<br />::&nbsp; Displays the content of a binary file using a pair of hexadecimal digits<br />::&nbsp; for each byte. By default the ouput displays 16 bytes per line, with the<br />::&nbsp; bytes (hexadecimal pairs) delimited by a space.<br />::<br />::&nbsp; The format of the dump can be modified by the following case insensitive<br />::&nbsp; options:<br />::<br />::&nbsp; &nbsp; /BblockSize&nbsp; &nbsp;The blockSize after the /B specifies the number of bytes<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to print in each block. If the blockSize is &lt;= 0 then /C,<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; /D, /E, /A and /O options are ignored and the bytes are<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; output in a continuous stream without any delimiters or<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; linebreaks.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default blockSize is 1.<br />::<br />::&nbsp; &nbsp; /CblockCount&nbsp; The blockCount after the /C specifies the number of blocks<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to include on each line of output.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default blockCount is 16.<br />::<br />::&nbsp; &nbsp; /DbyteDelim&nbsp; &nbsp;The byteDelim after the /D specifies the delimiter string<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to use between bytes within a block.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default byteDelim is undefined (no delimiter)<br />::<br />::&nbsp; &nbsp; /EblockDelim&nbsp; The blockDelim after the /E specifies the delimiter string<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to use between blocks within a line.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default blockDelim is &quot;/E &quot; (a single space)<br />::<br />::&nbsp; &nbsp; /SstartOffset The startOffset after the /S specifies the number of bytes<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to skip before displaying bytes.<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The default startOffset is 0.<br />::<br />::&nbsp; &nbsp; /Nlength&nbsp; &nbsp; &nbsp; The length after the /N specifies the total number of<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bytes to display after the startOffset. The default is to<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; display up until the end of the file.<br />::<br />::&nbsp; &nbsp; /A&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Append the ASCII representation of the bytes to the end<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; of each line. Non-printable and extended ASCII characters<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; are displayed as periods.<br />::<br />::&nbsp; &nbsp; /O&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Prefix each line with the starting offset of the line in<br />::&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hexadecimal notation.<br />::<br />::&nbsp; &nbsp; /H&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Display hexDump help<br />::<br />::&nbsp; Each option must be entered as a separate argument. Numeric components to<br />::&nbsp; options may be specified using any numeric expression supported by SET /A.<br />::&nbsp; The option defaults may be modified by presetting a hexDumpDefaults<br />::&nbsp; variable.<br />::<br />&nbsp; setlocal enableDelayedExpansion<br />&nbsp; set /a blockSize=1, blockCount=16, startOffset=0<br />&nbsp; set ascii=<br />&nbsp; set offset=<br />&nbsp; set len=<br />&nbsp; set opts=<br />&nbsp; set byteDelim=<br />&nbsp; set &quot;blockDelim= &quot;<br />&nbsp; set endDefault=<br />&nbsp; for %%a in (!hexDumpDefaults! // %*) do (<br />&nbsp; &nbsp; if not defined opts (<br />&nbsp; &nbsp; &nbsp; set &quot;arg=%%~a&quot;<br />&nbsp; &nbsp; &nbsp; if &quot;!arg:~0,1!&quot;==&quot;/&quot; (<br />&nbsp; &nbsp; &nbsp; &nbsp; if defined endDefault shift /1<br />&nbsp; &nbsp; &nbsp; &nbsp; set &quot;opt=!arg:~1,1!&quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;B&quot; set /a blockSize=!arg:~2!<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;C&quot; set /a blockCount=!arg:~2!<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;D&quot; set &quot;byteDelim=!arg:~2!&quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;E&quot; set &quot;blockDelim=!arg:~2!&quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;S&quot; set /a startOffset=!arg:~2!<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;N&quot; set /a len=!arg:~2!<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;A&quot; set &quot;ascii=&nbsp; &quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;O&quot; set offset=TRUE<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;H&quot; set &quot;opts=TRUE&quot; &amp; goto :hexDump.help<br />&nbsp; &nbsp; &nbsp; &nbsp; if /i &quot;!opt!&quot;==&quot;/&quot; set endDefault=true<br />&nbsp; &nbsp; &nbsp; ) else set opts=TRUE<br />&nbsp; &nbsp; )<br />&nbsp; )<br />&nbsp; if &quot;%~1&quot;==&quot;&quot; goto :hexDump.help<br />&nbsp; if not exist %1 (<br />&nbsp; &nbsp; echo ERROR: File not found &gt;&amp;2<br />&nbsp; &nbsp; exit /b 1<br />&nbsp; )<br />&nbsp; set fileSize=%~z1<br />&nbsp; if defined len (<br />&nbsp; &nbsp; set /a &quot;endOffset = startOffset + len&quot;<br />&nbsp; &nbsp; if !endOffset! gtr %fileSize% set endOffset=%fileSize%<br />&nbsp; ) else set endOffset=%fileSize%<br />&nbsp; if defined offset set offset=%startOffset%<br />&nbsp; if %blockSize% lss 1 (<br />&nbsp; &nbsp; set /a &quot;blockSize=0, blockCount=2000&quot;<br />&nbsp; &nbsp; set &quot;ascii=&quot;<br />&nbsp; &nbsp; set &quot;offset=&quot;<br />&nbsp; &nbsp; set &quot;byteDelim=&quot;<br />&nbsp; &nbsp; set &quot;blockDelim=&quot;<br />&nbsp; )<br />&nbsp; set dummy=&quot;!temp!\hexDumpDummy%random%.txt&quot;<br />&nbsp; &lt;nul &gt;%dummy% set /p &quot;.=A&quot;<br />&nbsp; set dummySize=1<br />&nbsp; for /l %%n in (1,1,32) do (if !dummySize! lss %endOffset% set /a &quot;dummySize*=2&quot; &amp; type !dummy! &gt;&gt;!dummy!)<br />&nbsp; set /a &quot;pos=0, cnt=0, skipStart=startOffset+1, lnBytes=blockSize*blockCount&quot;<br />&nbsp; set &quot;off=&quot;<br />&nbsp; set &quot;hex=&quot;<br />&nbsp; set &quot;txt=%ascii%&quot;<br />&nbsp; set map= ^^^!^&quot;#$%%^&amp;'^(^)*+,-./0123456789:;^&lt;=^&gt;?@ABCDEFGHIJKLMNOPQRSTUVWXYZ&#91;\&#93;^^^^_`abcdefghijklmnopqrstuvwxyz{^|}~<br />&nbsp; set hexMap=0123456789ABCDEF<br />&nbsp; ::DEFINE INTERNAL MACRO USED SOLELY BY THIS FUNCTION<br />&nbsp; setlocal disableDelayedExpansion<br /><br />&nbsp; set LF=^<br /><br /><br />&nbsp; ::Above 2 blank lines are required - do not remove<br /><br />&nbsp; set ^&quot;\n=^^^%LF%%LF%^%LF%%LF%^^&quot;<br /><br />&nbsp; set callMacro=for /f %%a in<br /><br />&nbsp; set addChar= do (%\n%<br />&nbsp; &nbsp; set &quot;byte=%%~a&quot;%\n%<br />&nbsp; &nbsp; if &quot;!byte!&quot;==&quot;2space&quot; set &quot;byte=&nbsp; &quot;%\n%<br />&nbsp; &nbsp; if defined ascii if &quot;!byte!&quot; neq &quot;&nbsp; &quot; (%\n%<br />&nbsp; &nbsp; &nbsp; set /a &quot;d=0x!byte!-32&quot;%\n%<br />&nbsp; &nbsp; &nbsp; if !d! lss 0 set d=14%\n%<br />&nbsp; &nbsp; &nbsp; if !d! gtr 94 set d=14%\n%<br />&nbsp; &nbsp; &nbsp; for %%d in (!d!) do set txt=!txt!!map:~%%d,1!%\n%<br />&nbsp; &nbsp; )%\n%<br />&nbsp; &nbsp; if %blockSize% gtr 0 set /a pos+=1%\n%<br />&nbsp; &nbsp; if !pos!==%blockSize% set /a &quot;pos=0, cnt+=1&quot;%\n%<br />&nbsp; &nbsp; if not !cnt!==!blockCount! (%\n%<br />&nbsp; &nbsp; &nbsp; if !pos!==0 (set &quot;hex=!hex!!byte!!blockDelim!&quot;) else set &quot;hex=!hex!!byte!!byteDelim!&quot;%\n%<br />&nbsp; &nbsp; ) else (%\n%<br />&nbsp; &nbsp; &nbsp; set &quot;hex=!hex!!byte!&quot;%\n%<br />&nbsp; &nbsp; &nbsp; set cnt=0%\n%<br />&nbsp; &nbsp; &nbsp; if defined offset (%\n%<br />&nbsp; &nbsp; &nbsp; &nbsp; set off=%\n%<br />&nbsp; &nbsp; &nbsp; &nbsp; set dec=!offset!%\n%<br />&nbsp; &nbsp; &nbsp; &nbsp; for /l %%n in (1,1,8) do (%\n%<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; set /a &quot;d=dec&amp;15,dec&gt;&gt;=4&quot;%\n%<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for %%d in (!d!) do set &quot;off=!hexMap:~%%d,1!!off!&quot;%\n%<br />&nbsp; &nbsp; &nbsp; &nbsp; )%\n%<br />&nbsp; &nbsp; &nbsp; &nbsp; set &quot;off=!off!: &quot;%\n%<br />&nbsp; &nbsp; &nbsp; &nbsp; set /a offset+=lnBytes%\n%<br />&nbsp; &nbsp; &nbsp; )%\n%<br />&nbsp; &nbsp; &nbsp; set &quot;ln=!off!!hex!!txt!&quot;%\n%<br />&nbsp; &nbsp; &nbsp; if %blockSize%==0 (^&lt;nul set /p &quot;.=!ln!&quot;) else echo !ln!%\n%<br />&nbsp; &nbsp; &nbsp; set hex=%\n%<br />&nbsp; &nbsp; &nbsp; set &quot;txt=%ascii%&quot;%\n%<br />&nbsp; &nbsp; )%\n%<br />&nbsp; )<br /><br />&nbsp; &nbsp;::END OF MACRO DEFS<br />&nbsp; setlocal enableDelayedExpansion<br />&nbsp; for /f &quot;eol=F usebackq tokens=1,2 skip=1 delims=:&#91;&#93; &quot; %%A in (`fc /b &quot;%~dpf1&quot; %dummy%`) do (<br />&nbsp; &nbsp; set /a skipEnd=0x%%A &amp;&amp; (<br />&nbsp; &nbsp; &nbsp; if !skipEnd! geq %startOffset% if !skipStart! leq %endOffset% (<br />&nbsp; &nbsp; &nbsp; &nbsp; for /l %%n in (!skipStart!,1,!skipEnd!) do %callMacro% (&quot;41&quot;) %addChar%<br />&nbsp; &nbsp; &nbsp; &nbsp; %callMacro% (&quot;%%B&quot;) %addChar%<br />&nbsp; &nbsp; &nbsp; &nbsp; set /a skipStart=skipEnd+2<br />&nbsp; &nbsp; &nbsp; )<br />&nbsp; &nbsp; )<br />&nbsp; )<br />&nbsp; for /l %%n in (%skipStart%,1,%endOffset%) do %callMacro% (&quot;41&quot;) %addChar%<br />&nbsp; if %blockSize%==0 if defined hex (&lt;nul set /p &quot;.=!hex!&quot;) &amp; set hex=<br />&nbsp; for /l %%n in (1,1,%lnBytes%) do if defined hex %callMacro% (&quot;2space&quot;) %addChar%<br />&nbsp; del %dummy%<br />&nbsp; exit /b<br />&nbsp; ::-------------------------------------------------------<br />&nbsp; :hexDump.help<br />&nbsp; &nbsp; setlocal disableDelayedExpansion<br />&nbsp; &nbsp; echo:<br />&nbsp; &nbsp; set file=&quot;%~f0&quot;<br />&nbsp; &nbsp; set beg=<br />&nbsp; &nbsp; for /f &quot;tokens=1,* delims=:&quot; %%a in ('findstr /n /r /i /c:&quot;^:hexDump &quot; %file%') do (<br />&nbsp; &nbsp; &nbsp; if not defined beg set beg=%%a<br />&nbsp; &nbsp; )<br />&nbsp; &nbsp; set end=<br />&nbsp; &nbsp; for /f &quot;tokens=1 delims=:&quot; %%a in ('findstr /n /r /c:&quot;^&#91;^:&#93;&quot; %file%') do (<br />&nbsp; &nbsp; &nbsp; if not defined end if %beg% LSS %%a set end=%%a<br />&nbsp; &nbsp; )<br />&nbsp; &nbsp; for /f &quot;tokens=1,* delims=&#91;&#93;:&quot; %%a in ('findstr /n /r /c:&quot;^ *:&#91;^:&#93;&quot; /c:&quot;^::&#91;^:&#93;&quot; /c:&quot;^ *::$&quot; %file%') do (<br />&nbsp; &nbsp; &nbsp; if %beg% LEQ %%a if %%a LEQ %end% echo: %%b<br />&nbsp; &nbsp; )<br />exit /b 0<br /></code></pre></div><br /><span style="color: #BF0000">Bug fix on 2011-05-22: <strong class="text-strong">(&quot;  &quot;)</strong> appearing above <strong class="text-strong">del %dummy%</strong> line became <strong class="text-strong">(&quot;2space&quot;)</strong> and reworked top of addChar macro</span><br /><br />Dave Benham</div>

			
									
									
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
				<div id="p21907" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile21907">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search1322.html?author_id=2988&amp;sr=posts">3970</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 23 Dec 2011 13:59</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content21907">

						<h3 ><a href="#p21907">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting63d9.html?mode=quote&amp;f=3&amp;p=21907" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic8d7a-2.html?p=21907#p21907" onclick="prompt('Message #5',this.href); return false;">#5</a></span> 
									<a class="unread" href="viewtopic8d7a-2.html?p=21907#p21907" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a></strong> &raquo; </span>17 Nov 2012 23:43
			</p>
			
			
			
			<div class="content">This would be really cool if it had a vertical hexdump option.<br /><br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>DOS TIPS<br />44525455<br />4F304903<br /></code></pre></div></div>

			
									
									
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
				<div id="p28885" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile28885">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistcc00.html?mode=viewprofile&amp;u=1006" class="username">noprogrammer</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search4934.html?author_id=1006&amp;sr=posts">30</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 29 Oct 2009 11:55</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content28885">

						<h3 ><a href="#p28885">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting9ce3.html?mode=quote&amp;f=3&amp;p=28885" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicfcf3.html?p=28885#p28885" onclick="prompt('Message #6',this.href); return false;">#6</a></span> 
									<a class="unread" href="viewtopicfcf3.html?p=28885#p28885" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistcc00.html?mode=viewprofile&amp;u=1006" class="username">noprogrammer</a></strong> &raquo; </span>01 Oct 2013 08:46
			</p>
			
			
			
			<div class="content">Dave, here comes a beginner's question:<br /><br />Let's assume I want to write these hex values to a file:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>89 50 4E 47 0D 0A 1A 0A 00 00 00 0D 49 48 44 52</code></pre></div><br />In bash I'd simply do:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>echo -en &quot;\x89\x50\x4E\x47\x0D\x0A\x1A\x0A\x00\x00\x00\x0D\x49\x48\x44\52&quot; &gt;bogus.png</code></pre></div><br />Cmd will make things complicated... What I'm after is something like<br /><br /><ul><li> write a binary pattern into a file</li><li> add (random) binary data to that file</li></ul><br />Is there a (simple) way of doing this?</div>

			
									
									
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
				<div id="p32198" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile32198">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content32198">

						<h3 ><a href="#p32198">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting32b5.html?mode=quote&amp;f=3&amp;p=32198" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicbd1f.html?p=32198#p32198" onclick="prompt('Message #7',this.href); return false;">#7</a></span> 
									<a class="unread" href="viewtopicbd1f.html?p=32198#p32198" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>29 Jan 2014 19:47
			</p>
			
			
			
			<div class="content">There is not any convenient way to write binary data to a file using only batch. For the longest time we thought it was not possible. But we recently developed methods to do it <img class="smilies" src="images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />See <a href="viewtopic91a1.html?f=3&amp;t=5326" class="postlink">Create nul and all ascii characters with only batch</a>. I recommend reading the entire thread. The links at the top may not point to the most up-to-date methods. Plus there are multiple ways to do it scattered throughout the thread.<br /><br /><br />Dave Benham</div>

			
									
									
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
				<div id="p34199" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile34199">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlista071.html?mode=viewprofile&amp;u=3864" class="username">einstein1969</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searche2bd.html?author_id=3864&amp;sr=posts">762</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 15 Jun 2012 13:16</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Italy, Rome</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content34199">

						<h3 ><a href="#p34199">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting2a7a-2.html?mode=quote&amp;f=3&amp;p=34199" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic8f49.html?p=34199#p34199" onclick="prompt('Message #8',this.href); return false;">#8</a></span> 
									<a class="unread" href="viewtopic8f49.html?p=34199#p34199" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlista071.html?mode=viewprofile&amp;u=3864" class="username">einstein1969</a></strong> &raquo; </span>04 May 2014 09:05
			</p>
			
			
			
			<div class="content">Hi Dave!<br /><br />I recently going to this thread for speedup the reading of files. Even bigger files...<br /><br />In this year I have learning that the Dos could give much more if our mind controls our prejudices.<br /><br />For speed up this wonderful utility I think that there are two option. One is to create a temporary file &quot;fc /b ....&quot; out the for /F. <br /><br />And might be useful to the method used in BatchTEE with pipeline and Set /P fast reading. Usefull in multicore system.<br /><br />Rif: (after second link : triple click for select + click left mouse + open link)<br /><a href="viewtopicea28.html?p=9611#p9611" class="postlink">New technic: set /p can read multiple lines from a file</a><br /><a href="viewtopic1749-2.html?p=32615#p32615" class="postlink">Asynchronous native batch tee script</a><br />http:<em class="text-italics">//</em>www.dostips.com/forum/viewtopic.php?p=32292#p32292%20%20 [Topic:<strong class="text-strong">slice.cmd</strong>]<br /><br />PS: How to bypass the max 2 urls problem?  <img class="smilies" src="images/smilies/icon_twisted.gif" alt=":twisted:" title="Twisted Evil" /> (aGerman help!!)<br /><br />einstein1969</div>

			
													<div class="notice">
					Last edited by <a href="memberlista071.html?mode=viewprofile&amp;u=3864" class="username">einstein1969</a> on 04 May 2014 11:31, edited 1 time in total.
									</div>
			
									
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
				<div id="p34201" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile34201">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search1322.html?author_id=2988&amp;sr=posts">3970</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 23 Dec 2011 13:59</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content34201">

						<h3 ><a href="#p34201">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingce32.html?mode=quote&amp;f=3&amp;p=34201" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic3d16.html?p=34201#p34201" onclick="prompt('Message #9',this.href); return false;">#9</a></span> 
									<a class="unread" href="viewtopic3d16.html?p=34201#p34201" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a></strong> &raquo; </span>04 May 2014 10:22
			</p>
			
			
			
			<div class="content"><blockquote><div><cite>einstein1969 wrote:</cite>PS: How to bypass the max 2 urls problem?  <img class="smilies" src="images/smilies/icon_twisted.gif" alt=":twisted:" title="Twisted Evil" /> (aGerman help!!)<br /><br />einstein1969</div></blockquote><br />Create a 2nd post.</div>

			
									
									
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
				<div id="p34203" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile34203">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search661c.html?author_id=1265&amp;sr=posts">3386</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 22 Jan 2010 18:01</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content34203">

						<h3 ><a href="#p34203">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting8b66.html?mode=quote&amp;f=3&amp;p=34203" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic83c2.html?p=34203#p34203" onclick="prompt('Message #10',this.href); return false;">#10</a></span> 
									<a class="unread" href="viewtopic83c2.html?p=34203#p34203" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a></strong> &raquo; </span>04 May 2014 10:30
			</p>
			
			
			
			<div class="content"><span style="font-size: 85%; line-height: normal"><blockquote><div><cite>einstein1969 wrote:</cite>PS: How to bypass the max 2 urls problem?  <img class="smilies" src="images/smilies/icon_twisted.gif" alt=":twisted:" title="Twisted Evil" /> (aGerman help!!)</div></blockquote><br />No way. It's a setting that only the site admin could adjust. The reason for this restriction is to prevent the spreading of loads of links by spam bots and advertisers.<br />Something like italic slashes enable the plain-text recognition.<br />http:<em class="text-italics">//</em>www.dostips.com/<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>http:&#91;i&#93;//&#91;/i&#93;www.dostips.com/</code></pre></div><br />Regards<br />aGerman</span></div>

			
									
									
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
				<div id="p34205" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile34205">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlista071.html?mode=viewprofile&amp;u=3864" class="username">einstein1969</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searche2bd.html?author_id=3864&amp;sr=posts">762</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 15 Jun 2012 13:16</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Italy, Rome</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content34205">

						<h3 ><a href="#p34205">Re: New function - :hexDump</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting003a.html?mode=quote&amp;f=3&amp;p=34205" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopica611.html?p=34205#p34205" onclick="prompt('Message #11',this.href); return false;">#11</a></span> 
									<a class="unread" href="viewtopica611.html?p=34205#p34205" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlista071.html?mode=viewprofile&amp;u=3864" class="username">einstein1969</a></strong> &raquo; </span>04 May 2014 11:43
			</p>
			
			
			
			<div class="content"><span style="font-size: 85%; line-height: normal">Thanks aGerman! The trick work well. I use this!<br /><br />@Squashman: thanks to you too.<br /><br />einstein1969</span></div>

			
									
									
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
	
			<a href="posting26e7.html?mode=reply&amp;f=3&amp;t=1786" class="button" title="Post a reply">
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
					<a href="viewtopicdb81-2.html?f=3&amp;t=1786&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>

			<form method="post" action="https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=1786">
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
			11 posts
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

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=1786 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:01 GMT -->
</html>
