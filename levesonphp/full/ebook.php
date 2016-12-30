<?php

function levesonNav($structure) { 

echo "<div id=\"navigation\">\n";
echo "	 <ul>\n";
echo "		<li class=\"middle\"><a href=\"" . $structure . "#why\">Why?</a></li>\n";
echo "		<li class=\"middle\"><a href=\"" . $structure . "#about\">About</a></li>\n";
echo "		<li class=\"middle\"><a href=\"" . $structure . "#use\">How to use this site</a></li>\n";
echo "		<li class=\"middle\"><a href=\"" . $structure . "#contents\">Report Contents</a></li>\n";
echo "		<li class=\"middle\"><a href=\"https://www.google.co.uk/cse/publicurl?cx=013527555785769494801:qut3t3rnn6o\">Search</a></li>\n";
echo "		<li class=\"last\"><a href=\"" . $structure . "#licence\">Licence</a></li>\n";
echo "	</ul>\n"; 
echo "	<div class=\"clear\"></div>\n";
echo "</div>\n";
echo "<a name=\"top\"></a>\n";

}

function paragraphLink($part,$chapter,$SectionNumber,$ParaNumber) { 

echo "<p><span class=\"paranumber\">" . $SectionNumber . "." . $ParaNumber . "</span> ";  }

function footnoteRef($part,$chapter,$RefNumber) {
echo "[<a name=\"footnoterefPart" . $part . "Chapter" . $chapter . "Footnote" . $RefNumber . "\" href=\"#footnotePart" . $part . "Chapter" . $chapter . "Footnote" . $RefNumber . "\">" . $RefNumber . "</a>]"; 
}

function footNote($part,$chapter,$Reference) {

echo "<p class=\"footnote\">";
echo "<a href=\"#footnoterefPart" . $part . "Chapter" . $chapter . "Footnote" . $Reference . "\" name=\"footnotePart" . $part . "Chapter" . $chapter . "Footnote" . $Reference . "\" title=\"Go back to footnote reference " . $Reference . " in the text\">" . $Reference . "</a>. ";
}

function paraRecommend($part,$chapter,$para) {

echo "<p class=\"recommend\" id=\"para" . $para . "\">";
echo "<a href=\"#recommendation" . $para . "\" name=\"recommendation" . $para . "\">" . $para . ".</a>";

}

function sectionAnchor($part,$chapter,$SectionNumber) { 

echo "<a name=\"Part" . $part . "Chapter" . $chapter . "Section" . $SectionNumber . "\"></a>";

}

function internalLink($navpath,$part,$chapter,$SectionNumber,$para) {

echo "<a href=\"#Part" . $part . "Chapter" . $chapter . "para" . $SectionNumber . "-" . $para . "\" ";
echo "title=\"Go to Part " . $part . ", Chapter " . $chapter . ", para " . $SectionNumber . "." . $para . " in the report\">";
echo "Part " . $part . ", Chapter " . $chapter . ", para " . $SectionNumber . "." . $para . "</a>";

}

function internalSectionLink($navpath,$part,$chapter,$SectionNumber) {

echo "<a href=\"#Part" . $part . "Chapter" . $chapter . "Section" . $SectionNumber . "\" ";
echo "title=\"Go to Part " . $part . ", Chapter " . $chapter . ", section " . $SectionNumber . " in the report\">";
echo "Part " . $part . ", Chapter " . $chapter . ", section " . $SectionNumber . "</a>";

 }

