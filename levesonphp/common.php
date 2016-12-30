<?php

function levesonNav($structure) { 

echo "<div id=\"navigation\">\n";
echo "	 <ul>\n";
echo "		<li class=\"middle\"><a href=\"" . $structure . "#why\">Why?</a></li>\n";
echo "		<li class=\"middle\"><a href=\"" . $structure . "#about\">About</a></li>\n";
echo "		<li class=\"middle\"><a href=\"" . $structure . "#use\">How to use this site</a></li>\n";
echo "		<li class=\"middle\"><a href=\"" . $structure . "#mc_embed_signup\">Mailing List</a></li>\n";
echo "		<li class=\"middle\"><a href=\"" . $structure . "#contents\">Report Contents</a></li>\n";
echo "		<li class=\"middle\"><a href=\"https://www.google.co.uk/search?q=site%3Aleveson.robertsharp.co.uk\">Search</a></li>\n";
echo "		<li class=\"last\"><a href=\"" . $structure . "#licence\">Licence</a></li>\n";
echo "	</ul>\n"; 
echo "	<div class=\"clear\"></div>\n";
echo "</div>\n";

}

function levesonBread($part,$chapter) { 

echo "\n<!-- Begin Breadcrumbs - LevesonBread function -->\n";
echo "<div id=\"breadcrumbs\">\n";
echo "	<ul>\n";
echo "		<li class=\"homecrumb\"><a href=\"../../\">The Leveson Report <span class=\"hiddenstructure\">(As It Should Be)</span></a></li>\n";

if ($part == 'X') { 

	echo "		<li class=\"partcrumb\"><a href=\"../\" title=\"Back to Appendices contents\">Appendices</a></li>\n";
	echo "		<li class=\"chaptercrumb\"><a href=\"#top\" title=\"Top of this appendix\">Appendix " . $chapter . "</a></li>\n";
	}


 else {
	echo "		<li class=\"partcrumb\"><a href=\"../\" title=\"Back to Part " . $part . " contents\">Part " . $part . "</a></li>\n";
	echo "		<li class=\"chaptercrumb\"><a href=\"#top\" title=\"Top of this chapter\">Chapter " . $chapter . "</a></li>\n";
	}

echo "	</ul>\n";
echo "</div>\n"; }

function paragraphLink($part,$chapter,$SectionNumber,$ParaNumber) { 
echo "<p id=\"para" . $SectionNumber . "-" . $ParaNumber . "\"";
echo ">";
echo "<a href=\"#para" . $SectionNumber . "-" . $ParaNumber . "\" name=\"para" . $SectionNumber . "-" . $ParaNumber . "\" class=\"paranumber\">" . $SectionNumber . "." . $ParaNumber . "</a> ";  }

function footnoteRef($part,$chapter,$RefNumber) {
echo "<sup class=\"footnoteref\"><a name=\"footnoteref" . $RefNumber . "\" href=\"#footnote" . $RefNumber . "\">" . $RefNumber . "</a></sup>"; 
}

function footNote($part,$chapter,$Reference) {

echo "<p class=\"footnote\">";
echo "<a href=\"#footnoteref" . $Reference . "\" name=\"footnote" . $Reference . "\" title=\"Go back to footnote reference " . $Reference . " in the text\">" . $Reference . "</a>. ";
}

function paraRecommend($part,$chapter,$para) {

echo "<p class=\"recommend\" id=\"para" . $para . "\">";
echo "<a href=\"#recommendation" . $para . "\" name=\"recommendation" . $para . "\" class=\"recommendnumber\">" . $para . ".</a>";

}

