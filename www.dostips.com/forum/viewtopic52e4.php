<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?t=8521 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>more tricks with certutil - DosTips.com</title>


	<link rel="canonical" href="viewtopic52e4.php?t=8521">

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
		
		
<h2 class="topic-title"><a href="viewtopic0ae5.html?f=3&amp;t=8521">more tricks with certutil</a></h2>
<!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->
<div style="display: none !important;">Discussion forum for all Windows batch related topics.<br /></div>
<p>
	<strong>Moderator:</strong> <a href="memberlista6a8.html?mode=viewprofile&amp;u=5" class="username">DosItHelp</a>
</p>


<div class="action-bar bar-top">
	
			<a href="posting7901.php?mode=reply&amp;f=3&amp;t=8521" class="button" title="Post a reply">
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
					<a href="viewtopic5ab5.php?f=3&amp;t=8521&amp;view=print" title="Print view" accesskey="p">
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
				<input type="hidden" name="t" value="8521" />
<input type="hidden" name="sf" value="msgonly" />

			</fieldset>
			</form>
		</div>
	
			<div class="pagination">
			10 posts
							&bull; Page <strong>1</strong> of <strong>1</strong>
					</div>
		</div>




<div id="subsilver-nav-topic">
	<div class="inner"><div class="post has-profile">
		<div class="leftsided postbody subsilver-topic-title">Message</div>
		<div class="leftsided postprofile subsilver-topic-author">Author</div>
	</div></div>
</div>

			<div id="p56536" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile56536">
			<dt class="no-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistfcd9.html?mode=viewprofile&amp;u=4919" class="username">npocmaka_</a>							</dt>

									
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha36f.php?author_id=4919&amp;sr=posts">473</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 24 Jun 2013 17:10</dd>		
		
																<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Bulgaria</dd>
							
							<dd class="profile-contact">
				<strong>Contact:</strong>
				<div class="dropdown-container dropdown-left">
					<a href="#" class="dropdown-trigger" title="Contact npocmaka_">
						<i class="icon fa-commenting-o fa-fw icon-lg" aria-hidden="true"></i><span class="sr-only">Contact npocmaka_</span>
					</a>
					<div class="dropdown">
						<div class="pointer"><div class="pointer-inner"></div></div>
						<div class="dropdown-contents contact-icons">
																																								<div>
																	<a href="http://stackoverflow.com/questions/28043589/how-can-i-compres-zip-and-uncopress-unzip-files-and-folders-with-batch-f" title="Website" class="last-cell">
										<span class="contact-icon phpbb_website-icon">Website</span>
									</a>
																	</div>
																					</div>
					</div>
				</div>
			</dd>
				
		</dl>

		<div class="postbody">
						<div id="post_content56536">

						<h3 class="first"><a href="#p56536">more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingfb7d.php?mode=quote&amp;f=3&amp;p=56536" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic8c7f.php?p=56536#p56536" onclick="prompt('Message #1',this.href); return false;">#1</a></span> 
									<a class="unread" href="viewtopic8c7f.php?p=56536#p56536" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistfcd9.html?mode=viewprofile&amp;u=4919" class="username">npocmaka_</a></strong> &raquo; </span>26 Apr 2018 06:07
			</p>
			
			
			
			<div class="content"><a href="https://stackoverflow.com/a/28250793/388389" class="postlink">Here</a>  the SO user showed me a not so well <a href="https://msdn.microsoft.com/en-us/library/windows/desktop/aa379887(v=vs.85).aspx" class="postlink">documented </a> additional switch of the certutil -encodehex. So you can pass an additional number as a format flag. Here they are:<br>
<br>
certutil -encodehex -f strings64.exe strings12.hex 12    -  one line HEX value without spaces , columns ,addresses<br>
certutil -encodehex -f strings64.exe strings5.hex 5    -  without the addresses<br>
certutil -encodehex -f strings64.exe strings2.hex 2    -  pure binary - pointless according to me.<br>
certutil -encodehex -f strings64.exe strings1.hex 1  - base64 without certificate headers<br>
certutil -encodehex -f strings64.exe strings0.hex 0 - base64 with certificate headers<br>
certutil -encodehex -f strings64.exe strings4.hex 4 - in columns with spaces , without the characters and the addresses<br>
certutil -encodehex -f strings64.exe strings7.hex 7 - base64 - X509 without headers (slightly bigger than the normal b64)<br>
certutil -encodehex -f strings64.exe strings8.hex 8  - base64 - x509 with headers <br>
<br>
I think these are all. I (still) don't know how X509 can be decoded.</div>

			
									
									
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
				<div id="p56538" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile56538">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content56538">

						<h3 ><a href="#p56538">Re: more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting9b1f.php?mode=quote&amp;f=3&amp;p=56538" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicc8eb.php?p=56538#p56538" onclick="prompt('Message #2',this.href); return false;">#2</a></span> 
									<a class="unread" href="viewtopicc8eb.php?p=56538#p56538" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>26 Apr 2018 09:31
			</p>
			
			
			
			<div class="content"><img class="smilies" src="images/smilies/icon_eek.gif" width="15" height="15" alt=":shock:" title="Shocked"> <br>
