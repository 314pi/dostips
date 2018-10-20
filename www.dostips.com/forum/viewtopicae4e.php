<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?p=57929 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Create a script to add a user to certain windows groups - DosTips.com</title>


	<link rel="canonical" href="viewtopic23ae.php?t=8815">

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
		
		
<h2 class="topic-title"><a href="viewtopicaf7b.html?f=3&amp;t=8815">Create a script to add a user to certain windows groups</a></h2>
<!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->
<div style="display: none !important;">Discussion forum for all Windows batch related topics.<br /></div>
<p>
	<strong>Moderator:</strong> <a href="memberlista6a8.html?mode=viewprofile&amp;u=5" class="username">DosItHelp</a>
</p>


<div class="action-bar bar-top">
	
			<a href="posting96cf.php?mode=reply&amp;f=3&amp;t=8815" class="button" title="Post a reply">
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
					<a href="viewtopic0b26.php?f=3&amp;t=8815&amp;view=print" title="Print view" accesskey="p">
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
				<input type="hidden" name="t" value="8815" />
<input type="hidden" name="sf" value="msgonly" />

			</fieldset>
			</form>
		</div>
	
			<div class="pagination">
			3 posts
							&bull; Page <strong>1</strong> of <strong>1</strong>
					</div>
		</div>




<div id="subsilver-nav-topic">
	<div class="inner"><div class="post has-profile">
		<div class="leftsided postbody subsilver-topic-title">Message</div>
		<div class="leftsided postprofile subsilver-topic-author">Author</div>
	</div></div>
</div>

			<div id="p57921" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57921">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist57f0.html?mode=viewprofile&amp;u=8963" class="username">deniscalanca</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search4bd8.php?author_id=8963&amp;sr=posts">11</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 26 Oct 2017 11:30</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57921">

						<h3 class="first"><a href="#p57921">Create a script to add a user to certain windows groups</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingef60.php?mode=quote&amp;f=3&amp;p=57921" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic4f11.php?p=57921#p57921" onclick="prompt('Message #1',this.href); return false;">#1</a></span> 
									<a class="unread" href="viewtopic4f11.php?p=57921#p57921" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist57f0.html?mode=viewprofile&amp;u=8963" class="username">deniscalanca</a></strong> &raquo; </span>03 Sep 2018 13:39
			</p>
			
			
			
			<div class="content"><strong class="text-strong">I'm trying to create a script to outomatize a custom installation of Windows where I put a script at startup and when I initialize the image the first did it perform certain pre-defined actions in the script, one of them would be to define which local groups the user belongs to, initially I tested by setting the group as follows:</strong><br>
<br>
<br>
@echo off<br>
<br>
set "i=0"<br>
<br>
set "usr1_name=user1"<br>
<br>
set "usr1_g_admin=yes"<br>
set "usr1_g_user_rdesktop=yes"<br>
set "usr1_g_user_adv=no"<br>
set "usr1_g_users=no"<br>
<br>
set "net=%windir%\System32\net.exe"<br>
<br>
for /f %%a in ('"%net% localgroup "Administrators" |findstr /i "%usr1_name%""') do set /a i=%i%+1<br>
		if "%i%" == "1" (<br>
			if /i "%usr1_g_admin%" == "no" (<br>
				%net% localgroup "Adminsitrators" "%usr1_name%" /delete &gt; nul<br>
				pause<br>
			)<br>
		)	else	if "%i%" == "0" (<br>
						if /i "%usr1_g_admin%" == "yes" (<br>
							%net% localgroup "Administradores" "%usr1_name%" /add &gt; nul<br>
							pause<br>
						)<br>
					)<br>
<br>
<br>
<strong class="text-strong">OK, that way it works, but in Windows there are many groups, and as I said I would like to define which group that user belongs only by setting yes or no in the script, so I thought of something like:</strong><br>
<br>
<br>
@echo off<br>
<br>
set "i=0"<br>
<br>
set "usr1_name=user1"<br>
<br>
set "usr1_g_admin=yes"<br>
set "usr1_g_user_rdesktop=yes"<br>
set "usr1_g_user_adv=no"<br>
set "usr1_g_users=no"<br>
<br>
set "net=%windir%\System32\net.exe"<br>
<br>
:: Groups Windows<br>
set "allgroupwin="Administrators","Remote Desktop Users","Power Users","Users""<br>
:: Variable Groups<br>
set "allgroupimg="usr1_g_admin","usr1_g_user_rdesktop","usr1_g_user_adv","usr1_g_users""<br>
<br>
for /d %%a in (%allgroupwin%) do (<br>
	for /d %%b in (%allgroupimg%) do (<br>
		for /f %%b in ('"net localgroup %%a |findstr /i "%usr1_name%""') do (<br>
			set /a i=%i%+1<br>
			echo %%a<br>
			echo %%b<br>
			pause<br>
			if "%i%" == "1" (<br>
				if "%%b" == "no" (<br>
					%net% localgroup %%a "%usr1_name%" /delete &gt; nul<br>
				) <br>
			)	else	if "%i%" == "0" (<br>
							if "%%b" == "yes" (<br>
								%net% localgroup %%a "%usr1_name%" /add &gt; nul<br>
							) <br>
						)<br>
		)<br>
		<br>
	)<br>
)<br>
<br>
<br>
<strong class="text-strong">The code above does not work, but I think the reasoning would be more or less this, so I'd like some help, to know if there is any way to accomplish this in a simpler way.</strong></div>

			
									
									
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
				<div id="p57923" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57923">
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
						<div id="post_content57923">

						<h3 ><a href="#p57923">Re: Create a script to add a user to certain windows groups</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting9386.php?mode=quote&amp;f=3&amp;p=57923" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicfae5.php?p=57923#p57923" onclick="prompt('Message #2',this.href); return false;">#2</a></span> 
									<a class="unread" href="viewtopicfae5.php?p=57923#p57923" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberliste2cd.html?mode=viewprofile&amp;u=2453" class="username">Ed Dyreen</a></strong> &raquo; </span>03 Sep 2018 17:31
			</p>
			
			
			
			<div class="content">Not a fan of indention nor code tags then are u hu ? <img class="smilies" src="images/smilies/icon_biggrin.gif" width="15" height="15" alt=":D" title="Very Happy"><br>

