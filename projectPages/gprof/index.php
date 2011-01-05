<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - GProf Support";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Xavier Raynaud";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Overview</h2>
		<p>
		The Linux Distributions GProf plugin aims to bring the profiling
		capabilities of GProf to Eclipse, in a manner that is easy to use for developers
		of any level of experience. 
		</p>

		<h2>Current Status</h2>
		<p>
		The plugin can parse and display in eclipse <b>gmon.out</b> files generated by gprof intrumentation.
		</p>
		<p>
		Plugin architecture was designed to be compatible with cross-devlopment tools (some additional work may be needed in this case).
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li> Support "BSD" gmon files (see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=315027">
		       https://bugs.eclipse.org/bugs/show_bug.cgi?id=315027</a>) </li>
		  <li> Enhance online documentation </li>
        	</ul>
		</p>

		<h2>Help and screenshots</h2>
		<p>
			Help and screenshots are available in the <a href="http://wiki.eclipse.org/Linux_Tools_Project/GProf/User_Guide">Gprof user guide wiki</a>
		</p>
		
		<h2>Try it out</h2>
		<p>
		  You can download the plugin from our <a href="http://www.eclipse.org/linuxtools/downloads.php">update site</a>, or 
		  check the project plugins out of SVN directly from eclipse.org at svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools.
		<br/><br/>
		</p>
	<br/><br/><br/>
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
