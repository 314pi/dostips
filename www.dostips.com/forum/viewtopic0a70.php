<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?t=8811 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Exist in /s &quot;directory&quot;doesn't work - DosTips.com</title>


	<link rel="canonical" href="viewtopic0a70.php?t=8811">

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
		
		
<h2 class="topic-title"><a href="viewtopicc08e.html?f=3&amp;t=8811">Exist in /s &quot;directory&quot;doesn't work</a></h2>
<!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->
<div style="display: none !important;">Discussion forum for all Windows batch related topics.<br /></div>
<p>
	<strong>Moderator:</strong> <a href="memberlista6a8.html?mode=viewprofile&amp;u=5" class="username">DosItHelp</a>
</p>


<div class="action-bar bar-top">
	
			<a href="postingea66.php?mode=reply&amp;f=3&amp;t=8811" class="button" title="Post a reply">
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
					<a href="viewtopice20a.php?f=3&amp;t=8811&amp;view=print" title="Print view" accesskey="p">
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
				<input type="hidden" name="t" value="8811" />
<input type="hidden" name="sf" value="msgonly" />

			</fieldset>
			</form>
		</div>
	
			<div class="pagination">
			13 posts
							&bull; Page <strong>1</strong> of <strong>1</strong>
					</div>
		</div>




<div id="subsilver-nav-topic">
	<div class="inner"><div class="post has-profile">
		<div class="leftsided postbody subsilver-topic-title">Message</div>
		<div class="leftsided postprofile subsilver-topic-author">Author</div>
	</div></div>
</div>

			<div id="p57889" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57889">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5557.php?author_id=9370&amp;sr=posts">8</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 31 Aug 2018 14:45</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57889">

						<h3 class="first"><a href="#p57889">Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingfac9.php?mode=quote&amp;f=3&amp;p=57889" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic3731.php?p=57889#p57889" onclick="prompt('Message #1',this.href); return false;">#1</a></span> 
									<a class="unread" href="viewtopic3731.php?p=57889#p57889" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a></strong> &raquo; </span>31 Aug 2018 14:55
			</p>
			
			
			
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

			
													<div class="notice">
					Last edited by <a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a> on 31 Aug 2018 15:37, edited 1 time in total.
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
				<div id="p57890" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57890">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5557.php?author_id=9370&amp;sr=posts">8</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 31 Aug 2018 14:45</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57890">

						<h3 ><a href="#p57890">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting7f6d.php?mode=quote&amp;f=3&amp;p=57890" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic49eb.php?p=57890#p57890" onclick="prompt('Message #2',this.href); return false;">#2</a></span> 
									<a class="unread" href="viewtopic49eb.php?p=57890#p57890" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a></strong> &raquo; </span>31 Aug 2018 15:36
			</p>
			
			
			
			<div class="content">for /f "tokens=* delims=" %%v in ...<br>
corrected</div>

			
									
									
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
				<div id="p57892" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57892">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search9642.html?author_id=5056&amp;sr=posts">853</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 06 Sep 2013 21:28</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Virginia, United States</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57892">

						<h3 ><a href="#p57892">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingf51c.php?mode=quote&amp;f=3&amp;p=57892" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic9435.php?p=57892#p57892" onclick="prompt('Message #3',this.href); return false;">#3</a></span> 
									<a class="unread" href="viewtopic9435.php?p=57892#p57892" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a></strong> &raquo; </span>31 Aug 2018 21:30
			</p>
			
			
			
			<div class="content">What are you expecting the /s flag to do? The only flag that if has is /i for case-insensitive comparisons.</div>

			
									
									
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
				<div id="p57894" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57894">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5557.php?author_id=9370&amp;sr=posts">8</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 31 Aug 2018 14:45</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57894">

						<h3 ><a href="#p57894">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting972f.php?mode=quote&amp;f=3&amp;p=57894" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic0973.php?p=57894#p57894" onclick="prompt('Message #4',this.href); return false;">#4</a></span> 
									<a class="unread" href="viewtopic0973.php?p=57894#p57894" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a></strong> &raquo; </span>31 Aug 2018 23:58
			</p>
			
			
			
			<div class="content"><blockquote><div><cite><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056">ShadowThief</a> wrote: <a href="viewtopic9435.php?p=57892#p57892" data-post-id="57892" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">31 Aug 2018 21:30</div></cite>
What are you expecting the /s flag to do? The only flag that if has is /i for case-insensitive comparisons.
</div></blockquote>