function levesonFooterNav($part,$chapter) { 

// sets up some extra variables

$prevchapter = $chapter - 1;
$nextchapter = $chapter + 1;
if ($part == 'L') { $navigationPath = ''; }
else { $navigationPath = '../'; }

echo "<div id=\"footer\">\n";
echo "<hr class=\"footerrule\" />\n";

// open the paragraph

echo "<p>\n";

//Check to see if this is the first chapter

if ($chapter == 1) { 
 
	if ($part == 'A') { }
	elseif ($part == 'B') { echo "<a href=\"../../A/chapter4/\" title=\"Go to Chapter 4 in Part A\">Previous Part</a> | "; }
	elseif ($part == 'C') { echo "<a href=\"../../B/chapter4/\" title=\"Go to Chapter 4 in Part B\">Previous Part</a> | "; }
	elseif ($part == 'D') { echo "<a href=\"../../C/chapter4/\" title=\"Go to Chapter 4 in Part C\">Previous Part</a> | "; }
	elseif ($part == 'E') { echo "<a href=\"../../D/chapter2/\" title=\"Go to Chapter 2 in Part D\">Previous Part</a> | "; }
	elseif ($part == 'F') { echo "<a href=\"../../E/chapter5/\" title=\"Go to Chapter 5 in Part E\">Previous Part</a> | "; }
	elseif ($part == 'G') { echo "<a href=\"../../F/chapter7/\" title=\"Go to Chapter 7 in Part F\">Previous Part</a> | "; }
	elseif ($part == 'H') { echo "<a href=\"../../G/chapter4/\" title=\"Go to Chapter 4 in Part G\">Previous Part</a> | "; }
	elseif ($part == 'I') { echo "<a href=\"../../H/chapter7/\" title=\"Go to Chapter 7 in Part H\">Previous Part</a> | "; }
	elseif ($part == 'J') { echo "<a href=\"../../I/chapter9/\" title=\"Go to Chapter 9 in Part I\">Previous Part</a> | "; }
	elseif ($part == 'K') { echo "<a href=\"../../J/chapter4/\" title=\"Go to Chapter 4 in Part J\">Previous Part</a> | "; }
	elseif ($part == 'L') { echo "<a href=\"../K/chapter9\" title=\"Go to Chapter 9 in Part K\">Previous Part</a> | "; }
	elseif ($part == 'X') { echo "<a href=\"../../L\" title=\"Go to Part L\">Previous Part</a> | "; }
	else { } 
 }
// assumiung its not the first chapter, then add the 'Previous Chapter Link
else { 
		echo "<a href=\"../chapter" . $prevchapter . "\" title=\"Go to Chapter " . $prevchapter . "\">Previous Chapter</a> | "; 
	}
	
// Back to top (common to all pages)
echo "<a href=\"#top\" title=\"Go back to the top of the page\">Back to the top</a>";

// check to see if this is the last chapter, in which case, link to chapter 1 in the following part
if ($part == 'A' AND $chapter == 4) { echo " | <a href=\"../../B/chapter1/\" title=\"Go to Chapter 1 in Part B\">Next Part</a>"; }
elseif ($part == 'B' AND $chapter == 4) { echo " | <a href=\"../../C/chapter1/\" title=\"Go to Chapter 1 in Part C\">Next Part</a>"; }
elseif ($part == 'C' AND $chapter == 4) { echo " | <a href=\"../../D/chapter1/\" title=\"Go to Chapter 1 in Part D\">Next Part</a>"; }
elseif ($part == 'D' AND $chapter == 2) { echo " | <a href=\"../../E/chapter1/\" title=\"Go to Chapter 1 in Part E\">Next Part</a>"; }
elseif ($part == 'E' AND $chapter == 5) {echo " | <a href=\"../../F/chapter1/\" title=\"Go to Chapter 1 in Part F\">Next Part</a>"; }
elseif ($part == 'F' AND $chapter == 7) {echo " | <a href=\"../../G/chapter1/\" title=\"Go to Chapter 1 in Part G\">Next Part</a>"; }
elseif ($part == 'G' AND $chapter == 4) {echo " | <a href=\"../../H/chapter1/\" title=\"Go to Chapter 1 in Part H\">Next Part</a>"; }
elseif ($part == 'H' AND $chapter == 7) {echo " | <a href=\"../../I/chapter1/\" title=\"Go to Chapter 1 in Part I\">Next Part</a>"; }
elseif ($part == 'I' AND $chapter == 9) {echo " | <a href=\"../../J/chapter1/\" title=\"Go to Chapter 1 in Part J\">Next Part</a>"; }
elseif ($part == 'J' AND $chapter == 4) {echo " | <a href=\"../../K/chapter1/\" title=\"Go to Chapter 1 in Part K\">Next Part</a>"; }
elseif ($part == 'K' AND $chapter == 9) {echo " | <a href=\"../L\" title=\"Go to Part L\">Next Part</a>"; }
elseif ($part == 'L' AND $chapter == 1) {echo " | <a href=\"../appendices/appendix1/\" title=\"Go to Appendix 1\">Appendices</a>"; }
elseif ($part == 'X' AND $chapter == 6) { }

// otherwise display the Next Chapter link
else {
	if ($part == 'L') { }
	elseif ($part == 'X') { echo " | <a href=\"../appendix" . $nextchapter . "/\" title=\"Go to Appendix " . $nextchapter . "\">Next Appendix</a>"; }	 
	else  {  echo " | <a href=\"../chapter" . $nextchapter . "/\" title=\"Go to Chapter " . $nextchapter . "\">Next Chapter</a>"; }
	}

// close the paragraph
	
echo "</p>\n"; 
echo "</div>\n\n";

// PARTS contents

echo "<div id=\"footernav\">\n";
echo "	<ul>\n";
echo "		<li class=\"first\"><a href=\"../../\" title=\"Back to contents page\">Contents</a></li>\n";

echo "		<li class=\"middle\">";
if ($part == 'A') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../A/\" title=\"Part A Contents\">Part A</a>";
if ($part == 'A') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'B') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../B/\" title=\"Part B Contents\">Part B</a>";
if ($part == 'B') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'C') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../C/\" title=\"Part C Contents\">Part C</a>";
if ($part == 'C') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'D') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../D/\" title=\"Part D Contents\">Part D</a>";
if ($part == 'D') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'E') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../E/\" title=\"Part E Contents\">Part E</a>";
if ($part == 'E') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'F') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../F/\" title=\"Part F Contents\">Part F</a>";
if ($part == 'F') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'G') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../G/\" title=\"Part G Contents\">Part G</a>";
if ($part == 'G') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'H') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../H/\" title=\"Part H Contents\">Part H</a>";
if ($part == 'H') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'I') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../I/\" title=\"Part I Contents\">Part I</a>";
if ($part == 'I') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'J') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../J/\" title=\"Part J Contents\">Part J</a>";
if ($part == 'J') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'K') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../K/\" title=\"Part K Contents\">Part K</a>";
if ($part == 'K') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"middle\">";
if ($part == 'L') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../L/\" title=\"Part L Contents\">Part L</a>";
if ($part == 'L') { echo "</strong>"; } else { }
echo "</li>\n";

