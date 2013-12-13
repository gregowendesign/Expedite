<?php
	$section = $_GET["section"];
	$subSection =  $_GET["subsection"];
	$page = $_GET["page"];

	if (!empty($page)) {
		$tmpSubSection = $pages[$section]["children"][$subSection]["children"][$page];
		$title = $tmpSubSection["name"];
		$description = $tmpSubSection["description"];
		$content = "includes/" . $section . "/" . $subSection . "/" . $page;
	} elseif (!empty($subSection)) {
		$tmpSubSection = $pages[$section]["children"][$subSection];
		$children = $tmpSubSection["children"];
		$title = $tmpSubSection["name"];
		$description = $tmpSubSection["description"];
		$content = "includes/" . $section . "/" . $subSection;
	} elseif (!empty($section)) {
		$title = $pages[$section]["name"];
		$description = $pages[$section]["description"];
		$children = $pages[$section]["children"];
		$content = "includes/" . $section;
	} else {
		$title = "Multichannel Retail Specialists";
		$description = "Creating and implementing IT solutions for retailers";
	}
	if (file_exists($content . ".php")) {
		include($content . ".php");
	} else {
		include("includes/default.php");
	}
?>