I am expecting to check if exist in subdirectories also but it doesn't. Is there any other way to do it ?</div>

			
									
									
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
				<div id="p57895" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57895">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistc1e4.html?mode=viewprofile&amp;u=5414" class="username">pieh-ejdsch</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5a70.html?author_id=5414&amp;sr=posts">172</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 04 Mar 2014 11:14</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57895">

						<h3 ><a href="#p57895">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingfe0c.php?mode=quote&amp;f=3&amp;p=57895" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic07c6.php?p=57895#p57895" onclick="prompt('Message #5',this.href); return false;">#5</a></span> 
									<a class="unread" href="viewtopic07c6.php?p=57895#p57895" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistc1e4.html?mode=viewprofile&amp;u=5414" class="username">pieh-ejdsch</a></strong> &raquo; </span>01 Sep 2018 00:02
			</p>
			
			
			
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
				<div id="p57896" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57896">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5557.php?author_id=9370&amp;sr=posts">8</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 31 Aug 2018 14:45</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57896">

						<h3 ><a href="#p57896">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingff15.php?mode=quote&amp;f=3&amp;p=57896" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicb8a5.php?p=57896#p57896" onclick="prompt('Message #6',this.href); return false;">#6</a></span> 
									<a class="unread" href="viewtopicb8a5.php?p=57896#p57896" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a></strong> &raquo; </span>01 Sep 2018 00:32
			</p>
			
			
			
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
				<div id="p57897" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57897">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5557.php?author_id=9370&amp;sr=posts">8</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 31 Aug 2018 14:45</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57897">

						<h3 ><a href="#p57897">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting7327.php?mode=quote&amp;f=3&amp;p=57897" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic11cd.php?p=57897#p57897" onclick="prompt('Message #7',this.href); return false;">#7</a></span> 
									<a class="unread" href="viewtopic11cd.php?p=57897#p57897" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a></strong> &raquo; </span>01 Sep 2018 05:20
			</p>
			
			
			
			<div class="content">I only want to search today's files so i must put a date parameter in below command<br>
<br>
for /r %%i in ( *.pdf )<br>
<br>
something like ( 'date /t' ) or something , <br>
any ideas?</div>

			
									
									
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
				<div id="p57903" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57903">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberliste2cd.html?mode=viewprofile&amp;u=2453" class="username">Ed Dyreen</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search0d5e.html?author_id=2453&amp;sr=posts">1497</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 16 May 2011 08:21</dd>		
		
																<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Flanders(Belgium)</dd>
							
							<dd class="profile-contact">
				<strong>Contact:</strong>
				<div class="dropdown-container dropdown-left">
					<a href="#" class="dropdown-trigger" title="Contact Ed Dyreen">
						<i class="icon fa-commenting-o fa-fw icon-lg" aria-hidden="true"></i><span class="sr-only">Contact Ed Dyreen</span>
					</a>
					<div class="dropdown">
						<div class="pointer"><div class="pointer-inner"></div></div>
						<div class="dropdown-contents contact-icons">
																																								<div>
																	<a href="http://ed-dyreen.ddns.net/" title="Website" class="last-cell">
										<span class="contact-icon phpbb_website-icon">Website</span>
									</a>
																	</div>
																					</div>
					</div>
				</div>
			</dd>
				
		</dl>

		<div class="postbody">
						<div id="post_content57903">

						<h3 ><a href="#p57903">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting7be4.php?mode=quote&amp;f=3&amp;p=57903" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopica7d5.php?p=57903#p57903" onclick="prompt('Message #8',this.href); return false;">#8</a></span> 
									<a class="unread" href="viewtopica7d5.php?p=57903#p57903" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberliste2cd.html?mode=viewprofile&amp;u=2453" class="username">Ed Dyreen</a></strong> &raquo; </span>01 Sep 2018 17:39
			</p>
			
			
			
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
				<div id="p57906" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57906">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5557.php?author_id=9370&amp;sr=posts">8</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 31 Aug 2018 14:45</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57906">

						<h3 ><a href="#p57906">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting18e6.php?mode=quote&amp;f=3&amp;p=57906" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicd474.php?p=57906#p57906" onclick="prompt('Message #9',this.href); return false;">#9</a></span> 
									<a class="unread" href="viewtopicd474.php?p=57906#p57906" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a></strong> &raquo; </span>02 Sep 2018 02:32
			</p>
			
			
			
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
				<div id="p57907" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57907">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberliste2cd.html?mode=viewprofile&amp;u=2453" class="username">Ed Dyreen</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search0d5e.html?author_id=2453&amp;sr=posts">1497</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 16 May 2011 08:21</dd>		
		
																<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Flanders(Belgium)</dd>
							
							<dd class="profile-contact">
				<strong>Contact:</strong>
				<div class="dropdown-container dropdown-left">
					<a href="#" class="dropdown-trigger" title="Contact Ed Dyreen">
						<i class="icon fa-commenting-o fa-fw icon-lg" aria-hidden="true"></i><span class="sr-only">Contact Ed Dyreen</span>
					</a>
					<div class="dropdown">
						<div class="pointer"><div class="pointer-inner"></div></div>
						<div class="dropdown-contents contact-icons">
																																								<div>
																	<a href="http://ed-dyreen.ddns.net/" title="Website" class="last-cell">
										<span class="contact-icon phpbb_website-icon">Website</span>
									</a>
																	</div>
																					</div>
					</div>
				</div>
			</dd>
				
		</dl>

		<div class="postbody">
						<div id="post_content57907">

						<h3 ><a href="#p57907">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingdbf1.html?mode=quote&amp;f=3&amp;p=57907" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicc129.html?p=57907#p57907" onclick="prompt('Message #10',this.href); return false;">#10</a></span> 
									<a class="unread" href="viewtopicc129.html?p=57907#p57907" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberliste2cd.html?mode=viewprofile&amp;u=2453" class="username">Ed Dyreen</a></strong> &raquo; </span>02 Sep 2018 04:42
			</p>
			
			
			
			<div class="content"><blockquote><div><cite><a href="memberlist757c.html?mode=viewprofile&amp;u=9370">Roy</a> wrote: <a href="viewtopicd474.php?p=57906#p57906" data-post-id="57906" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">02 Sep 2018 02:32</div></cite>