Wonderful - Thankyou <img class="smilies" src="images/smilies/icon_exclaim.gif" width="15" height="15" alt=":!:" title="Exclamation">  <img class="smilies" src="images/smilies/icon_biggrin.gif" width="15" height="15" alt=":D" title="Very Happy"></div>

			
									
									
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
				<div id="p56883" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile56883">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlistfcd5.html?mode=viewprofile&amp;u=4915" style="color: #00AA00;" class="username-coloured">penpen</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search1bf7.html?author_id=4915&amp;sr=posts">1612</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 23 Jun 2013 06:15</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Germany</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content56883">

						<h3 ><a href="#p56883">Re: more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting8cd7.php?mode=quote&amp;f=3&amp;p=56883" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopicc279.php?p=56883#p56883" onclick="prompt('Message #3',this.href); return false;">#3</a></span> 
									<a class="unread" href="viewtopicc279.php?p=56883#p56883" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlistfcd5.html?mode=viewprofile&amp;u=4915" style="color: #00AA00;" class="username-coloured">penpen</a></strong> &raquo; </span>22 May 2018 16:00
			</p>
			
			
			
			<div class="content">I just noticed that "certutil -encodehex -f strings64.exe strings8.hex 8" doesn't give "base64 - x509 with headers", but does the same as "number 4" ("in columns with spaces , without the characters and the addresses") at least on my win10.<br>
<br>
penpen</div>

			
									
									
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
				<div id="p57918" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57918">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57918">

						<h3 ><a href="#p57918">Re: more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting036e.php?mode=quote&amp;f=3&amp;p=57918" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic3e69.php?p=57918#p57918" onclick="prompt('Message #4',this.href); return false;">#4</a></span> 
									<a class="unread" href="viewtopic3e69.php?p=57918#p57918" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>03 Sep 2018 10:55
			</p>
			
			
			
			<div class="content">I ran a bunch of tests on Windows 10 with various flavors of -encodehex, and here is what I found.<br>
