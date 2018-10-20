<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=4741&start=90&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex" />

<title>DosTips.com &bull; SNAKE.BAT 4.1 - An arcade style game using pure batch - Page 7</title>

<link href="styles/AllanStyle-SUBSILVER/theme/print.css" rel="stylesheet">
</head>
<body id="phpbb">
<div id="wrap" class="wrap">
	<a id="top" class="top-anchor" accesskey="t"></a>

	<div id="page-header">
		<h1>DosTips.com</h1>
		<p>A Forum all about DOS Batch<br /><a href="index-2.html">https://www.dostips.com/forum/</a></p>

		<h2>SNAKE.BAT 4.1 - An arcade style game using pure batch</h2>
		<p><a href="viewtopic6484.html?f=3&amp;t=4741">https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=4741</a></p>
	</div>

	<div id="page-body" class="page-body">
		<div class="page-number">Page <strong>7</strong> of <strong>8</strong></div>
					<div class="post">
				<h3>Re: SNAKE.BAT 3.5 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>04 Feb 2014 01:31</strong></div>
				<div class="author">by <strong>foxidrive</strong></div>
				<div class="content">Nice modification Dave - I love the growth rate.  6 FTW. <img class="smilies" src="images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />I have to say that on my pretty swift box there is no difference with CursorPos or not.  No flicker either way.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.6 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>13 Apr 2014 21:44</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">I've posted version 3.6 to the top of the thread. It is a trivial release. The only change is the game will now pause before exiting under the following conditions:<br /><br />1) CursorPos.exe is not in the game folder, so the game potentially played with screen flicker.<br />2) The console will close upon game exit because the game was launched by double clicking the game or a shortcut.<br /><br />The conditional pause is added so that players can view the message about CursorPos.exe before the console closes.<br /><br /><br />Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.7 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>03 Aug 2014 09:01</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">I've posted version 3.7 to the top of the thread.<br /><br />The only change is to reduce the screen flicker when playing without CursorPos.exe by building the entire screen as a single variable with line feeds before using CLS and ECHOing the screen content. This was in response to einstein1969's post: <a href="viewtopic8e64.php?f=3&amp;t=5809" class="postlink">Anti-Flicker in dos batch</a><br /><br /><br />Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.7 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>08 Aug 2014 06:25</strong></div>
				<div class="author">by <strong>einstein1969</strong></div>
				<div class="content"><blockquote><div><cite>dbenham wrote:</cite>I've posted version 3.7 to the top of the thread.<br /><br />The only change is to reduce the screen flicker when playing without CursorPos.exe by building the entire screen as a single variable with line feeds before using CLS and ECHOing the screen content. This was in response to einstein1969's post: <a href="viewtopic8e64.php?f=3&amp;t=5809" class="postlink">Anti-Flicker in dos batch</a><br /><br /><br />Dave Benham</div></blockquote><br /><br />Hi Dave,<br /><br />I have probed the 3.7 version and is very beautyful!<br /><br />In my example i use the command SET for display on screen<br /><br />The SET command is more speedy of every other.<br /><br />But for your scope is not necessary because the env should be emptied, and the code would be too complex.<br /><br />But there is a problem... On my pc windows 7 the FIRST LINE flicker/blink. I have not probed on xp.<br /><br />There is a trick for this <img class="smilies" src="images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" /> <br /><br />start print from the SECOND LINE but the first line must not be empty!<br /><br />For the first line use a hidden character ALT+255 &quot;ÿ&quot; for example! or LF (I have not probed)<br /><br />If you use timer coalesce this is not necessary.<br /><br />Could you confirm this?<br /><br />EDIT: I have probed and i have changed the line<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>set screen=%\n%<br /></code></pre></div><br />width<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>set screen=ÿ!LF!%\n%<br /></code></pre></div><br />and the line not blink...<br /><br />einstein1969</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.7 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>08 Aug 2014 06:41</strong></div>
				<div class="author">by <strong>foxidrive</strong></div>
				<div class="content">I hope you don't take offense at this but I wanted to make a comment on a couple of your English terms.<br /><br /><blockquote><div><cite>einstein1969 wrote:</cite>I have probed the 3.7 version and is very beautyful!<br /></div></blockquote><br /><br />instead of probed an English speaker may say <span style="color: #0040FF">I have examined</span> or <span style="color: blue">I have tested</span><br /><br /><blockquote class="uncited"><div>If you use timer coalesce this is not necessary.<br /></div></blockquote><br /><br />The term <span style="color: blue">timer coalesce</span> is not an English expression that is in common use and I don't know what you mean by it.<br /><br />This isn't meant to point out flaws, but just to say that some terms which you use fairly frequently have little meaning in English.<br />Your English is far far better than my Italian, or Spanish, or German, so I hope you take this constructively.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.7 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>08 Aug 2014 06:57</strong></div>
				<div class="author">by <strong>einstein1969</strong></div>
				<div class="content"><blockquote><div><cite>foxidrive wrote:</cite>I hope you don't take offense at this but I wanted to make a comment on a couple of your English terms.<br /><br /><blockquote><div><cite>einstein1969 wrote:</cite>I have probed the 3.7 version and is very beautyful!<br /></div></blockquote><br /><br />instead of probed an English speaker may say <span style="color: #0040FF">I have examined</span> or <span style="color: blue">I have tested</span><br /><br /><blockquote class="uncited"><div>If you use timer coalesce this is not necessary.<br /></div></blockquote><br /><br />The term <span style="color: blue">timer coalesce</span> is not an English expression that is in common use and I don't know what you mean by it.<br /><br />This isn't meant to point out flaws, but just to say that some terms which you use fairly frequently have little meaning in English.<br />Your English is far far better than my Italian, or Spanish, or German, so I hope you take this constructively.</div></blockquote><br /><br />No offense. Indeed, thanks for the correction. I need correction <img class="smilies" src="images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" /> <br /><br />The <a href="http://en.wikipedia.org/wiki/Timer_coalescing" class="postlink">&quot;timer coalescing&quot;</a> is a concept.  <br />From now on, I'll put it in quotation marks.<br /><br />&quot;timer coalescing&quot; is usefull for anti-flicker in dos batch. On certain situation.<br /><br />what is your mother tongue?<br /><br />einstein1969</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.7 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>08 Aug 2014 07:37</strong></div>
				<div class="author">by <strong>foxidrive</strong></div>
				<div class="content"><blockquote><div><cite>einstein1969 wrote:</cite>The <a href="http://en.wikipedia.org/wiki/Timer_coalescing" class="postlink">&quot;timer coalescing&quot;</a> is a concept.  <br />From now on, I'll put it in quotation marks.<br /></div></blockquote><br /><br />I see. thanks.<br /><br />Can you describe how batch code can enter and exit idle states, and which affects screen flicker?<br />Has this been discussed here before?  I may have missed it.<br /><br /><blockquote class="uncited"><div>what is your mother tongue?<br /></div></blockquote><br /><br />I speak English and only know a few words in other languages - I have enough trouble remembering how to spell in English. <img class="smilies" src="images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /></div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.7 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>08 Aug 2014 10:42</strong></div>
				<div class="author">by <strong>einstein1969</strong></div>
				<div class="content"><blockquote><div><cite>foxidrive wrote:</cite>Can you describe how batch code can enter and exit idle states, and which affects screen flicker?<br />Has this been discussed here before?  I may have missed it.<br /></div></blockquote><br /><br />Well, it is rather an intuition which, however, is supported by visible results. I've done thousands of tests working with the variable TIME.<br />I've noticed that sometimes the variable takes values ​​between them far apart.<br />I then calculated the average distance of these values ​​and I saw that converged to a particular value that depends on the <a href="viewtopic09f8.php?p=31663#p31663" class="postlink">hardware</a>.<br /><br />I noticed that when it happens the timer coalescing, concurrently, the TIME variable changes.<br /><br />Then I noticed that the redraw of the screen follows the same logic. So everything happens at the same time.<br />And it 's possible with reasonable accuracy then know when it happens the redraw of the screen.<br /><br />einstein1969</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.7 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>09 Aug 2014 15:35</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content"><blockquote><div><cite>einstein1969 wrote:</cite>But there is a problem... On my pc windows 7 the FIRST LINE flicker/blink. I have not probed on xp.<br /></div></blockquote><br />I think the specific flicker behavior varies from machine to machine. On my Win 7 64 bit machine, I don't get any flicker with speeds 1-3, and speeds 4-6 get minor flicker distributed throughout the entire screen. But the flicker is much less noticeable on v3.7 vs. v3.6.<br /><br />Skipping the 1st line as you suggest does not improve the flicker for speeds 4-6 on my machine. I don't think there is any simple pure batch solution. Perhaps your &quot;timer coalesce&quot; technique could be made to work, but I don't really understand what it does, or how to apply it to SNAKE.<br /><br /><br />Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.8 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>16 Feb 2015 11:01</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">Relatively minor changes for version 3.8 (available at the beginning of this thread).<br /><br />1) I modified the Abort Replay function to purge the input stream via FINDSTR,  thus making it nearly instantaneous. This is especially effective because FINDSTR does not reset the file pointer to the beginning of the file (originally described by jeb at <!-- l --><a class="postlink-local" href="viewtopica6ef.php?f=3&amp;t=2128&amp;p=9720#p9720">viewtopic.php?f=3&amp;t=2128&amp;p=9720#p9720</a><!-- l -->). I preserved the slower :purge routine for use when prompting for user input.<br /><br />2) I eliminated the CLS at the end of :initialize and replaced it with CursorPos and ECHO to conditionally clear instructions. This eliminates irritating screen flicker when a new game or replay starts.<br /><br />3) I defined variables for the file handles so the code is better self documenting.<br /><br /><br />Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 3.8 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>04 Apr 2015 17:14</strong></div>
				<div class="author">by <strong>carlos</strong></div>
				<div class="content">Dave developing my password_input.cmd I found a strange thing that ocurrs with copy /Z.<br /><br />Copy /Z cannot copy files with read only attributes if you run inside other cmd.exe instance, for example from for /f<br /><br />for example:<br /><blockquote class="uncited"><div>C:\dev&gt;echo foo&gt;new.txt<br /><br />C:\dev&gt;attrib +r new.txt<br /><br />C:\dev&gt;copy /Z c:\dev\new.txt nul<br />100% copied         1 file(s) copied.<br /><br />C:\dev&gt;cmd /c copy /Z c:\dev\new.txt nul<br />The parameter is incorrect.<br />        0 file(s) copied.<br /><br />C:\dev&gt;<br /></div></blockquote><br /><br />Also  this script&#058;<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off<br />for /f %%A in ('copy /Z &quot;%~dpf0&quot; nul') do set &quot;CR=%%A&quot;<br />set CR<br />pause<br /></code></pre></div><br /><br />with normal attributes display:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>CR=<br />Press any key to continue . . .<br /></code></pre></div><br /><br />with read only attributes display:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>The parameter is incorrect.<br />CR=0<br />Press any key to continue . . .<br /></code></pre></div><br /><br /><br />Because it, if your script file have the read only attribute., it not set the CR variable properly and something strange things can happen, like not exist from graphics menu pressing Enter.<br /><br />For fix it, i replaced this line:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>for /f %%a in ('copy /Z &quot;%~dpf0&quot; nul') do set &quot;CR=%%a&quot;<br /></code></pre></div><br />with this:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>set &quot;CR=&quot; &amp;For /F &quot;skip=1&quot; %%a in (<br />'&quot;echo(|replace.exe ? . /u /w&quot;'<br />) do if not defined CR set &quot;CR=%%a&quot;<br /></code></pre></div><br /><br />with that I can run snake.cmd with read only attributes.<br /><br />Also, optional, for avoid problems, with path filenames with special characters I replace this line:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>for /f &quot;delims=&quot; %%A in ('xcopy /w &quot;%~f0&quot; &quot;%~f0&quot; 2^&gt;nul') do (<br /></code></pre></div><br />with:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>for /f &quot;delims=&quot; %%A in ('xcopy /d /w ? ? 2^&gt;nul') do (<br /></code></pre></div></div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 4.0 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>09 Apr 2017 22:31</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">I've posted a new version 4.0 of SNAKE.BAT at the first post in this thread.<br /><br />There are two new features:<br /><br />1) I utilized the <a href="https://msdn.microsoft.com/en-us/library/windows/desktop/mt638032(v=vs.85).aspx" class="postlink">Windows 10 console VT100 escape sequence capabilities</a> to eliminate all screen flicker using nothing but &quot;pure batch&quot; <img class="smilies" src="images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" />  <img class="smilies" src="images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />This only works if you have Windows 10, and your console has the &quot;Use Legacy Console&quot; option turned off. The SNAKE VT100 mode can be enabled within the Graphic options menu.<br /><br />Besides eliminating flicker, I also hide the cursor while the game is being played.<br /><br />If you don't have Windows 10, then you can still eliminate screen flicker by using Aacini's CursorPos.exe, just as before.<br /><br />2) I've added an option to specify the playing field size. Supported sizes are as follows:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>Tiny&nbsp; &nbsp;15 x 10<br />Small&nbsp; 30 x 20<br />Medium 40 x 25<br />Large&nbsp; 47 x 32<br />Wide&nbsp; &nbsp;82 x 19<br />Narrow 15 x 40<br /></code></pre></div><br />The original size used by SNAKE was Medium 40 x 25.<br /><br />The Large and Wide sizes both have nearly maximal area supported by the SNAKE architecture. The limit stems from the 8191 variable length limit.<br /><br /><br />Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 4.0 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>23 Apr 2017 11:58</strong></div>
				<div class="author">by <strong>pieh-ejdsch</strong></div>
				<div class="content">Hi Dave,<br />I noticed that the snake on the x-axis with the time delay normal creeps. In the y-axis, however, the snake is 25% faster if the default resolution of the command line is 8 pixels x 12 pixels.<br /><br />In the wide size this is particularly noticeable.<br /><br />In order to compensate for this, an adjusted delay per axis is calculated.<br /><br />I do not like this calculation especially, since this does not round properly. But in the fastest speed it must be increased by one hundredths.<br /><br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>:: delay# <br />::: Gives the movement on the Y axis 25 percent more delay time<br />::: because the default resolution of the command line is<br />::: 8 pixels x 12 pixels. Thus reducing the too fast movement<br />::: on the Y-axis to keep the axes moving synchronously.<br />set delay#=(%\n%<br />&nbsp;set /a &quot;xDelay=delay&quot;%\n%<br />&nbsp;set /a &quot;yDelay=delay*45/30&quot;%\n%<br />&nbsp;if !delay! gtr 10 set /a &quot;yDelay=delay*4/3&quot;%\n%<br />)</code></pre></div><br /><br />I have only found the possibility within this part %=== establish direction ===%<br />In the 4-key mode.<div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>&nbsp; &nbsp; &nbsp; &nbsp; if !axis! == X (set /a &quot;delay=xDelay&quot;) else set /a delay=yDelay<br /></code></pre></div><br /><br />The setting of the delay for the axes must be done in the initialization<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>set &quot;delay=!delay%key%!&quot;<br /><br />&nbsp;%delay#%</code></pre></div><br />Is there a possibility to read the fonts resolution of the command line?<br /><br />Phil</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 4.0 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>23 Apr 2017 13:52</strong></div>
				<div class="author">by <strong>aGerman</strong></div>
				<div class="content"><blockquote><div><cite>pieh-ejdsch wrote:</cite>Is there a possibility to read the fonts resolution of the command line?</div></blockquote><br />Try to read it via reg query.<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>@echo off &amp;setlocal<br /><br />reg query HKCU\Console\%%SystemRoot%%_system32_cmd.exe /v FaceName &gt;nul 2&gt;&amp;1 &amp;&amp; set &quot;key1=HKCU\Console\^^%%SystemRoot^^%%_system32_cmd.exe&quot; || set &quot;key1=HKCU\Console&quot;<br />reg query HKCU\Console\%%SystemRoot%%_system32_cmd.exe /v FontSize &gt;nul 2&gt;&amp;1 &amp;&amp; set &quot;key2=HKCU\Console\^^%%SystemRoot^^%%_system32_cmd.exe&quot; || set &quot;key2=HKCU\Console&quot;<br /><br />for /f &quot;tokens=2*&quot; %%i in ('reg query %key1% /v FaceName') do set &quot;facename=%%j&quot;<br />for /f &quot;tokens=3&quot; %%i in ('reg query %key2% /v FontSize') do set /a &quot;height=%%i&gt;&gt;16, width=%%i&amp;0xFFFF&quot;<br /><br />if &quot;%facename%&quot;==&quot;Terminal&quot; (echo Raster Font %width%x%height%) else echo %facename% %height%<br /><br />pause</code></pre></div><br />Steffen</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: SNAKE.BAT 4.0 - An arcade style game using pure batch</h3>
				<div class="date">Posted: <strong>23 Apr 2017 19:43</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content"><blockquote><div><cite>pieh-ejdsch wrote:</cite>I do not like this calculation especially, since this does not round properly. But in the fastest speed it must be increased by one hundredths.<br /><br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>:: delay# <br />::: Gives the movement on the Y axis 25 percent more delay time<br />::: because the default resolution of the command line is<br />::: 8 pixels x 12 pixels. Thus reducing the too fast movement<br />::: on the Y-axis to keep the axes moving synchronously.<br />set delay#=(%\n%<br />&nbsp;set /a &quot;xDelay=delay&quot;%\n%<br />&nbsp;set /a &quot;yDelay=delay*45/30&quot;%\n%<br />&nbsp;if !delay! gtr 10 set /a &quot;yDelay=delay*4/3&quot;%\n%<br />)<br /></code></pre></div><br /></div></blockquote>It looks like you are trying to define a macro, but there is no need - the two values are constant throughout one entire game play. So I would simply define the two values as part of game initialization.<br /><br /><blockquote><div><cite>pieh-ejdsch wrote:</cite>I have only found the possibility within this part %=== establish direction ===%<br />In the 4-key mode.<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>&nbsp; &nbsp; &nbsp; &nbsp; if !axis! == X (set /a &quot;delay=xDelay&quot;) else set /a delay=yDelay<br /></code></pre></div><br /></div></blockquote>The axis changes every time a turn key is pressed in 2 key mode.<br /><br />The game always starts out with xaxis movement, regardless of 2 key or 4 key mode.<br /><br />Besides taking into account the pixel dimensions of each character, you also have to consider the aspect ratio of each pixel within the physical display.<br /><br />I'm not sure I like the idea of different delays for x and y. But if I were to implement it, then I would do something like the following (I'm implementing a constant 25% delay increase for y to keep things simple, regardless of the aspect ratio)<br /><br />Within the :initialize routine, I need just one additional line to define a few more constants after the delay has been selected by the user:<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>set /a &quot;delay.!left!=delay.!right!=delay, delay.!up!=delay.!down!=delay*5/4, delayDiff=delay.!up!-delay&quot;<br /></code></pre></div><br />and in the main loop I would make changes to the two SET /A statements :<br /><div class="codebox"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><pre><code>&nbsp; &nbsp; &nbsp; %=== establish direction ===%<br />&nbsp; &nbsp; &nbsp; if not defined replay (echo(!key!.) &gt;&gt;&quot;!gameLog!&quot;<br />&nbsp; &nbsp; &nbsp; for %%K in (!key!) do if !moveKeys! equ 2 (<br />&nbsp; &nbsp; &nbsp; &nbsp; set /a &quot;xDiff=xTurn%%K*!yDiff!, yDiff=yTurn%%K*!xDiff!, delay-=(delayDiff*=-1)&quot;<br />&nbsp; &nbsp; &nbsp; ) else if &quot;!%%KAxis!&quot; neq &quot;!axis!&quot; (<br />&nbsp; &nbsp; &nbsp; &nbsp; set /a &quot;xDiff=xDiff%%K, yDiff=yDiff%%K, delay=delay.%%K&quot;<br />&nbsp; &nbsp; &nbsp; &nbsp; set &quot;axis=!%%KAxis!&quot;<br />&nbsp; &nbsp; &nbsp; )<br /></code></pre></div><br /><br />Dave Benham</div>
			</div>
			<hr />
			</div>

	<div id="page-footer" class="page-footer">
		<div class="page-number">All times are <span title="UTC-6">UTC-06:00</span><br />Page <strong>7</strong> of <strong>8</strong></div>
		<div class="copyright">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>
	</div>
</div>

</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=4741&start=90&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:46:22 GMT -->
</html>