function internalChapterLink($navpath,$part,$chapter) {

echo "<a href=\"#contentPart" . $part . "Chapter" . $chapter . "\" ";
echo "title=\"Go to Part " . $part . ", Chapter " . $chapter . " in the report\">";
echo "Part " . $part . ", Chapter " . $chapter . "</a>";

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Exo+2:300' rel='stylesheet' type='text/css' />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../../css/styles.css" />
<link rel="icon" 
      type="image/png" 
      href="http://leveson.robertsharp.co.uk/favicon.ico" />
	  
	<title>The Leveson Report (As it should be)</title>
	<meta name="description" content="An open, linkable, HTML version of Lord Justice Leveson’s report into the culture, practices and ethics of the press" />
	<meta name="keywords" content="Press, media, Leveson, regulation, newspapers, phone hacking, police, inquiry, government" />
	<meta name="author" content="Robert Sharp" />
</head>
<body> 

<div id="contents">
<h1 id="top">AN INQUIRY INTO THE CULTURE, PRACTICES AND ETHICS OF THE PRESS</h1>

<?php

/* Content */

echo "<a name=\"PartA\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../A/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../A/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../A/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../A/chapter4/content.php');
echo "<a name=\"PartB\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../B/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../B/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../B/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../B/chapter4/content.php');
echo "<a name=\"PartC\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../C/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../C/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../C/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../C/chapter4/content.php');
echo "<a name=\"PartD\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../D/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../D/chapter2/content.php');
echo "<a name=\"PartE\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../E/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../E/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../E/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../E/chapter4/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../E/chapter5/content.php');
echo "<a name=\"PartF\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../F/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../F/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../F/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../F/chapter4/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../F/chapter5/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../F/chapter6/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../F/chapter7/content.php');
echo "<a name=\"PartG\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../G/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../G/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../G/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../G/chapter4/content.php');
echo "<a name=\"PartH\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../H/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../H/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../H/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../H/chapter4/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../H/chapter5/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../H/chapter6/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../H/chapter7/content.php');
echo "<a name=\"PartI\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../I/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../I/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../I/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../I/chapter4/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../I/chapter5/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../I/chapter6/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../I/chapter7/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../I/chapter8/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../I/chapter9/content.php');
echo "<a name=\"PartJ\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../J/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../J/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../J/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../J/chapter4/content.php');
echo "<a name=\"PartK\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../K/chapter1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../K/chapter2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../K/chapter3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../K/chapter4/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../K/chapter5/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../K/chapter6/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../K/chapter7/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../K/chapter8/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../K/chapter9/content.php');
echo "<a name=\"PartL\"></a>\n";
require_once('../L/content.php');
echo "<a name=\"Appendices\"></a>\n";
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../appendices/appendix1/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../appendices/appendix2/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../appendices/appendix3/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../appendices/appendix4/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../appendices/appendix5/content.php');
echo "<hr class=\"sigilChapterBreak\" />";
require_once('../appendices/appendix6/content.php');

/* Footnotes */

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','A',1); ?></h2>";
require_once('../A/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','A',2); ?></h2>";
require_once('../A/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','A',3); ?></h2>";
require_once('../A/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','A',4); ?></h2>";
require_once('../A/chapter4/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','B',1); ?></h2>";
require_once('../B/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','B',2); ?></h2>";
require_once('../B/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','B',3); ?></h2>";
require_once('../B/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','B',4); ?></h2>";
require_once('../B/chapter4/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','C',1); ?></h2>";
require_once('../C/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','C',2); ?></h2>";
require_once('../C/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','C',3); ?></h2>";
require_once('../C/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','C',4); ?></h2>";
require_once('../C/chapter4/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','D',1); ?></h2>";
require_once('../D/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','D',2); ?></h2>";
require_once('../D/chapter2/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','E',1); ?></h2>";
require_once('../E/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','E',2); ?></h2>";
require_once('../E/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','E',3); ?></h2>";
require_once('../E/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','E',4); ?></h2>";
require_once('../E/chapter4/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','E',5); ?></h2>";
require_once('../E/chapter5/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','F',1); ?></h2>";
require_once('../F/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','F',2); ?></h2>";
require_once('../F/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','F',3); ?></h2>";
require_once('../F/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','F',4); ?></h2>";
require_once('../F/chapter4/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','F',5); ?></h2>";
require_once('../F/chapter5/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','F',6); ?></h2>";
require_once('../F/chapter6/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','F',7); ?></h2>";
require_once('../F/chapter7/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','G',1); ?></h2>";
require_once('../G/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','G',2); ?></h2>";
require_once('../G/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','G',3); ?></h2>";
require_once('../G/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','G',4); ?></h2>";
require_once('../G/chapter4/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','H',1); ?></h2>";
require_once('../H/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','H',2); ?></h2>";
require_once('../H/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','H',3); ?></h2>";
require_once('../H/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','H',4); ?></h2>";
require_once('../H/chapter4/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','H',5); ?></h2>";
require_once('../H/chapter5/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','H',6); ?></h2>";
require_once('../H/chapter6/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','H',7); ?></h2>";
require_once('../H/chapter7/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','I',1); ?></h2>";
require_once('../I/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','I',2); ?></h2>";
require_once('../I/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','I',3); ?></h2>";
require_once('../I/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','I',4); ?></h2>";
require_once('../I/chapter4/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','I',5); ?></h2>";
require_once('../I/chapter5/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','I',6); ?></h2>";
require_once('../I/chapter6/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','I',7); ?></h2>";
require_once('../I/chapter7/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','I',8); ?></h2>";
require_once('../I/chapter8/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','I',9); ?></h2>";
require_once('../I/chapter9/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','J',1); ?></h2>";
require_once('../J/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','J',2); ?></h2>";
require_once('../J/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','J',3); ?></h2>";
require_once('../J/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','J',4); ?></h2>";
require_once('../J/chapter4/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','K',1); ?></h2>";
require_once('../K/chapter1/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','K',2); ?></h2>";
require_once('../K/chapter2/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','K',3); ?></h2>";
require_once('../K/chapter3/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','K',4); ?></h2>";
require_once('../K/chapter4/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','K',5); ?></h2>";
require_once('../K/chapter5/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','K',6); ?></h2>";
require_once('../K/chapter6/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','K',7); ?></h2>";
require_once('../K/chapter7/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','K',8); ?></h2>";
require_once('../K/chapter8/footnotes.php');
echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for <?php internalChapterLink('../../','K',9); ?></h2>";
require_once('../K/chapter9/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for Part L</h2>";
require_once('../L/footnotes.php');

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for Appendix 1</h2>";

echo "<hr class=\"sigilChapterBreak\" />";
echo "<h2>Footnotes for Appendix 4</h2>";


?>

</body>
</html>