<br>
<span style="font-size: 150%; line-height: normal">General notes</span><br>
<br>
CERTUTIL has a surprisingly low limit to the size file it can encode/decode. I'm not sure about the exact value, but the encode limit is only in the tens of millions range.<br>
<br>
CERTUTIL accepts both decimal and hex notation for the type argument, but not octal.<br>
Hex values must be prefixed with 0x<br>
Since octal is not recognized, it is safe to prefix any decimal value with zeros.<br>
<br>
The type argument seems to be flag based, but in a very freaky, inscrutable way - the meaning of low bits changes depending on the value of other bits. but the top two high order bits have a constant meaning:<br>
<br>
<strong class="text-strong">0x40000000 bit</strong> - The output is encoded on a single line, without any line terminator.<br>
Depending on the format, the result may not be able to be decoded with CERTUTIL.<br>
Documentation states this flag is not supported by XP.<br>
<br>
<strong class="text-strong">0x80000000 bit</strong> - Use \n line terminators instead of \r\n<br>
Note that CERTUTIL only accepts positive numbers, so the type value cannot be computed by SET /A, else it will be converted into a negative value.<br>
It is best to specify a type with this flag using hex.<br>
<br>
The 0x80000000 and 0x40000000 bits can be ORed with any of the values documented below.<br>
<br>
Unless the 0x40000000 bit is set, any -encodehex result can be decoded using either -decode or -decodehex (whichever is appropriate).<br>
<br>
<span style="font-size: 150%; line-height: normal">Hex Formats</span><br>
<br>
Generally, each line of output represents 16 bytes of input (except for the last line). The hex pairs are delimited by spaces, with two spaces between the 8th and 9th bytes.<br>
<br>
If the 1 bit is set, then 3 spaces are appended to each line, followed by the ASCII string representation, with control codes and non-ASCII bytes represented as dots.<br>
<br>
If the 2 bit is set, then the hex address is prepended. The address is always represented with at least 4 hex digits (possibly left 0 padded), and a max of 7 hex digits.<br>
<br>
<strong class="text-strong">0x4 </strong>- Formatted hex only<br>
<strong class="text-strong">0x5</strong> - Formatted hex + trailing ASCII<br>
<strong class="text-strong">0x8</strong> - Formatted hex only (same as 0x4)<br>
<strong class="text-strong">0xA</strong> - Formatted hex + prepended address<br>
<strong class="text-strong">0xB</strong> - Formatted hex + prepended address + trailing ASCII<br>
<strong class="text-strong">0xC</strong> - Raw hex on a single line, without any spaces between bytes (not supported by XP)<br>
<br>
<span style="font-size: 150%; line-height: normal">Base 64 formats</span><br>
<br>
Generally all encodings are identical, with 64 bytes per line in the output, and = padding appended as needed, regardless which type is chosen. The only thing that changes is the format of the beginning/ending headers. The only exception is the undocumented 0xD type.<br>
<br>
<strong class="text-strong">0x0</strong> - Certificate headers<br>
-----BEGIN CERTIFICATE-----<br>
-----END CERTIFICATE-----<br>
<br>
<strong class="text-strong">0x1</strong> - No headers<br>
<br>
<strong class="text-strong">0x3</strong> - Request headers<br>
-----BEGIN NEW CERTIFICATE REQUEST-----<br>
-----END NEW CERTIFICATE REQUEST-----<br>
<br>
<strong class="text-strong">0x6</strong> - No headers (same as 0x1)<br>
<br>
<strong class="text-strong">0x7</strong> - No headers (same as 0x1)<br>
<br>
<strong class="text-strong">0x9</strong> - X.509 CRL headers. Note that no encryption is done, it simply changes the header.<br>
-----BEGIN X509 CRL-----<br>
-----END X509 CRL-----<br>
<br>
<strong class="text-strong">0xD</strong> - No headers, base64url format<br>
Index 62 is represented as - (dash) instead of +<br>
Index 63 is represented as _ (underscore) instead of /<br>
No = padding at the end<br>
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
				<div id="p57924" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57924">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search9642.html?author_id=5056&amp;sr=posts">853</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 06 Sep 2013 21:28</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Virginia, United States</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57924">

						<h3 ><a href="#p57924">Re: more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting1574.php?mode=quote&amp;f=3&amp;p=57924" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic7c6d.php?p=57924#p57924" onclick="prompt('Message #5',this.href); return false;">#5</a></span> 
									<a class="unread" href="viewtopic7c6d.php?p=57924#p57924" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a></strong> &raquo; </span>03 Sep 2018 19:42
			</p>
			
			
			
			<div class="content"><blockquote><div><cite><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258">dbenham</a> wrote: <a href="viewtopic3e69.php?p=57918#p57918" data-post-id="57918" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 10:55</div></cite>CERTUTIL has a surprisingly low limit to the size file it can encode/decode. I'm not sure about the exact value, but the encode limit is only in the tens of millions range.</div></blockquote>

Through trial and error, I've determined that the limit is 74472684 bytes. I'm guessing that there's an output file size threshold of 100000000 bytes.</div>

			
									
									
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
				<div id="p57925" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57925">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search1322.html?author_id=2988&amp;sr=posts">3970</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 23 Dec 2011 13:59</dd>		
		
						
						
		</dl>

		<div class="postbody">
						<div id="post_content57925">

						<h3 ><a href="#p57925">Re: more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postinga75e.php?mode=quote&amp;f=3&amp;p=57925" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopica9d5.php?p=57925#p57925" onclick="prompt('Message #6',this.href); return false;">#6</a></span> 
									<a class="unread" href="viewtopica9d5.php?p=57925#p57925" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist2675.html?mode=viewprofile&amp;u=2988" style="color: #00AA00;" class="username-coloured">Squashman</a></strong> &raquo; </span>03 Sep 2018 20:42
			</p>
			
			
			
			<div class="content"><blockquote><div><cite><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056">ShadowThief</a> wrote: <a href="viewtopic7c6d.php?p=57924#p57924" data-post-id="57924" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 19:42</div></cite>
<blockquote><div><cite><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258">dbenham</a> wrote: <a href="viewtopic3e69.php?p=57918#p57918" data-post-id="57918" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 10:55</div></cite>CERTUTIL has a surprisingly low limit to the size file it can encode/decode. I'm not sure about the exact value, but the encode limit is only in the tens of millions range.</div></blockquote>

Through trial and error, I've determined that the limit is 74472684 bytes. I'm guessing that there's an output file size threshold of 100000000 bytes.
</div></blockquote>
I thought I remember reading somewhere it was roughly 75MB.</div>

			
									
									
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
				<div id="p57926" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57926">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search9642.html?author_id=5056&amp;sr=posts">853</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 06 Sep 2013 21:28</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Virginia, United States</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57926">

						<h3 ><a href="#p57926">Re: more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingb4a6.php?mode=quote&amp;f=3&amp;p=57926" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic5b83.php?p=57926#p57926" onclick="prompt('Message #7',this.href); return false;">#7</a></span> 
									<a class="unread" href="viewtopic5b83.php?p=57926#p57926" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a></strong> &raquo; </span>03 Sep 2018 22:20
			</p>
			
			
			
			<div class="content"><img src="../../i.imgur.com/b8kmEAr.png" class="postimage" alt="Image"><br>
