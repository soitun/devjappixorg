<p class=visuel></p>
<article><h1>Join a free social movment</h1>
<!--[if lt IE 9]><div style="font-size: x-big"><p>You browse the web with Internet Explorer</p><p>This web browser don’t support technologies used on this website<p>
<p style="height: 20px;"></p>
<p style="font-weight: bold">We recommand you to use <a href="http://www.mozilla-europe.org/" >Mozilla Firefox</a> instead.</p></div><![endif]-->
<p>Jappix is 100% free software. It means everybody who doesn’t like something or who want new functionnalities can modify the program and make it better. Building a better social web is one of our goals. Help us now !</p>
<?php $version = parseXML(readCacheFile('version', 'http://jappix.org/xml/version.xml')); ?>
<p style="clear:both; height:20px;"></p>
	<a href="/<?php echo($version['next']) ?>" class=get>
		<img src="/img/images/get.png" alt="">
		<span class=first><?php echo($version['next']) ?> schedule</span>
		<span class=second>Check what we planned for Jappix next release</span>
	</a>
<p style="clear:both; height:20px;"></p>
<p style="font-size: x-big;">Maybe you wanna learn something more about</p>
<ul><li><a href="/philosophy">Our philosophy</a></li>
<li><a href="calendar">The release calendar</a></li>
</ul>
<p style="font-size: x-big;">You can also grab the code by copying the line below:<br/>
<code>git clone git://github.com/Jappix/jappix.git</code></p>
</article>
<p style="clear:both; height:60px;"></p>
<section class=description>

	<details class=droite><a href=http://codingteam.net/project/jappix/i18n>
		<h2>Help Translate</h2>
		<p>If you have language knowledges, help us to make Jappix better for everyone !</p>
	</a></details>

	<details class=milieu><a href=/communication>
		<h2>Spread It</h2>
		<p>As Jappix is made by a non-profit organization, we need your help to tell the world how Jappix is good !</p>
	</a></details>

	<details class=gauche><a href=/run>
		<h2>Run a Node</h2>
		<p>The software is made to be decentralized. If you run a pod, you’ll help us to make a better web !</p>
	</a></details>

</section>
