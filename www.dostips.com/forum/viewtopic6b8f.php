<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?p=32303 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>SNAKE.BAT 4.1 - An arcade style game using pure batch - Page 6 - DosTips.com</title>


	<link rel="canonical" href="viewtopic126c.html?t=4741&amp;start=75">

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
		
		
<h2 class="topic-title"><a href="viewtopic7806.html?f=3&amp;t=4741&amp;start=75">SNAKE.BAT 4.1 - An arcade style game using pure batch</a></h2>
<!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->
<div style="display: none !important;">Discussion forum for all Windows batch related topics.<br /></div>
<p>
	<strong>Moderator:</strong> <a href="memberlista6a8.html?mode=viewprofile&amp;u=5" class="username">DosItHelp</a>
</p>


<div class="action-bar bar-top">
	
			<a href="postingf816.html?mode=reply&amp;f=3&amp;t=4741" class="button" title="Post a reply">
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
					<a href="viewtopic0157.html?f=3&amp;t=4741&amp;start=75&amp;view=print" title="Print view" accesskey="p">
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
				<input type="hidden" name="t" value="4741" />
<input type="hidden" name="sf" value="msgonly" />

			</fieldset>
			</form>
		</div>
	
			<div class="pagination">
			108 posts
							<ul>
	<li class="dropdown-container dropdown-button-control dropdown-page-jump page-jump">
		<a class="button button-icon-only dropdown-trigger" href="#" title="Click to jump to page…" role="button"><i class="icon fa-level-down fa-rotate-270" aria-hidden="true"></i><span class="sr-only">Page <strong>6</strong> of <strong>8</strong></span></a>
		<div class="dropdown">
			<div class="pointer"><div class="pointer-inner"></div></div>
			<ul class="dropdown-contents">
				<li>Jump to page:</li>
				<li class="page-jump-form">
					<input type="number" name="page-number" min="1" max="999999" title="Enter the page number you wish to go to" class="inputbox tiny" data-per-page="15" data-base-url=".&#x2F;viewtopic.php&#x3F;f&#x3D;3&amp;amp&#x3B;t&#x3D;4741" data-start-name="start" />
					<input class="button2" value="Go" type="button" />
				</li>
			</ul>
		</div>
	</li>
			<li class="arrow previous"><a class="button button-icon-only" href="viewtopica70a.html?f=3&amp;t=4741&amp;start=60" rel="prev" role="button"><i class="icon fa-chevron-left fa-fw" aria-hidden="true"></i><span class="sr-only">Previous</span></a></li>
				<li><a class="button" href="viewtopic6484.html?f=3&amp;t=4741" role="button">1</a></li>
			<li class="ellipsis" role="separator"><span>…</span></li>
				<li><a class="button" href="viewtopicdf43-2.html?f=3&amp;t=4741&amp;start=45" role="button">4</a></li>
				<li><a class="button" href="viewtopica70a.html?f=3&amp;t=4741&amp;start=60" role="button">5</a></li>
			<li class="active"><span>6</span></li>
				<li><a class="button" href="viewtopicf487.html?f=3&amp;t=4741&amp;start=90" role="button">7</a></li>
				<li><a class="button" href="viewtopice8cd.html?f=3&amp;t=4741&amp;start=105" role="button">8</a></li>
				<li class="arrow next"><a class="button button-icon-only" href="viewtopicf487.html?f=3&amp;t=4741&amp;start=90" rel="next" role="button"><i class="icon fa-chevron-right fa-fw" aria-hidden="true"></i><span class="sr-only">Next</span></a></li>
	</ul>
					</div>
		</div>




<div id="subsilver-nav-topic">
	<div class="inner"><div class="post has-profile">
		<div class="leftsided postbody subsilver-topic-title">Message</div>
		<div class="leftsided postprofile subsilver-topic-author">Author</div>
	</div></div>