<br>
It's possible that your mileage may vary, but I don't know why it would.</div>

			
									
									
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
				<div id="p57927" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57927">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57927">

						<h3 ><a href="#p57927">Re: more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="posting4e42.php?mode=quote&amp;f=3&amp;p=57927" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic58bf.php?p=57927#p57927" onclick="prompt('Message #8',this.href); return false;">#8</a></span> 
									<a class="unread" href="viewtopic58bf.php?p=57927#p57927" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>03 Sep 2018 23:24
			</p>
			
			
			
			<div class="content"><blockquote><div><cite><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056">ShadowThief</a> wrote: <a href="viewtopic5b83.php?p=57926#p57926" data-post-id="57926" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 22:20</div></cite>
It's possible that your mileage may vary, but I don't know why it would.
</div></blockquote>
Mine varied <img class="smilies" src="images/smilies/icon_twisted.gif" width="15" height="15" alt=":twisted:" title="Twisted Evil"> <br>
<br>
I tried to use encodehex instead of encode, and it failed well before 74 MB,</div>

			
									
									
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
				<div id="p57931" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile57931">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="searcha86d.html?author_id=2258&amp;sr=posts">2152</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 12 Feb 2011 21:02</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> United States (east coast)</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57931">

						<h3 ><a href="#p57931">Re: more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postingb07a.php?mode=quote&amp;f=3&amp;p=57931" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic6d41.php?p=57931#p57931" onclick="prompt('Message #9',this.href); return false;">#9</a></span> 
									<a class="unread" href="viewtopic6d41.php?p=57931#p57931" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258" style="color: #00AA00;" class="username-coloured">dbenham</a></strong> &raquo; </span>04 Sep 2018 13:55
			</p>
			
			
			
			<div class="content">I've posted a convenient HEXDUMP.BAT utility that utilizes these "new" CERTUTIL -encodeHex formatting options at <a href="viewtopic239b.html?f=3&amp;t=8816" class="postlink">viewtopic.php?f=3&amp;t=8816</a><br>
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
				<div id="p57932" class="post has-profile bg1">
		<div class="inner">

		<dl class="postprofile" id="profile57932">
			<dt class="has-profile-rank no-avatar">
				<div class="avatar-container">
																			</div>
								<a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a>							</dt>

						<dd class="profile-rank">Expert</dd>			
		<dd class="profile-posts"><strong>Posts:</strong> <a href="search9642.html?author_id=5056&amp;sr=posts">853</a></dd>		<dd class="profile-joined"><strong>Joined:</strong> 06 Sep 2013 21:28</dd>		
		
											<dd class="profile-custom-field profile-phpbb_location"><strong>Location:</strong> Virginia, United States</dd>
							
						
		</dl>

		<div class="postbody">
						<div id="post_content57932">

						<h3 ><a href="#p57932">Re: more tricks with certutil</a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="postinge9d2.php?mode=quote&amp;f=3&amp;p=57932" title="Reply with quote" class="button button-icon-only">
								<i class="icon fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author"><span class="posti"><a href="viewtopic92a8.php?p=57932#p57932" onclick="prompt('Message #10',this.href); return false;">#10</a></span> 
									<a class="unread" href="viewtopic92a8.php?p=57932#p57932" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056" class="username">ShadowThief</a></strong> &raquo; </span>04 Sep 2018 17:00
			</p>
			
			
			
			<div class="content"><blockquote><div><cite><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258">dbenham</a> wrote: <a href="viewtopic58bf.php?p=57927#p57927" data-post-id="57927" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 23:24</div></cite>
<blockquote><div><cite><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056">ShadowThief</a> wrote: <a href="viewtopic5b83.php?p=57926#p57926" data-post-id="57926" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 22:20</div></cite>
It's possible that your mileage may vary, but I don't know why it would.
</div></blockquote>
Mine varied <img class="smilies" src="images/smilies/icon_twisted.gif" width="15" height="15" alt=":twisted:" title="Twisted Evil"> <br>
<br>
I tried to use encodehex instead of encode, and it failed well before 74 MB,
</div></blockquote>

Indeed. It seems that the limit for encodehex is 21510272 bytes.</div>

			
									
									
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
	
			<a href="posting7901.php?mode=reply&amp;f=3&amp;t=8521" class="button" title="Post a reply">
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
					<a href="viewtopic5ab5.php?f=3&amp;t=8521&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>

			<form method="post" action="https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8521">
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
			10 posts
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

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?t=8521 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:02 GMT -->
</html>
