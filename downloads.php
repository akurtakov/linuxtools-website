<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	$pageTitle 		= "Linux Tools Project Downloads";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Linux Tools committers";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<p>
		The preferred method of installation is via the
		Update Manager (<a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">instructions</a>).  A getting started
		guide is <a href="http://wiki.eclipse.org/Linux_Tools_Project/Getting_Started">available on the wiki</a>.
		</p>

		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>0.9.2 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp"><img border=0 src="/linuxtools/images/icon-help.gif"></a></h3>
		<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/linuxtools/new">New & Noteworthy</a> (Released 2012-02-16).
		<a href="https://hudson.eclipse.org/hudson/job/linuxtools-Indigo/408/testReport/">Unit test results</a>.
		<br>&nbsp;&nbsp;&nbsp;Requires JRE >= 6.0 and Eclipse 3.7.x.
		<br>&nbsp;&nbsp;&nbsp;Specific tools require their underlying native tools (ex. GNU Autotools, Valgrind, OProfile, SystemTap, LTTng).
		<br>&nbsp;&nbsp;&nbsp;Other dependencies of some tools include <a href="http://eclipse.org/cdt">CDT</a> and <a href="http://eclipse.org/birt">BIRT</a>.
		<br>&nbsp;&nbsp;&nbsp;Installations via the p2 repository will automatically get these dependencies.
		<br>&nbsp;&nbsp;&nbsp;Building the Eclipse SDK?  <a href="http://download.eclipse.org/technology/linuxtools/eclipse-build/">Tarballs</a> and <a href="http://wiki.eclipse.org/Linux_Tools_Project/Eclipse_Build">instructions</a>.
		<br>&nbsp;&nbsp;&nbsp;<a href="http://download.eclipse.org/technology/linuxtools/0.9.1-sources/">Source tarballs</a> for Linux Tools plugins.
		<ul>
			<li>
				<a title="p2 Repository Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/linuxtools-0.9.2-incubation.zip">
					<img border=0 src="/linuxtools/images/icon-save.gif"></a>
				&nbsp;&nbsp;(<a href="http://download.eclipse.org/technology/linuxtools/linuxtools-0.9.2-incubation.zip.md5">md5sum</a>)
				<b>http://download.eclipse.org/technology/linuxtools/update</b>
			</li>
		</ul>
		</div>

		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>Nightly builds&nbsp;<a title="More Info" href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp"><img border=0 src="/linuxtools/images/icon-help.gif"></a></h3>
		<br>&nbsp;&nbsp;&nbsp;Early adopters and Linux Tools developers may wish to use our nightly development builds.  These are not suitable for use by everyone.
		<ul>
			<li>
				Nightly p2 repository:  <b>http://download.eclipse.org/technology/linuxtools/updates-nightly</b>
			</li>
		</ul>
		</div>

		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>Screencast videos</h3>
		<ul>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/changelog">ChangeLog</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/changelogdemo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1192">Flash video for viewing in a web browser</a>)</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/libhover">Libhover</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/libhoverdemo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1195">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/oprofile">OProfile</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/eclipse-oprofile-demo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1196">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/specfile">Specfile editor</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/specfile-demo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1201">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/valgrind">Valgrind Memcheck</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/valgrind-demo-1.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1197">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/valgrind">Valgrind Massif</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/valgrind-demo-2.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1198">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/callgraph">Function Callgraph</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/callgraph-realtimeparsing.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1198">Flash video for viewing in a web browser</a>))</li>
		
		</ul>
		</div>
		
		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>Older releases</h3>
		&nbsp;&nbsp;&nbsp;<a href="http://archive.eclipse.org/technology/linuxtools/">archive.eclipse.org</a> hosts older releases.  If a URL contains <tt>download.php?file=</tt> then it will function whether something is on the Eclipse mirrors, at download.eclipse.org, or if it has been moved to archive.eclipse.org.
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
	   <h6>Incubation</h6>
	   <div style="text-align: center">
	   <a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" alt="Incubation"/></a>
	   </div>
	   </div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