echo "		<li class=\"last\">";
if ($part == 'X') { echo "<strong>"; } else { }
echo "<a href=\"". $navigationPath . "../appendices/\" title=\"Appendices list\">Appendices</a></li>\n";
if ($part == 'X') { echo "</strong>"; } else { }
echo "	</ul>\n";
echo "</div>\n\n"; }

function sectionAnchor($part,$chapter,$SectionNumber) { 

echo "<h2 id=\"section" . $SectionNumber . "\">";
echo $SectionNumber;
echo ". ";

}

function internalLink($navpath,$part,$chapter,$SectionNumber,$para) {

echo "<a href=\"" . $navpath . $part . "/chapter" . $chapter . "#para" . $SectionNumber . "-" . $para . "\" ";
echo "title=\"Go to Part " . $part . ", Chapter " . $chapter . ", para " . $SectionNumber . "." . $para . " in the report\">";
echo "Part " . $part . ", Chapter " . $chapter . ", para " . $SectionNumber . "." . $para . "</a>";

}

function internalSectionLink($navpath,$part,$chapter,$SectionNumber) {

echo "<a href=\"" . $navpath . $part . "/chapter" . $chapter . "#section" . $SectionNumber . "\" ";
echo "title=\"Go to Part " . $part . ", Chapter " . $chapter . ", section " . $SectionNumber . " in the report\">";
echo "Part " . $part . ", Chapter " . $chapter . ", section " . $SectionNumber . "</a>";

 }

function internalChapterLink($navpath,$part,$chapter) {

echo "<a href=\"" . $navpath . $part . "/chapter" . $chapter . "\" ";
echo "title=\"Go to Part " . $part . ", Chapter " . $chapter . " in the report\">";
echo "Part " . $part . ", Chapter " . $chapter . "</a>";

}

function levesonHeader($part,$chapter)
{ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Exo+2:300' rel='stylesheet' type='text/css' />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../../css/styles.css" />
<link rel="icon" 
      type="image/png" 
      href="http://leveson.robertsharp.co.uk/favicon.ico" />
	  
	<title>The Leveson Report (As it should be)<?php
	
		if ($part == '') { }
		elseif ($part == 'X') { echo " | Appendices"; }
		else { echo " | Part " . $part; } 
	
		if ($chapter == '') { }
		elseif ($part == 'X') { echo " | Appendix " . $chapter; }
		else { echo " | Chapter " . $chapter;}
	?></title>
	<meta name="description" content="An open, linkable, HTML version of Lord Justice Leveson’s report into the culture, practices and ethics of the press" />
	<meta name="keywords" content="Press, media, Leveson, regulation, newspapers, phone hacking, police, inquiry, government" />
	<meta name="author" content="Robert Sharp" />
	
</head>

<body> 

<?php }

function LevesonCommonFooter() { ?>

<div id="commonfooter">
	<p>The Leveson Report is Published by TSO (The Stationery Office) and available from:</p>
  	<h4>Online</h4>
 	<p><a href="http://www.tsoshop.co.uk">www.tsoshop.co.uk</a></p>
  	
  	<h4>Mail, Telephone, Fax, E-mail</h4>
 	<p>TSO<br/>PO Box 29, Norwich, NR3 1GN<br/> Telephone orders/General enquiries: 0870 600 5522<br/> Order through the Parliamentary Hotline Lo-Call 0845 7 023474<br/> Fax orders: 0870 600 5533<br/> E-mail: <a href="mailto:customer.services@tso.co.uk">customer.services@tso.co.uk</a><br/> Textphone: 0870 240 3701</p>
	
	<h4>The Houses of Parliament Shop</h4>
 	<p>12 Bridge Street, Parliament Square<br/> London SW1A 2JX<br/> Telephone orders: 020 7219 3890/General enquiries: 020 7219 3890<br/> Fax orders: 020 7219 3866<br/> Email: <a href="mailto:shop@parliament.uk">shop@parliament.uk</a><br/> Internet: <a href="http://www.shop.parliament.uk">http://www.shop.parliament.uk</a></p>
  	<p>TSO@Blackwell and other Accredited Agents</p>
</div>
 
<div id="sitecredit">
	<p>Leveson (As It Should Be) by <a href="http://www.robertsharp.co.uk/" title="Robert's website">Robert Sharp</a></p>
	<a href="https://twitter.com/robertsharp59" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @robertsharp59</a>
<script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<!-- Google Analytics -->
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4220315-9', 'robertsharp.co.uk');
  ga('send', 'pageview');

</script> 
<!-- End Google Analytics -->


</body>
</html>

<?php } ?>