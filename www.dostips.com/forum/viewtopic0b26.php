<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8815&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex" />

<title>DosTips.com &bull; Create a script to add a user to certain windows groups</title>

<link href="styles/AllanStyle-SUBSILVER/theme/print.css" rel="stylesheet">
</head>
<body id="phpbb">
<div id="wrap" class="wrap">
	<a id="top" class="top-anchor" accesskey="t"></a>

	<div id="page-header">
		<h1>DosTips.com</h1>
		<p>A Forum all about DOS Batch<br /><a href="index-2.html">https://www.dostips.com/forum/</a></p>

		<h2>Create a script to add a user to certain windows groups</h2>
		<p><a href="viewtopicaf7b.html?f=3&amp;t=8815">https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8815</a></p>
	</div>

	<div id="page-body" class="page-body">
		<div class="page-number">Page <strong>1</strong> of <strong>1</strong></div>
					<div class="post">
				<h3>Create a script to add a user to certain windows groups</h3>
				<div class="date">Posted: <strong>03 Sep 2018 13:39</strong></div>
				<div class="author">by <strong>deniscalanca</strong></div>
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
			<hr />
					<div class="post">
				<h3>Re: Create a script to add a user to certain windows groups</h3>
				<div class="date">Posted: <strong>03 Sep 2018 17:31</strong></div>
				<div class="author">by <strong>Ed Dyreen</strong></div>
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
			<hr />
					<div class="post">
				<h3>Re: Create a script to add a user to certain windows groups</h3>
				<div class="date">Posted: <strong>04 Sep 2018 06:12</strong></div>
				<div class="author">by <strong>deniscalanca</strong></div>
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
			<hr />
			</div>

	<div id="page-footer" class="page-footer">
		<div class="page-number">All times are <span title="UTC-6">UTC-06:00</span><br />Page <strong>1</strong> of <strong>1</strong></div>
		<div class="copyright">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>
	</div>
</div>

</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8815&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:11 GMT -->
</html>
