<!DOCTYPE html>
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8521&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex" />

<title>DosTips.com &bull; more tricks with certutil</title>

<link href="styles/AllanStyle-SUBSILVER/theme/print.css" rel="stylesheet">
</head>
<body id="phpbb">
<div id="wrap" class="wrap">
	<a id="top" class="top-anchor" accesskey="t"></a>

	<div id="page-header">
		<h1>DosTips.com</h1>
		<p>A Forum all about DOS Batch<br /><a href="index-2.html">https://www.dostips.com/forum/</a></p>

		<h2>more tricks with certutil</h2>
		<p><a href="viewtopic0ae5.html?f=3&amp;t=8521">https://www.dostips.com/forum/viewtopic.php?f=3&amp;t=8521</a></p>
	</div>

	<div id="page-body" class="page-body">
		<div class="page-number">Page <strong>1</strong> of <strong>1</strong></div>
					<div class="post">
				<h3>more tricks with certutil</h3>
				<div class="date">Posted: <strong>26 Apr 2018 06:07</strong></div>
				<div class="author">by <strong>npocmaka_</strong></div>
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
			<hr />
					<div class="post">
				<h3>Re: more tricks with certutil</h3>
				<div class="date">Posted: <strong>26 Apr 2018 09:31</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content"><img class="smilies" src="images/smilies/icon_eek.gif" width="15" height="15" alt=":shock:" title="Shocked"> <br>
Wonderful - Thankyou <img class="smilies" src="images/smilies/icon_exclaim.gif" width="15" height="15" alt=":!:" title="Exclamation">  <img class="smilies" src="images/smilies/icon_biggrin.gif" width="15" height="15" alt=":D" title="Very Happy"></div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: more tricks with certutil</h3>
				<div class="date">Posted: <strong>22 May 2018 16:00</strong></div>
				<div class="author">by <strong>penpen</strong></div>
				<div class="content">I just noticed that "certutil -encodehex -f strings64.exe strings8.hex 8" doesn't give "base64 - x509 with headers", but does the same as "number 4" ("in columns with spaces , without the characters and the addresses") at least on my win10.<br>
<br>
penpen</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: more tricks with certutil</h3>
				<div class="date">Posted: <strong>03 Sep 2018 10:55</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
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
			<hr />
					<div class="post">
				<h3>Re: more tricks with certutil</h3>
				<div class="date">Posted: <strong>03 Sep 2018 19:42</strong></div>
				<div class="author">by <strong>ShadowThief</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258">dbenham</a> wrote: <a href="viewtopic3e69.php?p=57918#p57918" data-post-id="57918" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 10:55</div></cite>CERTUTIL has a surprisingly low limit to the size file it can encode/decode. I'm not sure about the exact value, but the encode limit is only in the tens of millions range.</div></blockquote>

Through trial and error, I've determined that the limit is 74472684 bytes. I'm guessing that there's an output file size threshold of 100000000 bytes.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: more tricks with certutil</h3>
				<div class="date">Posted: <strong>03 Sep 2018 20:42</strong></div>
				<div class="author">by <strong>Squashman</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056">ShadowThief</a> wrote: <a href="viewtopic7c6d.php?p=57924#p57924" data-post-id="57924" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 19:42</div></cite>
<blockquote><div><cite><a href="memberlist3d77.html?mode=viewprofile&amp;u=2258">dbenham</a> wrote: <a href="viewtopic3e69.php?p=57918#p57918" data-post-id="57918" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 10:55</div></cite>CERTUTIL has a surprisingly low limit to the size file it can encode/decode. I'm not sure about the exact value, but the encode limit is only in the tens of millions range.</div></blockquote>

Through trial and error, I've determined that the limit is 74472684 bytes. I'm guessing that there's an output file size threshold of 100000000 bytes.
</div></blockquote>
I thought I remember reading somewhere it was roughly 75MB.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: more tricks with certutil</h3>
				<div class="date">Posted: <strong>03 Sep 2018 22:20</strong></div>
				<div class="author">by <strong>ShadowThief</strong></div>
				<div class="content"><img src="../../i.imgur.com/b8kmEAr.png" class="postimage" alt="Image"><br>
<br>
It's possible that your mileage may vary, but I don't know why it would.</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: more tricks with certutil</h3>
				<div class="date">Posted: <strong>03 Sep 2018 23:24</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content"><blockquote><div><cite><a href="memberlist8beb.html?mode=viewprofile&amp;u=5056">ShadowThief</a> wrote: <a href="viewtopic5b83.php?p=57926#p57926" data-post-id="57926" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a><div class="responsive-hide">03 Sep 2018 22:20</div></cite>
It's possible that your mileage may vary, but I don't know why it would.
</div></blockquote>
Mine varied <img class="smilies" src="images/smilies/icon_twisted.gif" width="15" height="15" alt=":twisted:" title="Twisted Evil"> <br>
<br>
I tried to use encodehex instead of encode, and it failed well before 74 MB,</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: more tricks with certutil</h3>
				<div class="date">Posted: <strong>04 Sep 2018 13:55</strong></div>
				<div class="author">by <strong>dbenham</strong></div>
				<div class="content">I've posted a convenient HEXDUMP.BAT utility that utilizes these "new" CERTUTIL -encodeHex formatting options at <a href="viewtopic239b.html?f=3&amp;t=8816" class="postlink">viewtopic.php?f=3&amp;t=8816</a><br>
<br>
<br>
Dave Benham</div>
			</div>
			<hr />
					<div class="post">
				<h3>Re: more tricks with certutil</h3>
				<div class="date">Posted: <strong>04 Sep 2018 17:00</strong></div>
				<div class="author">by <strong>ShadowThief</strong></div>
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
			<hr />
			</div>

	<div id="page-footer" class="page-footer">
		<div class="page-number">All times are <span title="UTC-6">UTC-06:00</span><br />Page <strong>1</strong> of <strong>1</strong></div>
		<div class="copyright">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>
	</div>
</div>

</body>

<!-- Mirrored from www.dostips.com/forum/viewtopic.php?f=3&t=8521&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 08:47:02 GMT -->
</html>