Thank you for your answer and solution. The problem with time it takes to finish, still persists though. <br>
<br>
Folder F2 has almost 300k pdf files in subdirs (~80GB). We should first filter the files with modified date of today and then start checking if they exist.
</div></blockquote>
If performance is important you made an ill choice using batch. Better use vbscript, jscript or if you have it powershell. You could first filter the files with modified date of today and then start checking if they exist but it will make little difference, batch is slow by nature.</div>

			
									
									
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
				<div id="p57909" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57909">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5557.php?author_id=9370&amp;sr=posts">8</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 31 Aug 2018 14:45</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57909">

						<h3 ><a href="#p57909">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting9080.html?mode=quote&amp;f=3&amp;p=57909" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic71e1.html?p=57909#p57909" onclick="prompt('Message #11',this.href); return false;">#11</a></span> 
									<a class="unread" href="viewtopic71e1.html?p=57909#p57909" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a></strong> &raquo; </span>02 Sep 2018 10:52
			</p>
			
			
			
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

			
													<div class="notice">
					Last edited by <a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a> on 02 Sep 2018 10:55, edited 1 time in total.
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
				<div id="p57910" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57910">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistc1e4.html?mode=viewprofile&amp;u=5414" class="username">pieh-ejdsch</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5a70.html?author_id=5414&amp;sr=posts">172</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 04 Mar 2014 11:14</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57910">

						<h3 ><a href="#p57910">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting6169.html?mode=quote&amp;f=3&amp;p=57910" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicc48d.html?p=57910#p57910" onclick="prompt('Message #12',this.href); return false;">#12</a></span> 
									<a class="unread" href="viewtopicc48d.html?p=57910#p57910" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistc1e4.html?mode=viewprofile&amp;u=5414" class="username">pieh-ejdsch</a></strong> &raquo; </span>02 Sep 2018 10:53
			</p>
			
			
			
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
				<div id="p57928" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57928">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search5557.php?author_id=9370&amp;sr=posts">8</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 31 Aug 2018 14:45</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57928">

						<h3 ><a href="#p57928">Re: Exist in /s &quot;directory&quot;doesn't work</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting48f9.html?mode=quote&amp;f=3&amp;p=57928" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopica9d5.html?p=57928#p57928" onclick="prompt('Message #13',this.href); return false;">#13</a></span> 
									<a class="unread" href="viewtopica9d5.html?p=57928#p57928" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist757c.html?mode=viewprofile&amp;u=9370" class="username">Roy</a></strong> &raquo; </span>04 Sep 2018 01:49
			</p>
			
			
			
			<div class="content">Thank you very much Phil, works great and it seems it is faster than the one i created in PowerShell.</div>

			
									
									
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
	
			<a href="postingea66.php?mode=reply&amp;f=3&amp;t=8811" class="button" title="Post a reply">
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
					<a href="viewtopice20a.php?f=3&amp;t=8811&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>

			<form method="post" action="https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8811">
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
			13 posts
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
	<img src="cronc6bf.gif?cron_type=cron.task.text_reparser.user_signature" width="1" height="1" alt="cron" /></div>

<script type="text/javascript" src="assets/javascript/jquery.mind772.js?assets_version=34"></script>
<script type="text/javascript" src="assets/javascript/cored772.js?assets_version=34"></script>



<script type="text/javascript" src="styles/prosilver/template/forum_fnd772.js?assets_version=34"></script>
<script type="text/javascript" src="styles/prosilver/template/ajaxd772.js?assets_version=34"></script>
<script type="text/javascript" src="styles/AllanStyle-SUBSILVER/template/jquery-uid772.js?assets_version=34"></script>
<script type="text/javascript" src="styles/AllanStyle-SUBSILVER/template/collapsed772.js?assets_version=34"></script>



</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?t=8811 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:16 GMT -->
</html>