</div>

			<div id="p31048" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile31048">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist5b5d.html?mode=viewprofile&amp;u=3221" style="color: #00AA00;" class="username-coloured">foxidrive</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searchf147.html?author_id=3221&amp;sr=posts">6033</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 10 Feb 2012 02:20</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content31048">

						<h3 class="first"><a href="#p31048">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting4ada.html?mode=quote&amp;f=3&amp;p=31048" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicadfb.html?p=31048#p31048" onclick="prompt('Message #76',this.href); return false;">#76</a></span> 
									<a class="unread" href="viewtopicadfb.html?p=31048#p31048" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist5b5d.html?mode=viewprofile&amp;u=3221" style="color: #00AA00;" class="username-coloured">foxidrive</a></strong> &raquo; </span>28 Dec 2013 20:16
			</p>
			
			
			
			<div class="content">It gives us some understanding of the processes behind the scenes - thanks.</div>

			
									
									
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
				<div id="p31050" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile31050">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search1322.html?author_id=2988&amp;sr=posts">3970</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 23 Dec 2011 13:59</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content31050">

						<h3 ><a href="#p31050">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting3176.html?mode=quote&amp;f=3&amp;p=31050" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicdb80.html?p=31050#p31050" onclick="prompt('Message #77',this.href); return false;">#77</a></span> 
									<a class="unread" href="viewtopicdb80.html?p=31050#p31050" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a></strong> &raquo; </span>28 Dec 2013 20:20
			</p>
			
			
			
			<div class="content">would the command waitfor help with inter process communication. Not available for XP but if you had multiple batch files running on one computer you could send signals back and forth to each using the waitfor command.<br /><br />I have to admit i have not taken the time to understand how snakey works.</div>

			
									
									
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
				<div id="p31054" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile31054">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content31054">

						<h3 ><a href="#p31054">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingde53.html?mode=quote&amp;f=3&amp;p=31054" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopiceefd.html?p=31054#p31054" onclick="prompt('Message #78',this.href); return false;">#78</a></span> 
									<a class="unread" href="viewtopiceefd.html?p=31054#p31054" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>28 Dec 2013 20:33
			</p>
			
			
			
			<div class="content"><blockquote><div><cite>Squashman wrote:</cite>would the command waitfor help with inter process communication. Not available for XP but if you had multiple batch files running on one computer you could send signals back and forth to each using the waitfor command.<br /><br />I have to admit i have not taken the time to understand how snakey works.</div></blockquote><br />It wouldn't help for buffering key strokes, but it might be useful to synchronize communication (semaphore). I considered using it instead of a signal file, but I read that some people had problems getting it to behave properly, and also lack of XP support was a problem. NET SEND is available for XP, and I think that worked better.<br /><br /><br />Dave Benham</div>

			
									
									
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
				<div id="p31081" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile31081">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistcb12.html?mode=viewprofile&amp;u=1621" class="username">carlos</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searchda66.html?author_id=1621&amp;sr=posts">472</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 20 Aug 2010 13:57</dd>		
		
																<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Chile</dd>
							
							<dd class="profile-contact">
				<strong>Contact:</strong>
				<div class="dropdown-container dropdown-left">
					<a href="#" class="dropdown-trigger" title="Contact carlos">
						<i class="icon fa-commenting-o fa-fw icon-lg" aria-hidden="true"></i><span class="sr-only">Contact carlos</span>
					</a>
					<div class="dropdown">
						<div class="pointer"><div class="pointer-inner"></div></div>
						<div class="dropdown-contents contact-icons">
																																								<div>
																	<a href="https://web.archive.org/web/20180902091521/http://consolesoft.com/" title="Website" class="last-cell">
										<span class="contact-icon phpbb_website-icon">Website</span>
									</a>
																	</div>
																					</div>
					</div>
				</div>
			</dd>
				
		</dl>

		<div class="postbody">
						<div id="post_content31081">

						<h3 ><a href="#p31081">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting3079.html?mode=quote&amp;f=3&amp;p=31081" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopiccb9c.html?p=31081#p31081" onclick="prompt('Message #79',this.href); return false;">#79</a></span> 
									<a class="unread" href="viewtopiccb9c.html?p=31081#p31081" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistcb12.html?mode=viewprofile&amp;u=1621" class="username">carlos</a></strong> &raquo; </span>29 Dec 2013 06:29
			</p>
			
			
			
			<div class="content">@dbenham: very thanks for the explanation.</div>

			
									
									
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
				<div id="p31124" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile31124">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist7557.html?mode=viewprofile&amp;u=4243" class="username">carlsomo</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search15dd.html?author_id=4243&amp;sr=posts">91</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 02 Oct 2012 17:21</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content31124">

						<h3 ><a href="#p31124">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting0561.html?mode=quote&amp;f=3&amp;p=31124" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic590f.html?p=31124#p31124" onclick="prompt('Message #80',this.href); return false;">#80</a></span> 
									<a class="unread" href="viewtopic590f.html?p=31124#p31124" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist7557.html?mode=viewprofile&amp;u=4243" class="username">carlsomo</a></strong> &raquo; </span>30 Dec 2013 02:30
			</p>
			
			
			
			<div class="content">It's amazing to me the optimization you have performed and how fast this thing can run in pure batch mode.  All I can say is, &quot;WOW&quot;.  There is a lot of useful code that can apply to non-gaming situations as I see it. It is not that simple to program a little devil that can sit and wait for a key stroke without using a lot of CPU resources but you seem to have pulled it off, Kudos to you.</div>

			
									
									
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
				<div id="p31128" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile31128">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content31128">

						<h3 ><a href="#p31128">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting5037.html?mode=quote&amp;f=3&amp;p=31128" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicd10f.html?p=31128#p31128" onclick="prompt('Message #81',this.href); return false;">#81</a></span> 
									<a class="unread" href="viewtopicd10f.html?p=31128#p31128" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>30 Dec 2013 09:15
			</p>
			
			
			
			<div class="content"><blockquote><div><cite>carlsomo wrote:</cite>It's amazing to me the optimization you have performed and how fast this thing can run in pure batch mode.  All I can say is, &quot;WOW&quot;.  There is a lot of useful code that can apply to non-gaming situations as I see it. It is not that simple to program a little devil that can sit and wait for a key stroke without using a lot of CPU resources but you seem to have pulled it off, Kudos to you.</div></blockquote><br />Thanks for the high praise. I am proud of the work.<br /><br />The controller process indeed uses negligible CPU resources since it spends most of its time within the XCOPY command waiting for a key press, consuming zero CPU.<br /><br />But the game process does use a lot of CPU, I think necessarily. When a game is in progress, it is in an infinite FOR loop that never waits for input, so it consumes 100% of a CPU core. My machine is a quad core, and the task manager reports that the game process uses 25% of my CPU resources (100% of 1 core). All the other processes, including the console host, use negligible resources.<br /><br />When in the menu system, waiting for user input, the game process uses between 6% and 9% of my CPU resources, and the console host uses between 7% and 9% of the game resources. All other processes use virtually 0%. I'm not sure why the console host behaves this way. The game process doesn't use 100% of a core while in the menu because it is in a GOTO loop. Significant time is spent performing file IO while reading nothing from the end of the key file, and while searching for the GOTO label.<br /><br /><br />Dave Benham</div>

			
									
									
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
				<div id="p31143" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile31143">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlista071.html?mode=viewprofile&amp;u=3864" class="username">einstein1969</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searche2bd.html?author_id=3864&amp;sr=posts">762</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 15 Jun 2012 13:16</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Italy, Rome</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content31143">

						<h3 ><a href="#p31143">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting3028.html?mode=quote&amp;f=3&amp;p=31143" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicdeb2-2.html?p=31143#p31143" onclick="prompt('Message #82',this.href); return false;">#82</a></span> 
									<a class="unread" href="viewtopicdeb2-2.html?p=31143#p31143" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlista071.html?mode=viewprofile&amp;u=3864" class="username">einstein1969</a></strong> &raquo; </span>30 Dec 2013 14:25
			</p>
			
			
			
			<div class="content">Dave,<br /><br />in future you must insert a configuration menu for delay/sleep/passive_wait for timing parameter and leave the user choice what type use.<br /><br />example:<br /><br />Timing configuration:<br /><br />Sleep control: &lt;None&gt; &lt;comPort&gt; &lt;Router&gt; &lt;ExternalProgram&gt; &lt;Wscript/Cscript&gt; &lt;....&gt;<br /><br />At this time the pure dos is &lt;None&gt; (i think)<br /><br />I think that every dos game engine must have a similar configuration for reducing cpu usage in loops.<br /><br />einstein1969</div>

			
									
									
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
				<div id="p31156" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile31156">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist5b5d.html?mode=viewprofile&amp;u=3221" style="color: #00AA00;" class="username-coloured">foxidrive</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searchf147.html?author_id=3221&amp;sr=posts">6033</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 10 Feb 2012 02:20</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content31156">

						<h3 ><a href="#p31156">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting3a9c.html?mode=quote&amp;f=3&amp;p=31156" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicaff1.html?p=31156#p31156" onclick="prompt('Message #83',this.href); return false;">#83</a></span> 
									<a class="unread" href="viewtopicaff1.html?p=31156#p31156" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist5b5d.html?mode=viewprofile&amp;u=3221" style="color: #00AA00;" class="username-coloured">foxidrive</a></strong> &raquo; </span>30 Dec 2013 22:27
			</p>
			
			
			
			<div class="content"><blockquote><div><cite>einstein1969 wrote:</cite>Dave,<br /><br />in future you must insert a configuration menu for delay/sleep/passive_wait for timing parameter and leave the user choice what type use.<br /><br />example:<br /><br />Timing configuration:<br /><br />Sleep control: &lt;None&gt; &lt;comPort&gt; &lt;Router&gt; &lt;ExternalProgram&gt; &lt;Wscript/Cscript&gt; &lt;....&gt;<br /><br />At this time the pure dos is &lt;None&gt; (i think)<br /><br />I think that every dos game engine must have a similar configuration for reducing cpu usage in loops.<br /><br />einstein1969</div></blockquote><br /><br />Snake runs blindingly fast if you select that option, and it's not going to drag down any CPU with more than one core.</div>

			
									
									
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
				<div id="p31158" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile31158">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content31158">

						<h3 ><a href="#p31158">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingd859.html?mode=quote&amp;f=3&amp;p=31158" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic025f.html?p=31158#p31158" onclick="prompt('Message #84',this.href); return false;">#84</a></span> 
									<a class="unread" href="viewtopic025f.html?p=31158#p31158" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>30 Dec 2013 23:21
			</p>
			
			
			
			<div class="content"><blockquote><div><cite>einstein1969 wrote:</cite>Dave,<br /><br />in future you must insert a configuration menu for delay/sleep/passive_wait for timing parameter and leave the user choice what type use.<br /><br />example:<br /><br />Timing configuration:<br /><br />Sleep control: &lt;None&gt; &lt;comPort&gt; &lt;Router&gt; &lt;ExternalProgram&gt; &lt;Wscript/Cscript&gt; &lt;....&gt;<br /><br />At this time the pure dos is &lt;None&gt; (i think)<br /><br />I think that every dos game engine must have a similar configuration for reducing cpu usage in loops.<br /><br />einstein1969</div></blockquote><br /><br />Inserting any type of sleep using standard commands available to batch would have a drastic negative impact on the game. The only universal delay I'm aware of is PING, and the minimum delay is ~1 second. But the slowest interval I use in snake is 0.2 second. The fastest interval is 0.03 second. It is also important for the timing to be precise in order to achieve smooth animation.<br /><br />Feel free to modify SNAKE.BAT to make your own version with a sleep mechanism. But that is not something I will ever add.<br /><br /><br />Dave Benham</div>

			
									
									
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
				<div id="p31187" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile31187">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistd31b.html?mode=viewprofile&amp;u=5297" class="username">ashdnazg</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search78b0.html?author_id=5297&amp;sr=posts">2</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 02 Jan 2014 07:48</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content31187">

						<h3 ><a href="#p31187">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting22c8.html?mode=quote&amp;f=3&amp;p=31187" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic00fc.html?p=31187#p31187" onclick="prompt('Message #85',this.href); return false;">#85</a></span> 
									<a class="unread" href="viewtopic00fc.html?p=31187#p31187" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistd31b.html?mode=viewprofile&amp;u=5297" class="username">ashdnazg</a></strong> &raquo; </span>02 Jan 2014 08:16
			</p>
			
			
			
			<div class="content">Hey,<br />Been visiting these forums once in a while for quite some time, but never got around to post until now.<br /><br />First of all, I must say this is certainly the most advanced Batch place I know. (Macros with arguments? Self running Labels? you guys are totally bonkers  <img class="smilies" src="images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> )<br />I got here after coming up with the idea of batch libraries (call :%*) and actually found out I'm waaay behind, so obviously, I learned a lot, and I think now I have the opportunity to contribute something back (that's why I had to post).<br /><br />While this snake game is wonderfully coded, it has the drawback of the nasty flickering screen, but I think that can be remedied.<br /><br />I also encountered the same issue when I participated in a game jam, and decided to use Batch as my language of choice.<br />The game itself is quite terrible, and not very fun, but it does use some interesting concepts, specifically:<br />1) Using pipes to run scripts in parallel (yep, multi-core batch programming).<br />2) Having a temporary file as a display buffer (and outputting it with 'type').<br /><br />Github link: <!-- m --><a class="postlink" href="https://github.com/ashdnazg/ld26">https://github.com/ashdnazg/ld26</a><!-- m --><br />Architecture post: <!-- m --><a class="postlink" href="http://www.ludumdare.com/compo/2013/05/07/combat-debriefing-or-batch-game-architecture-101/">http://www.ludumdare.com/compo/2013/05/ ... cture-101/</a><!-- m --><br /><br />Many thanks!</div>

			
									
									
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
				<div id="p31190" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile31190">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlista071.html?mode=viewprofile&amp;u=3864" class="username">einstein1969</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searche2bd.html?author_id=3864&amp;sr=posts">762</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 15 Jun 2012 13:16</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Italy, Rome</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content31190">

						<h3 ><a href="#p31190">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting4c1d.html?mode=quote&amp;f=3&amp;p=31190" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic6e26.php?p=31190#p31190" onclick="prompt('Message #86',this.href); return false;">#86</a></span> 
									<a class="unread" href="viewtopic6e26.php?p=31190#p31190" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlista071.html?mode=viewprofile&amp;u=3864" class="username">einstein1969</a></strong> &raquo; </span>02 Jan 2014 10:01
			</p>
			
			
			
			<div class="content"><blockquote><div><cite>ashdnazg wrote:</cite>Hey,<br />Been visiting these forums once in a while for quite some time, but never got around to post until now.<br /><br />First of all, I must say this is certainly the most advanced Batch place I know. (Macros with arguments? Self running Labels? you guys are totally bonkers  <img class="smilies" src="images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> )<br />I got here after coming up with the idea of batch libraries (call :%*) and actually found out I'm waaay behind, so obviously, I learned a lot, and I think now I have the opportunity to contribute something back (that's why I had to post).<br /><br />While this snake game is wonderfully coded, it has the drawback of the nasty flickering screen, but I think that can be remedied.<br /><br />I also encountered the same issue when I participated in a game jam, and decided to use Batch as my language of choice.<br />The game itself is quite terrible, and not very fun, but it does use some interesting concepts, specifically:<br />1) Using pipes to run scripts in parallel (yep, multi-core batch programming).<br />2) Having a temporary file as a display buffer (and outputting it with 'type').<br /><br />Github link: https_//github.com/ashdnazg/ld26<br />Architecture post: http_//www.ludumdare.com/compo/2013/05/07/combat-debriefing-or-batch-game-architecture-101/<br /><br />Many thanks!</div></blockquote><br /><br />I had the same idea <a href="viewtopic438f.php?p=30318#p30318" class="postlink">too</a>. But I did not put into practice.<br />I'm glad to know that someone had the same idea and has already worked in this direction!<br /><br />einstein1969</div>

			
									
									
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
				<div id="p31194" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile31194">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content31194">

						<h3 ><a href="#p31194">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting94a0.php?mode=quote&amp;f=3&amp;p=31194" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopica049.php?p=31194#p31194" onclick="prompt('Message #87',this.href); return false;">#87</a></span> 
									<a class="unread" href="viewtopica049.php?p=31194#p31194" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>02 Jan 2014 11:50
			</p>
			
			
			
			<div class="content"><blockquote><div><cite>ashdnazg wrote:</cite>Hey,<br />While this snake game is wonderfully coded, it has the drawback of the nasty flickering screen, but I think that can be remedied.<br /><br />I also encountered the same issue when I participated in a game jam, and decided to use Batch as my language of choice.<br />The game itself is quite terrible, and not very fun, but it does use some interesting concepts, specifically:<br />1) Using pipes to run scripts in parallel (yep, multi-core batch programming).<br />2) Having a temporary file as a display buffer (and outputting it with 'type').<br /></div></blockquote><br />Interesting implementation of a batch game. I'm impressed.<br /><br />If you look at my SNAKE.BAT code (and the explanations I've already written describing how it works), then you will see that I am already addressing your concerns, although I've implemented it in a different way.<br /><br />My code already is doing parallel processing. But I am using START instead of pipes. I have once process for input, and another for logic and display. I don't need parrallel processes to improve speed - I'm already getting 33 frames per second. The 2nd process is only needed to read key presses in a non blocking way.<br /><br />I also have a screen buffer to minimize flicker. Instead of using a text file, I store the screen image in variables, one variable per line. If you look at my draw macro, you will see that it simply loops through the screen variables using a FOR /L loop and echos each line.<br /><br />I went ahead and modified my draw macro to echo each  screen to a text file, and then use TYPE to display the screen as you did. That actually made the flicker much worse.<br /><br />When I play your game, I actually see flicker in the top wall.<br /><br />I don't think it is possible to eliminate flicker if the display requires a CLS before each refresh. At some point the entire console will logically be entirely black, which will always contribute some amount of flicker.<br /><br />The amount of flicker is a complex relationship between the frame rate of the game, coupled with the refresh rate of the display monitor.<br /><br />The only way to eliminate flicker is to somehow reposition the cursor position to prior lines on the screen, and write new information without clearing the rest of the screen. But there is no cabability to do that with native batch on a Windows machine.<br /><br /><br />Dave Benham</div>

			
									
									
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
				<div id="p31195" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile31195">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistd31b.html?mode=viewprofile&amp;u=5297" class="username">ashdnazg</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search78b0.html?author_id=5297&amp;sr=posts">2</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 02 Jan 2014 07:48</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content31195">

						<h3 ><a href="#p31195">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingf5db.php?mode=quote&amp;f=3&amp;p=31195" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicdb29.php?p=31195#p31195" onclick="prompt('Message #88',this.href); return false;">#88</a></span> 
									<a class="unread" href="viewtopicdb29.php?p=31195#p31195" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistd31b.html?mode=viewprofile&amp;u=5297" class="username">ashdnazg</a></strong> &raquo; </span>02 Jan 2014 12:02
			</p>
			
			
			
			<div class="content">Seems like I should've read more of your code/this thread before posting...  <img class="smilies" src="images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> <br /><br />Accept my sincere apologies!<br />(I'll make sure to actually test any further suggestions before posting them)</div>

			
									
									
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
				<div id="p32300" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile32300">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content32300">

						<h3 ><a href="#p32300">Re: SNAKE.BAT 3.4 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting054f.php?mode=quote&amp;f=3&amp;p=32300" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicbabd.php?p=32300#p32300" onclick="prompt('Message #89',this.href); return false;">#89</a></span> 
									<a class="unread" href="viewtopicbabd.php?p=32300#p32300" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>03 Feb 2014 22:05
			</p>
			
			
			
			<div class="content">Version 3.5 is now available in the first post of this thread.<br /><br />There are 2 major enhancements:<br /><br />1) The growth rate of the snake is now configurable to any value from 1 to 10, with a dafault value of 1 segment growth per food eaten. The higher growth rates allow the game to get interesting much sooner. The growth rate option is available within the Graphic options menu. High scores are maintained independently for each growth rate played.<br /><br />Addition of the growth rate option required a modification to the saved game format. SNAKE 3.5 will automatically update existing saved games to the new format when it is launched.<br /><br />2) I've added support for Aacini's CursorPos.exe utility so as to eliminate the irritating screen flicker that results from the CLS during each screen refresh. CursorPos.exe allows the cursor position to be reset to the top left corner without having to clear the screen.<br /><br />The game will continue to play as before with screen flicker if CursorPos.exe is not present. I preserve this functionality so that the game can truly operate as pure batch using only internal and native external commands. But if you are willing to &quot;cheat&quot; and use a non-native external utility, then the game play is dramatically improved by simply placing a copy of CursorPos.exe in the same folder as SNAKE.BAT.<br /><br />The MakeCursorPos.bat script below can create the CursorPos.exe utility. The script combines code from two Aacini posts: <a href="viewtopic32b8.php?p=32241#p32241" class="postlink">Re: modern reply.exe created using only batch</a>, and <a href="viewtopic675a.php?p=17216#p17216" class="postlink">Advanced Batch features via auxiliary .exe programs</a>.<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off<br />call :ExtractBinaryFile CursorPos.exe<br />exit /b<br /><br /><br />rem Extract Binary File from hexadecimal digits placed in a &quot;resource&quot; in this .bat file<br /><br />:ExtractBinaryFile filename.ext&#91;.cab&#93;<br />setlocal EnableDelayedExpansion<br />ECHO Creating %1, please wait...<br />set &quot;start=&quot;<br />set &quot;end=&quot;<br />for /F &quot;tokens=1,3 delims=:=&gt;&quot; %%a in ('findstr /N /B &quot;&lt;/*resource&quot; &quot;%~F0&quot;') do (<br />&nbsp; &nbsp;if not defined start (<br />&nbsp; &nbsp; &nbsp; if &quot;%%~b&quot; equ &quot;%~1&quot; set start=%%a<br />&nbsp; &nbsp;) else if not defined end set end=%%a<br />)<br /><br />(for /F &quot;skip=%start% tokens=1* delims=:&quot; %%a in ('findstr /N &quot;^&quot; &quot;%~F0&quot;') do (<br />&nbsp; &nbsp;if &quot;%%a&quot; == &quot;%end%&quot; goto decodeHexFile<br />&nbsp; &nbsp;echo %%b<br />)) &gt; &quot;%~1.hex&quot;<br />:decodeHexFile<br /><br />rem Modified code based on :genchr subroutine<br />type nul &gt; t.tmp<br />(for /F &quot;usebackq&quot; %%a in (&quot;%~1.hex&quot;) do (<br />&nbsp; &nbsp;set input=%%a<br />&nbsp; &nbsp;set i=0<br />&nbsp; &nbsp;for /L %%I in (0,2,120) do for %%i in (!i!) do if &quot;!input:~%%i,1!&quot; neq &quot;&quot; (<br />&nbsp; &nbsp; &nbsp; set hex=!input:~%%i,2!<br />&nbsp; &nbsp; &nbsp; set /A i+=2<br />&nbsp; &nbsp; &nbsp; if &quot;!hex:~0,1!&quot; neq &quot;&#91;&quot; (<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;set /A chr=0x!hex!<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if not exist !chr!.chr call :genchr !chr!<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;type !chr!.chr<br />&nbsp; &nbsp; &nbsp; ) else (<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for /L %%J in (1,1,5) do for %%i in (!i!) do if &quot;!input:~%%i,1!&quot; neq &quot;&#93;&quot; (<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; set &quot;hex=!hex!!input:~%%i,1!&quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; set /A i+=1<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;)<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if not exist 0.chr call :genchr 0<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for /L %%J in (1,1,!hex:~1!) do type 0.chr<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;set /A i+=1<br />&nbsp; &nbsp; &nbsp; )<br />&nbsp; &nbsp;)<br />)) &gt; &quot;%~1&quot;<br />del *.chr<br />del t.tmp temp.tmp<br />del &quot;%~1.hex&quot;<br /><br />rem Expand created file if extension is .cab<br />set &quot;filename=%~1&quot;<br />if /I &quot;%filename:~-4%&quot; equ &quot;.cab&quot; (<br />&nbsp; &nbsp;expand &quot;%filename%&quot; &quot;%filename:~0,-4%&quot; &gt; NUL<br />&nbsp; &nbsp;del &quot;%filename%&quot;<br />)<br /><br />exit /B<br /><br /><br />:genchr<br />REM This code creates one single byte. Parameter: int<br />REM Teamwork of carlos, penpen, aGerman, dbenham<br />REM Tested under Win2000, XP, Win7, Win8<br />set &quot;options=/d compress=off /d reserveperdatablocksize=26&quot;<br />if %~1 neq 26 (<br />&nbsp; &nbsp;makecab %options% /d reserveperfoldersize=%~1 t.tmp %~1.chr &gt; nul<br />&nbsp; &nbsp;type %~1.chr | ( (for /l %%N in (1,1,38) do pause)&gt;nul &amp; findstr &quot;^&quot; &gt; temp.tmp )<br />&nbsp; &nbsp;&gt;nul copy /y temp.tmp /a %~1.chr /b<br />) else (<br />&nbsp; &nbsp;copy /y nul + nul /a 26.chr /a &gt;nul<br />)<br />exit /B<br /><br /><br />&lt;resource id=&quot;CursorPos.exe&quot;&gt;<br />4D5A900003&#91;3&#93;04&#91;3&#93;FFFF&#91;2&#93;B8&#91;7&#93;40&#91;35&#93;B0&#91;3&#93;0E1FBA0E00B409CD21B8014CCD21546869732070726F6772616D2063616E6E6F74<br />2062652072756E20696E20444F53206D6F64652E0D0D0A24&#91;7&#93;55B5B8FD11D4D6AE11D4D6AE11D4D6AE9FCBC5AE18D4D6AEED<br />F4C4AE13D4D6AE5269636811D4D6AE&#91;8&#93;5045&#91;2&#93;4C010200EB84E24F&#91;8&#93;E0000F010B01050C0002&#91;3&#93;02&#91;7&#93;10&#91;3&#93;10&#91;3&#93;20&#91;4&#93;40&#91;2&#93;10<br />&#91;3&#93;02&#91;2&#93;04&#91;7&#93;04&#91;8&#93;30&#91;3&#93;02&#91;6&#93;03&#91;5&#93;10&#91;2&#93;10&#91;4&#93;10&#91;2&#93;10&#91;6&#93;10&#91;11&#93;1C20&#91;2&#93;28&#91;84&#93;20&#91;2&#93;1C&#91;27&#93;2E74657874&#91;3&#93;4201&#91;3&#93;10&#91;3&#93;02&#91;3&#93;02&#91;14&#93;20&#91;2&#93;60<br />2E7264617461&#91;2&#93;F6&#91;4&#93;20&#91;3&#93;02&#91;3&#93;04&#91;14&#93;40&#91;2&#93;40&#91;8&#93;E806&#91;3&#93;50E81301&#91;2&#93;558BEC83C4E06AF5E81201&#91;2&#93;8945FC8D45E650FF75FCE8<br />FD&#91;3&#93;668B45EC668945E4E8BC&#91;3&#93;E8DB&#91;3&#93;803E0075058B45EAEB5C803E3D750646E8C6&#91;3&#93;668B4DEAE84A&#91;3&#93;8945EAE8B5&#91;3&#93;803E<br />007418803E2C750646E8A5&#91;3&#93;668B4DE4E829&#91;3&#93;668945EC8B5DEA53FF75FCE8AE&#91;3&#93;8D45E650536A018D45E350FF75FCE895&#91;3&#93;0F<br />B645E3C9C333C032DB33D28A164680FA2B740880FA2D750980CB0280CB018A164680FA30720F80FA39770A80EA306BC00A03<br />C2EBE9F6C301740BF6C302740366F7D86603C14EC3CCCCCCCCCCCCCCCCCCCCCCCCCCE847&#91;3&#93;8BF08A06463C2275098A06463C<br />2275F9EB0C8A06463C20740484C075F54EC38A06463C2074F94EC3CCFF2514204000FF2500204000FF2504204000FF250820<br />4000FF250C204000FF25102040&#91;191&#93;6E20&#91;2&#93;8C20&#91;2&#93;9C20&#91;2&#93;BA20&#91;2&#93;D620&#91;2&#93;6020&#91;6&#93;4420&#91;10&#93;E820&#91;3&#93;20&#91;22&#93;6E20&#91;2&#93;8C20&#91;2&#93;9C20&#91;2&#93;BA<br />20&#91;2&#93;D620&#91;2&#93;6020&#91;6&#93;9B004578697450726F6365737300F500476574436F6E736F6C6553637265656E427566666572496E666F<br />&#91;2&#93;6A0147657453746448616E646C65&#91;2&#93;380252656164436F6E736F6C654F757470757443686172616374657241006D025365<br />74436F6E736F6C65437572736F72506F736974696F6E&#91;2&#93;E600476574436F6D6D616E644C696E6541006B65726E656C33322E<br />646C6C&#91;268&#93;<br />&lt;/resource&gt;<br /></code></pre></div><br /><br />Dave Benham</div>

			
									
									
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
				<div id="p32303" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile32303">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistcb12.html?mode=viewprofile&amp;u=1621" class="username">carlos</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searchda66.html?author_id=1621&amp;sr=posts">472</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 20 Aug 2010 13:57</dd>		
		
																<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Chile</dd>
							
							<dd class="profile-contact">
				<strong>Contact:</strong>
				<div class="dropdown-container dropdown-left">
					<a href="#" class="dropdown-trigger" title="Contact carlos">
						<i class="icon fa-commenting-o fa-fw icon-lg" aria-hidden="true"></i><span class="sr-only">Contact carlos</span>
					</a>
					<div class="dropdown">
						<div class="pointer"><div class="pointer-inner"></div></div>
						<div class="dropdown-contents contact-icons">
																																								<div>
																	<a href="https://web.archive.org/web/20180902091521/http://consolesoft.com/" title="Website" class="last-cell">
										<span class="contact-icon phpbb_website-icon">Website</span>
									</a>
																	</div>
																					</div>
					</div>
				</div>
			</dd>
				
		</dl>

		<div class="postbody">
						<div id="post_content32303">

						<h3 ><a href="#p32303">Re: SNAKE.BAT 3.5 - An arcade style game using pure batch</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postinge22c.php?mode=quote&amp;f=3&amp;p=32303" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic6b8f.php?p=32303#p32303" onclick="prompt('Message #90',this.href); return false;">#90</a></span> 
									<a class="unread" href="viewtopic6b8f.php?p=32303#p32303" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistcb12.html?mode=viewprofile&amp;u=1621" class="username">carlos</a></strong> &raquo; </span>04 Feb 2014 00:19
			</p>
			
			
			
			<div class="content">I test the showcursor and works very well using windows 7.<br />Please, @Aacini: you can post your utilities with source code and a license for use it?</div>

			
									
									
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
	
			<a href="postingf816.html?mode=reply&amp;f=3&amp;t=4741" class="button" title="Post a reply">
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
					<a href="viewtopic0157.html?f=3&amp;t=4741&amp;start=75&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>

			<form method="post" action="https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=4741&amp;start=75">
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
			108 posts
							<ul>
	<li class="dropdown-container dropdown-button-control dropdown-page-jump page-jump">
		<a class="button button-icon-only dropdown-trigger" href="#" title="Click to jump to page…" role="button"><i class="icon fa-level-down fa-rotate-270" aria-hidden="true"></i><span class="sr-only">Page <strong>6</strong> of <strong>8</strong></span></a>
		<div class="dropdown">
			<div class="pointer"><div class="pointer-inner"></div></div>
			<ul class="dropdown-contents">
				<li>Jump to page:</li>
				<li class="page-jump-form">
					<input type="number" name="page-number" min="1" max="999999" title="Enter the page number you wish to go to" class="inputbox tiny" data-per-page="15" data-base-url=".&#x2F;viewtopic.php&#x3F;f&#x3D;3&amp;amp&#x3B;t&#x3D;4741" data-start-name="start" />
					<input class="button2" value="Go" type="button" />
				</li>
			</ul>
		</div>
	</li>
			<li class="arrow previous"><a class="button button-icon-only" href="viewtopica70a.html?f=3&amp;t=4741&amp;start=60" rel="prev" role="button"><i class="icon fa-chevron-left fa-fw" aria-hidden="true"></i><span class="sr-only">Previous</span></a></li>
				<li><a class="button" href="viewtopic6484.html?f=3&amp;t=4741" role="button">1</a></li>
			<li class="ellipsis" role="separator"><span>…</span></li>
				<li><a class="button" href="viewtopicdf43-2.html?f=3&amp;t=4741&amp;start=45" role="button">4</a></li>
				<li><a class="button" href="viewtopica70a.html?f=3&amp;t=4741&amp;start=60" role="button">5</a></li>
			<li class="active"><span>6</span></li>
				<li><a class="button" href="viewtopicf487.html?f=3&amp;t=4741&amp;start=90" role="button">7</a></li>
				<li><a class="button" href="viewtopice8cd.html?f=3&amp;t=4741&amp;start=105" role="button">8</a></li>
				<li class="arrow next"><a class="button button-icon-only" href="viewtopicf487.html?f=3&amp;t=4741&amp;start=90" rel="next" role="button"><i class="icon fa-chevron-right fa-fw" aria-hidden="true"></i><span class="sr-only">Next</span></a></li>
	</ul>
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

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?p=32303 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:22 GMT -->
</html>
