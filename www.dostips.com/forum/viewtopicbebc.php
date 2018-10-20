<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?p=57953 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Refresh Desktop (Powershell hybrid) - DosTips.com</title>


	<link rel="canonical" href="viewtopic321e.php?t=8820">

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
		
		
<h2 class="topic-title"><a href="viewtopic908b.html?f=3&amp;t=8820">Refresh Desktop (Powershell hybrid)</a></h2>
<!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->
<div style="display: none !important;">Discussion forum for all Windows batch related topics.<br /></div>
<p>
	<strong>Moderator:</strong> <a href="memberlista6a8.html?mode=viewprofile&amp;u=5" class="username">DosItHelp</a>
</p>


<div class="action-bar bar-top">
	
			<a href="postingb3cf.php?mode=reply&amp;f=3&amp;t=8820" class="button" title="Post a reply">
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
					<a href="viewtopicea2e.php?f=3&amp;t=8820&amp;view=print" title="Print view" accesskey="p">
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
				<input type="hidden" name="t" value="8820" />
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

			<div id="p57944" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57944">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search661c.html?author_id=1265&amp;sr=posts">3386</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 22 Jan 2010 18:01</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57944">

						<h3 class="first"><a href="#p57944">Refresh Desktop (Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting45a2.php?mode=quote&amp;f=3&amp;p=57944" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicdbb6.php?p=57944#p57944" onclick="prompt('Message #1',this.href); return false;">#1</a></span> 
									<a class="unread" href="viewtopicdbb6.php?p=57944#p57944" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a></strong> &raquo; </span>05 Sep 2018 10:44
			</p>
			
			
			
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
				<div id="p57946" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57946">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search9642.html?author_id=5056&amp;sr=posts">853</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 06 Sep 2013 21:28</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Virginia, United States</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57946">

						<h3 ><a href="#p57946">Re: Refresh Desktop (Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting7a14.php?mode=quote&amp;f=3&amp;p=57946" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic552d.php?p=57946#p57946" onclick="prompt('Message #2',this.href); return false;">#2</a></span> 
									<a class="unread" href="viewtopic552d.php?p=57946#p57946" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a></strong> &raquo; </span>05 Sep 2018 13:42
			</p>
			
			
			
			<div class="content">Working on my XP Pro virtual machine (once I installed the Windows Management Framework Core package), as well as Windows 7 32-bit and 64-bit.</div>

			
									
									
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
				<div id="p57947" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57947">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search661c.html?author_id=1265&amp;sr=posts">3386</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 22 Jan 2010 18:01</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57947">

						<h3 ><a href="#p57947">Re: Refresh Desktop (Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting31aa.php?mode=quote&amp;f=3&amp;p=57947" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopica4a7.php?p=57947#p57947" onclick="prompt('Message #3',this.href); return false;">#3</a></span> 
									<a class="unread" href="viewtopica4a7.php?p=57947#p57947" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a></strong> &raquo; </span>05 Sep 2018 14:24
			</p>
			
			
			
			<div class="content">Thank you for testing ShadowThief!<br>
<br>
Now I suspect it will work from XP onwards and I'm fully aware that it doesn't make any sense to try on even older versions. As you said Powershell did not belong to XP. It was introduced in 2006 and became a default installation in Win7. However once Powershell was installed the code will work and your reply answered my question and eased my doubt <img class="smilies" src="images/smilies/icon_biggrin.gif" width="15" height="15" alt=":D" title="Very Happy"><br>
FWIW I'm also aware that the performance is rather bad. Powershell.exe is an external process that the OS has to schedule before it gets loaded. Furthermore platform invokations in Powershell require a compiled temporary DLL (you'll find it for a few milliseconds in the %temp% directory) which wastes even more time. But I didn't find any better solution yet.<br>
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
				<div id="p57950" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57950">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search1322.html?author_id=2988&amp;sr=posts">3970</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 23 Dec 2011 13:59</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57950">

						<h3 ><a href="#p57950">Re: Refresh Desktop (Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingad66.php?mode=quote&amp;f=3&amp;p=57950" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic90fb.php?p=57950#p57950" onclick="prompt('Message #4',this.href); return false;">#4</a></span> 
									<a class="unread" href="viewtopic90fb.php?p=57950#p57950" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a></strong> &raquo; </span>05 Sep 2018 18:17
			</p>
			
			
			
			<div class="content">I am not a .net programmer but didn't someone show an example of creating and compiling quick and dirty .net code. Not sure if that would be faster.</div>

			
									
									
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
				<div id="p57953" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57953">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search9642.html?author_id=5056&amp;sr=posts">853</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 06 Sep 2013 21:28</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Virginia, United States</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57953">

						<h3 ><a href="#p57953">Re: Refresh Desktop (Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingf6d3.php?mode=quote&amp;f=3&amp;p=57953" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicbebc.php?p=57953#p57953" onclick="prompt('Message #5',this.href); return false;">#5</a></span> 
									<a class="unread" href="viewtopicbebc.php?p=57953#p57953" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a></strong> &raquo; </span>05 Sep 2018 22:36
			</p>
			
			
			
			<div class="content"><blockquote><div><cite><a href="memberlist2675.html?mode=viewprofile&amp;u=2988">Squashman</a> wrote: <a href="viewtopic90fb.php?p=57950#p57950" data-post-id="57950" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">05 Sep 2018 18:17</div></cite>
I am not a .net programmer but didn't someone show an example of creating and compiling quick and dirty .net code. Not sure if that would be faster.
</div></blockquote>

You mean <a href="viewtopic867c.php?t=4762#p27555" class="postlink">viewtopic.php?t=4762#p27555</a>?</div>

			
									
									
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
				<div id="p57956" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57956">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search1322.html?author_id=2988&amp;sr=posts">3970</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 23 Dec 2011 13:59</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57956">

						<h3 ><a href="#p57956">Re: Refresh Desktop (Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingfac4.php?mode=quote&amp;f=3&amp;p=57956" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic2bbd.php?p=57956#p57956" onclick="prompt('Message #6',this.href); return false;">#6</a></span> 
									<a class="unread" href="viewtopic2bbd.php?p=57956#p57956" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a></strong> &raquo; </span>06 Sep 2018 07:01
			</p>
			
			
			
			<div class="content"><blockquote><div><cite><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056">ShadowThief</a> wrote: <a href="viewtopicbebc.php?p=57953#p57953" data-post-id="57953" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">05 Sep 2018 22:36</div></cite>
<blockquote><div><cite><a href="memberlist2675.html?mode=viewprofile&amp;u=2988">Squashman</a> wrote: <a href="viewtopic90fb.php?p=57950#p57950" data-post-id="57950" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">05 Sep 2018 18:17</div></cite>
I am not a .net programmer but didn't someone show an example of creating and compiling quick and dirty .net code. Not sure if that would be faster.
</div></blockquote>

You mean <a href="viewtopic867c.php?t=4762#p27555" class="postlink">viewtopic.php?t=4762#p27555</a>?
</div></blockquote>
This one <a href="viewtopic07b9.php?t=5260" class="postlink">viewtopic.php?t=5260</a></div>

			
									
									
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
				<div id="p57957" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57957">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search661c.html?author_id=1265&amp;sr=posts">3386</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 22 Jan 2010 18:01</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57957">

						<h3 ><a href="#p57957">Re: Refresh Desktop (Powershell hybrid)</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting271b.php?mode=quote&amp;f=3&amp;p=57957" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic0727.php?p=57957#p57957" onclick="prompt('Message #7',this.href); return false;">#7</a></span> 
									<a class="unread" href="viewtopic0727.php?p=57957#p57957" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistf667.html?mode=viewprofile&amp;u=1265" style="color: #00AA00;" class="username-coloured">aGerman</a></strong> &raquo; </span>06 Sep 2018 10:34
			</p>
			
			
			
			<div class="content"><blockquote><div><cite><a href="memberlist2675.html?mode=viewprofile&amp;u=2988">Squashman</a> wrote: <a href="viewtopic90fb.php?p=57950#p57950" data-post-id="57950" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">05 Sep 2018 18:17</div></cite>Not sure if that would be faster.</div></blockquote>I'm pretty sure it would be faster but only if you reuse the compiled utility  <img class="smilies" src="images/smilies/icon_wink.gif" width="15" height="15" alt=":wink:" title="Wink"><br>
I just tried to keep it a scripting solution.<br>
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
	
			<a href="postingb3cf.php?mode=reply&amp;f=3&amp;t=8820" class="button" title="Post a reply">
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
					<a href="viewtopicea2e.php?f=3&amp;t=8820&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>

			<form method="post" action="https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8820">
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
	<img src="cron68e3.gif?cron_type=cron.task.text_reparser.pm_text" width="1" height="1" alt="cron" /></div>

<script type="text/javascript" src="assets/javascript/jquery.mind772.js?assets_version=34"></script>
<script type="text/javascript" src="assets/javascript/cored772.js?assets_version=34"></script>



<script type="text/javascript" src="styles/prosilver/template/forum_fnd772.js?assets_version=34"></script>
<script type="text/javascript" src="styles/prosilver/template/ajaxd772.js?assets_version=34"></script>
<script type="text/javascript" src="styles/AllanStyle-SUBSILVER/template/jquery-uid772.js?assets_version=34"></script>
<script type="text/javascript" src="styles/AllanStyle-SUBSILVER/template/collapsed772.js?assets_version=34"></script>



</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?p=57953 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:38 GMT -->
</html>