<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>set "net=%windir%\System32\net.exe"
</code></pre></div>
This line concerns me, why are u doing that ?<br>

<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off

set "usr1_name=user1"
set "usr1_g_admin=yes"
set "usr1_g_user_rdesktop=yes"
set "usr1_g_user_adv=no"
set "usr1_g_users=no"

:: Groups Windows
set "allgroupwin="Administrators","Remote Desktop Users","Power Users","Users""

:: Variable Groups
set "allgroupimg="usr1_g_admin","usr1_g_user_rdesktop","usr1_g_user_adv","usr1_g_users""

set /A i = 0
::
for /D %%a in (

	%allgroupwin%

) do 	for /D %%b in (

	%allgroupimg%

) do 	for /F %%b in (

	'"net.EXE localgroup %%a |findstr.EXE /I "%usr1_name%""'

) do (
	set /A i = i + 1

	echo.%%a
	echo.%%b
	pause

	if "%i%" == "1" (

		if "%%b" == "no" &gt;nul net.EXE localgroup %%a "%usr1_name%" /delete

	) else	if "%i%" == "0" (

		if "%%b" == "yes" &gt;nul net.EXE localgroup %%a "%usr1_name%" /add
	)
)
</code></pre></div>
What are you trying to achieve with the variable i ? You initialize it with zero then add 1 and then do a comparison i == 0 which will never happen and the comparison with 1 will only happen once and then never again that is assuming you did it correctly, because you also did not use delayed expansion so the comparison will always remain 0 == 0 because it's inside a code block.<br>
<br>
I stop here because your code is confusing me and your question is not precise enough for me to figure out exactly your plan. set "usr1_name=user1" confuses me to the point where i wonder whether in the future there will be a user set "usr2_name=user2" etc... and if that is the reason for the existence of i</div>

			
									
									
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
				<div id="p57929" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57929">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist57f0.html?mode=viewprofile&amp;u=8963" class="username">deniscalanca</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search4bd8.php?author_id=8963&amp;sr=posts">11</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 26 Oct 2017 11:30</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57929">

						<h3 ><a href="#p57929">Re: Create a script to add a user to certain windows groups</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingccf5.php?mode=quote&amp;f=3&amp;p=57929" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicae4e.php?p=57929#p57929" onclick="prompt('Message #3',this.href); return false;">#3</a></span> 
									<a class="unread" href="viewtopicae4e.php?p=57929#p57929" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist57f0.html?mode=viewprofile&amp;u=8963" class="username">deniscalanca</a></strong> &raquo; </span>04 Sep 2018 06:12
			</p>
			
			
			
			<div class="content">Sorry, maybe I did not express myself well, come on, there will be more users that can be set, it will not be user1, it can be any name, user1 was just an example, I usually use the variable as: (set "var1 = var2") so I do not have problems when using space (set "var1 = var test"), so I usually standardize, this script was just a piece of what I need, there is a piece where the user is created, when creating a user need to set the which local Windows groups it belongs to, then enter the line in which you mentioned and the variables that I will use in the "for" to be able to check if it will belong and if it does not belong add, and if it belongs and in the variable is set do not remove , I know that by default when adding a new user Windows only adds to the users group, but I work with images that may contain pre-defined users, and in this way I would not need to generate a new image, just change in the script before starting the group. access O:<br>
<br>
set "usr1_name = user1"<br>
set "usr1_g_admin = yes"<br>
set "usr1_g_user_rdesktop = yes"<br>
set "usr1_g_user_adv = no"<br>
set "usr1_g_users = no"<br>
<br>
:: Windows Groups<br>
set "allgroupwin =" Administrators "," Remote Desktop Users "," Power Users "," Users "<br>
<br>
:: Variable Groups<br>
set "allgroupimg =" usr1_g_admin "," usr1_g_user_rdesktop "," usr1_g_user_adv "," usr1_g_users ""<br>
<br>
My intention was to know if it is possible to perform a "for" that will go through all the groups listed in the "allgroupwin" variable, then perform another one that will go through the "allgroupimg" variable, in my mind that would look something like (Ex: Administrators = usr1_g_admin, Remote Desktop Users=usr1_g_user_rdesktop...), in the third "for" the first two "for" would be with the equivalent variables, already in the third "for" would test if the user belongs to the group or not and get this answer in some way, and using this to do the verification, if it belongs and the variable related to the group set how not to remove, if not in the group and has set it to yes add, I do not know if I was able to clarify what I need, but I hope you have.</div>

			
									
									
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
	
			<a href="posting96cf.php?mode=reply&amp;f=3&amp;t=8815" class="button" title="Post a reply">
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
					<a href="viewtopic0b26.php?f=3&amp;t=8815&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>

			<form method="post" action="https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8815">
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
			3 posts
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

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?p=57929 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:16 GMT -->
</html>
