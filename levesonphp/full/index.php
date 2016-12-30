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
echo "<!--";
echo $part;
echo $chapter;
echo "-->";

echo "<p id=\"Part" . $part . "Chapter" . $chapter . "para" . $SectionNumber . "-" . $ParaNumber . "\"";
echo ">";
echo "<a href=\"#Part" . $part . "Chapter" . $chapter . "para" . $SectionNumber . "-" . $ParaNumber . "\" name=\"Part" . $part . "Chapter" . $chapter . "para" . $SectionNumber . "-" . $ParaNumber . "\" class=\"paranumber\">" . $SectionNumber . "." . $ParaNumber . "</a> ";  }

function footnoteRef($part,$chapter,$RefNumber) {
echo "<sup class=\"footnoteref\"><a name=\"footnoterefPart" . $part . "Chapter" . $chapter . "Footnote" . $RefNumber . "\" href=\"#footnotePart" . $part . "Chapter" . $chapter . "Footnote" . $RefNumber . "\">" . $RefNumber . "</a></sup>"; 
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

echo "<h2 id=\"Part" . $part . "Chapter" . $chapter . "Section" . $SectionNumber . "\">";
echo $SectionNumber;
echo ". ";

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
	  
	<title>The Leveson Report (As it should be) | FULL TEXT</title>
	<meta name="description" content="An open, linkable, HTML version of Lord Justice Leveson’s report into the culture, practices and ethics of the press" />
	<meta name="keywords" content="Press, media, Leveson, regulation, newspapers, phone hacking, police, inquiry, government" />
	<meta name="author" content="Robert Sharp" />
</head>
<body> 

<?php levesonNav('..'); ?>

<div id="contents">
<h1 id="top">AN INQUIRY INTO THE CULTURE, PRACTICES AND ETHICS OF THE PRESS<br/><br/>Contents</h1>
<h2 class="contentsvolume">Volume I</h2>
	<ul class="contents">
		<li class="contentspart"><a href="#PartA" title="go to part A">PART A: THE INQUIRY</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartAChapter1" title="Go to Part A, Chapter 1,">Chapter 1: the Announcement</a>
					<ul>
						<li><a href="#PartAChapter1Section1" title="go to Part A, Chapter 1, section 1 ">1. Introduction</a></li>
						<li><a href="#PartAChapter1Section2" title="go to Part A, Chapter 1, section 2 ">2. Role of the Assessors</a></li>
						<li><a href="#PartAChapter1Section3" title="go to Part A, Chapter 1, section 3 ">3. Visits</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartAChapter2" title="Go to Part A, Chapter 2">Chapter 2: the approach</a>
					<ul>
						<li><a href="#PartAChapter2Section1" title="go to Part A, Chapter 2, section 1 ">1. Setting up and preliminaries</a></li>
						<li><a href="#PartAChapter2Section2" title="go to Part A, Chapter 2, section 2 ">2. The gathering and presentation of evidence</a></li>
						<li><a href="#PartAChapter2Section3" title="go to Part A, Chapter 2, section 3 ">3. Challenging the evidence</a></li>
						<li><a href="#PartAChapter2Section4" title="go to Part A, Chapter 2, section 4 ">4. Other material</a></li>
						<li><a href="#PartAChapter2Section5" title="go to Part A, Chapter 2, section 5 ">5. Submissions</a></li>
						<li><a href="#PartAChapter2Section6" title="go to Part A, Chapter 2, section 6 ">6. Engagement with the public: the website</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartAChapter3" title="Go to Part A, Chapter 3">Chapter 3: Further issues of law</a>
					<ul>
						<li><a href="#PartAChapter3Section1" title="go to Part A, Chapter 3, section 1 ">1. Rule 13 of the Inquiry Rules 2006: the approach</a></li>
						<li><a href="#PartAChapter3Section2" title="go to Part A, Chapter 3, section 2 ">2. Rule 13 of the Inquiry Rules 2006: the practice</a></li>
						<li><a href="#PartAChapter3Section3" title="go to Part A, Chapter 3, section 3 ">3. The nature and standard of proof</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartAChapter4" title="Go to Part A, Chapter 4">Chapter 4: the Report</a>
					<ul>
						<li><a href="#PartAChapter4Section1" title="go to Part A, Chapter 4, section 1 ">1. Scope</a></li>
						<li><a href="#PartAChapter4Section2" title="go to Part A, Chapter 4, section 2 ">2. Purpose</a></li>
						<li><a href="#PartAChapter4Section3" title="go to Part A, Chapter 4, section 3 ">3. Timing and content</a></li>
					</ul>
				</li>
			</ul>
 		</li>
		<li class="contentspart"><a href="#PartB" title="go to part B">PART B: THE PRESS AND THE PUBLIC INTEREST</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartBChapter1" title="Go to Part B, Chapter 1">Chapter 1: Introduction</a></li>
				<li class="contentschapter"><a href="#contentPartBChapter2" title="Go to Part B, Chapter 2">Chapter 2: the freedom of the press and democracy</a>
					<ul>
						<li><a href="#PartBChapter2Section1" title="go to Part B, Chapter 2, section 1 ">1. Context</a></li>
						<li><a href="#PartBChapter2Section2" title="go to Part B, Chapter 2, section 2 ">2. A brief history of press freedom in the United Kingdom</a></li>
						<li><a href="#PartBChapter2Section3" title="go to Part B, Chapter 2, section 3 ">3. The importance of a free press: free communication</a></li>
						<li><a href="#PartBChapter2Section4" title="go to Part B, Chapter 2, section 4 ">4. The importance of a free press: public debate and holding power to account</a></li>
						<li><a href="#PartBChapter2Section5" title="go to Part B, Chapter 2, section 5 ">5. Press freedom within the rule of law and the role of statute</a></li>
						<li><a href="#PartBChapter2Section6" title="go to Part B, Chapter 2, section 6 ">6. The protection of sources and other legal privileges of the press</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartBChapter3" title="Go to Part B, Chapter 3">Chapter 3: Competing public interests</a>
					<ul>
						<li><a href="#PartBChapter3Section1" title="go to Part B, Chapter 3, section 1 ">1. Context</a></li>
						<li><a href="#PartBChapter3Section2" title="go to Part B, Chapter 3, section 2 ">2. Freedom of expression</a></li>
						<li><a href="#PartBChapter3Section3" title="go to Part B, Chapter 3, section 3 ">3. Personal autonomy and civil liberties</a></li>
						<li><a href="#PartBChapter3Section4" title="go to Part B, Chapter 3, section 4 ">4. Other public goods</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartBChapter4" title="Go to Part B, Chapter 4">Chapter 4: The responsibilities of the press</a>
					<ul>
						<li><a href="#PartBChapter4Section1" title="go to Part B, Chapter 4, section 1 ">1. Context</a></li>
						<li><a href="#PartBChapter4Section2" title="go to Part B, Chapter 4, section 2 ">2. Press power and the impact on society</a></li>
						<li><a href="#PartBChapter4Section3" title="go to Part B, Chapter 4, section 3 ">3. Communication: truth, comment and ‘assessability’</a></li>
						<li><a href="#PartBChapter4Section4" title="go to Part B, Chapter 4, section 4 ">4. Press ethics and the role of a code of ethics</a></li>
					</ul>
				</li>
			</ul>
 		</li>
		<li class="contentspart"><a href="#PartC" title="go to part C">PART C: THE PRESS</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartCChapter1" title="Go to Part C, Chapter 1">Chapter 1: Context</a>
					<ul>
						<li><a href="#PartCChapter1Section1" title="go to Part C, Chapter 1, section 1 ">1. Introduction</a></li>
						<li><a href="#PartCChapter1Section2" title="go to Part C, Chapter 1, section 2 ">2. Commercial pressure on the press</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartCChapter2" title="Go to Part C, Chapter 2">Chapter 2: The press: history, governance structures and finances</a>
					<ul>
						<li><a href="#PartCChapter2Section1" title="go to Part C, Chapter 2, section 1 ">1. Introduction</a></li>
						<li><a href="#PartCChapter2Section2" title="go to Part C, Chapter 2, section 2 ">2. News Corporation</a></li>
						<li><a href="#PartCChapter2Section3" title="go to Part C, Chapter 2, section 3 ">3. Associated Newspapers Ltd</a></li>
						<li><a href="#PartCChapter2Section4" title="go to Part C, Chapter 2, section 4 ">4. Northern and Shell Media Group Ltd</a></li>
						<li><a href="#PartCChapter2Section5" title="go to Part C, Chapter 2, section 5 ">5. Trinity Mirror plc</a></li>
						<li><a href="#PartCChapter2Section6" title="go to Part C, Chapter 2, section 6 ">6. The Telegraph Media Group</a></li>
						<li><a href="#PartCChapter2Section7" title="go to Part C, Chapter 2, section 7 ">7. The Guardian Media Group</a></li>
						<li><a href="#PartCChapter2Section8" title="go to Part C, Chapter 2, section 8 ">8. The Independent Group</a></li>
						<li><a href="#PartCChapter2Section9" title="go to Part C, Chapter 2, section 9 ">9. The Financial Times</a></li>
						<li><a href="#PartCChapter2Section10" title="Go to Part C, Chapter 2, section 10">10. The regional press</a></li>
						<li><a href="#PartCChapter2Section11" title="Go to Part C, Chapter 2, section 11">11. Magazines and periodicals</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartCChapter3" title="Go to Part C, Chapter 3">Chapter 3: Alternative news providers</a>
					<ul>
						<li><a href="#PartCChapter3Section1" title="go to Part C, Chapter 3, section 1 ">1. Introduction</a></li>
						<li><a href="#PartCChapter3Section2" title="go to Part C, Chapter 3, section 2 ">2. Broadcasters</a></li>
						<li><a href="#PartCChapter3Section3" title="go to Part C, Chapter 3, section 3 ">3. The World Wide Web</a></li>
						<li><a href="#PartCChapter3Section4" title="go to Part C, Chapter 3, section 4 ">4. Blogs and other web-based commentary</a></li>
						<li><a href="#PartCChapter3Section5" title="go to Part C, Chapter 3, section 5 ">5. Social networking sites</a></li>
						<li><a href="#PartCChapter3Section6" title="go to Part C, Chapter 3, section 6 ">6. Other providers</a></li>
						<li><a href="#PartCChapter3Section7" title="go to Part C, Chapter 3, section 7 ">7. Enforcement</a></li>
						<li><a href="#PartCChapter3Section8" title="go to Part C, Chapter 3, section 8 ">8. Press photographers</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartCChapter4" title="Go to Part C, Chapter 4">Chapter 4: Plurality</a>
					<ul>
						<li><a href="#PartCChapter4Section1" title="go to Part C, Chapter 4, section 1 ">1. What is plurality and why does it matter?</a></li>
						<li><a href="#PartCChapter4Section2" title="go to Part C, Chapter 4, section 2 ">2. Approaches to securing plurality</a></li>
						<li><a href="#PartCChapter4Section3" title="go to Part C, Chapter 4, section 3 ">3. The history of media ownership rules in the UK from the 1990s</a></li>
						<li><a href="#PartCChapter4Section4" title="go to Part C, Chapter 4, section 4 ">4. History of the newspaper ownership regime</a></li>
					</ul>
				</li>
			</ul>
		</li>
 		<li class="contentspart"><a href="#PartD" title="go to part D">PART D: STANDARDS</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartDChapter1" title="Go to Part D, Chapter 1">Chapter 1: The historical background</a>
					<ul>
						<li><a href="#PartDChapter1Section1" title="go to Part D, Chapter 1, section 1 ">1. Introduction</a></li>
						<li><a href="#PartDChapter1Section2" title="go to Part D, Chapter 1, section 2 ">2. The Royal Commission into the Press 1947</a></li>
						<li><a href="#PartDChapter1Section3" title="go to Part D, Chapter 1, section 3 ">3. The Royal Commission of 1962 and the Younger Committee into privacy</a></li>
						<li><a href="#PartDChapter1Section4" title="go to Part D, Chapter 1, section 4 ">4. The Royal Commission of 1974</a></li>
						<li><a href="#PartDChapter1Section5" title="go to Part D, Chapter 1, section 5 ">5. The first Report of Sir David Calcutt QC</a></li>
						<li><a href="#PartDChapter1Section6" title="go to Part D, Chapter 1, section 6 ">6. The second Report of Sir David Calcutt QC</a></li>
						<li><a href="#PartDChapter1Section7" title="go to Part D, Chapter 1, section 7 ">7. The death of Diana, Princess of Wales</a></li>
						<li><a href="#PartDChapter1Section8" title="go to Part D, Chapter 1, section 8 ">8. Conclusions</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartDChapter2" title="Go to Part D, Chapter 2">Chapter 2: Self-regulation of the press</a>
					<ul>
						<li><a href="#PartDChapter2Section1" title="go to Part D, Chapter 2, section 1 ">1. Introduction</a></li>
						<li><a href="#PartDChapter2Section2" title="go to Part D, Chapter 2, section 2 ">2. The establishment of the PCC</a></li>
						<li><a href="#PartDChapter2Section3" title="go to Part D, Chapter 2, section 3 ">3. Current powers, operation and standards</a></li>
						<li><a href="#PartDChapter2Section4" title="go to Part D, Chapter 2, section 4 ">4. PressBoF</a></li>
						<li><a href="#PartDChapter2Section5" title="go to Part D, Chapter 2, section 5 ">5. Benefits of self-regulation</a></li>
						<li><a href="#PartDChapter2Section6" title="go to Part D, Chapter 2, section 6 ">6. Anti-harassment policy</a></li>
						<li><a href="#PartDChapter2Section7" title="go to Part D, Chapter 2, section 7 ">7. Complaints</a></li>
					</ul>
				</li>
			</ul>
		</li>
 		<li class="contentspart"><a href="#PartE" title="go to part E">PART E: CROSSING LEGAL BOUNDARIES: THE CRIMINAL AND CIVIL LAW</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartEChapter1" title="Go to Part E, Chapter 1">Chapter 1: The legal framework</a></li>
				<li class="contentschapter"><a href="#contentPartEChapter2" title="Go to Part E, Chapter 2">Chapter 2: Police investigations start</a>
					<ul>
						<li><a href="#PartEChapter2Section1" title="go to Part E, Chapter 2, section 1 ">1. Operation Reproof</a></li>
						<li><a href="#PartEChapter2Section2" title="go to Part E, Chapter 2, section 2 ">2. Operation Glade</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartEChapter3" title="Go to Part E, Chapter 3">Chapter 3: Operation motorman</a>
					<ul>
						<li><a href="#PartEChapter3Section1" title="go to Part E, Chapter 3, section 1 ">1. Introduction</a></li>
						<li><a href="#PartEChapter3Section2" title="go to Part E, Chapter 3, section 2 ">2. The genesis of Operation Motorman</a></li>
						<li><a href="#PartEChapter3Section3" title="go to Part E, Chapter 3, section 3 ">3. The search</a></li>
						<li><a href="#PartEChapter3Section4" title="go to Part E, Chapter 3, section 4 ">4. Prosecutions arising from Operation Motorman</a></li>
						<li><a href="#PartEChapter3Section5" title="go to Part E, Chapter 3, section 5 ">5. Publication of Parliamentary Reports in 2006</a></li>
						<li><a href="#PartEChapter3Section6" title="go to Part E, Chapter 3, section 6 ">6. Conclusions</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartEChapter4" title="Go to Part E, Chapter 4">Chapter 4: Phone hacking: the expanding impact of Operation Caryatid</a>
					<ul>
						<li><a href="#PartEChapter4Section1" title="go to Part E, Chapter 4, section 1 ">1. Introduction</a></li>
						<li><a href="#PartEChapter4Section2" title="go to Part E, Chapter 4, section 2 ">2. The collection of evidence</a></li>
						<li><a href="#PartEChapter4Section3" title="go to Part E, Chapter 4, section 3 ">3. The prosecution strategy</a></li>
						<li><a href="#PartEChapter4Section4" title="go to Part E, Chapter 4, section 4 ">4. The outcome to the prosecution</a></li>
						<li><a href="#PartEChapter4Section5" title="go to Part E, Chapter 4, section 5 ">5. Subsequent operational decisions</a></li>
						<li><a href="#PartEChapter4Section6" title="go to Part E, Chapter 4, section 6 ">6. Police strategy for the aftermath</a></li>
						<li><a href="#PartEChapter4Section7" title="go to Part E, Chapter 4, section 7 ">7. The reaction of the News of the World</a></li>
						<li><a href="#PartEChapter4Section8" title="go to Part E, Chapter 4, section 8 ">8. July 2009: The Guardian</a></li>
						<li><a href="#PartEChapter4Section9" title="go to Part E, Chapter 4, section 9 ">9. September 2010: The New York Times</a></li>
						<li><a href="#PartEChapter4Section10" title="Go to Part E, Chapter 4, section 10">10. December 2010: The Guardian article and the aftermath</a></li>
						<li><a href="#PartEChapter4Section11" title="Go to Part E, Chapter 4, section 11">11. The past unravels</a></li>
						<li><a href="#PartEChapter4Section12" title="Go to Part E, Chapter 4, section 12">12. Conclusions: the police and the CPS</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartEChapter5" title="Go to Part E, Chapter 5">Chapter 5: A new approach to the allegations</a>
					<ul>
						<li><a href="#PartEChapter5Section1" title="go to Part E, Chapter 5, section 1 ">1. Police Inquiries: Operations Weeting, Elveden and Tuleta</a></li>
						<li><a href="#PartEChapter5Section2" title="go to Part E, Chapter 5, section 2 ">2. The Management and Standards Committee</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
 <h2 class="contentsvolume">Volume II</h2>
 	<ul class="contents">
		<li class="contentspart"><a href="#PartF" title="go to part F">PART F: THE CULTURE, PRACTICES AND ETHICS OF THE PRESS: THE PRESS AND THE PUBLIC</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartFChapter1" title="Go to Part F, Chapter 1">Chapter 1: Introduction</a>
					<ul>
						<li><a href="#PartFChapter1Section1" title="go to Part F, Chapter 1, section 1 ">1. Overview</a></li>
						<li><a href="#PartFChapter1Section2" title="go to Part F, Chapter 1, section 2 ">2. Module One and the Terms of Reference</a></li>
						<li><a href="#PartFChapter1Section3" title="go to Part F, Chapter 1, section 3 ">3. Evidence in Module One of the Inquiry</a></li>
						<li><a href="#PartFChapter1Section4" title="go to Part F, Chapter 1, section 4 ">4. The structure of Part F of the Report</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartFChapter2" title="Go to Part F, Chapter 2">Chapter 2: Good practice</a>
					<ul>
						<li><a href="#PartFChapter2Section1" title="go to Part F, Chapter 2, section 1 ">1. The value and virtues of the UK press</a></li>
						<li><a href="#PartFChapter2Section2" title="go to Part F, Chapter 2, section 2 ">2. Some case studies</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartFChapter3" title="Go to Part F, Chapter 3">Chapter 3: Complaints of an unethical press</a>
					<ul>
						<li><a href="#PartFChapter3Section1" title="go to Part F, Chapter 3, section 1 ">1. Overview</a></li>
						<li><a href="#PartFChapter3Section2" title="go to Part F, Chapter 3, section 2 ">2. The complaints</a></li>
						<li><a href="#PartFChapter3Section3" title="go to Part F, Chapter 3, section 3 ">3. The harm</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartFChapter4" title="Go to Part F, Chapter 4">Chapter 4: Some practices at the news of the world</a>
					<ul>
						<li><a href="#PartFChapter4Section1" title="go to Part F, Chapter 4, section 1 ">1. Introduction</a></li>
						<li><a href="#PartFChapter4Section2" title="go to Part F, Chapter 4, section 2 ">2. Influence on culture at the News of the World</a></li>
						<li><a href="#PartFChapter4Section3" title="go to Part F, Chapter 4, section 3 ">3. Attitude towards individuals</a></li>
						<li><a href="#PartFChapter4Section4" title="go to Part F, Chapter 4, section 4 ">4. Intrusion</a></li>
						<li><a href="#PartFChapter4Section5" title="go to Part F, Chapter 4, section 5 ">5. Investigative journalism</a></li>
						<li><a href="#PartFChapter4Section6" title="go to Part F, Chapter 4, section 6 ">6. Approach to compliance</a></li>
						<li><a href="#PartFChapter4Section7" title="go to Part F, Chapter 4, section 7 ">7. Credibility of witnesses</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartFChapter5" title="Go to Part F, Chapter 5">Chapter 5: some case studies</a>
					<ul>
						<li><a href="#PartFChapter5Section1" title="go to Part F, Chapter 5, section 1 ">1. Introduction</a></li>
						<li><a href="#PartFChapter5Section2" title="go to Part F, Chapter 5, section 2 ">2. The Dowlers</a></li>
						<li><a href="#PartFChapter5Section3" title="go to Part F, Chapter 5, section 3 ">3. Kate and Gerry McCann</a></li>
						<li><a href="#PartFChapter5Section4" title="go to Part F, Chapter 5, section 4 ">4. Christopher Jefferies</a></li>
						<li><a href="#PartFChapter5Section5" title="go to Part F, Chapter 5, section 5 ">5. The Rt Hon Gordon Brown MP and his son’s illness</a></li>
						<li><a href="#PartFChapter5Section6" title="go to Part F, Chapter 5, section 6 ">6. Hugh Grant and ‘the mendacious smear’</a></li>
						<li><a href="#PartFChapter5Section7" title="go to Part F, Chapter 5, section 7 ">7. Sebastian Bowles</a></li>
						<li><a href="#PartFChapter5Section8" title="go to Part F, Chapter 5, section 8 ">8. Recent events: Royal photographs</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartFChapter6" title="Go to Part F, Chapter 6">Chapter 6: Criticisms of the culture, practices and ethics of the press</a>
					<ul>
						<li><a href="#PartFChapter6Section1" title="go to Part F, Chapter 6, section 1 ">1. Introduction</a></li>
						<li><a href="#PartFChapter6Section2" title="go to Part F, Chapter 6, section 2 ">2. Lack of respect for privacy and dignity</a></li>
						<li><a href="#PartFChapter6Section3" title="go to Part F, Chapter 6, section 3 ">3. Unlawful or unethical acquisition of private information</a></li>
						<li><a href="#PartFChapter6Section4" title="go to Part F, Chapter 6, section 4 ">4. Breach of confidence and misuse of confidential and/or sensitive information</a></li>
						<li><a href="#PartFChapter6Section5" title="go to Part F, Chapter 6, section 5 ">5. Harassment</a></li>
						<li><a href="#PartFChapter6Section6" title="go to Part F, Chapter 6, section 6 ">6. Intrusion into grief and shock</a></li>
						<li><a href="#PartFChapter6Section7" title="go to Part F, Chapter 6, section 7 ">7. Treatment of children</a></li>
						<li><a href="#PartFChapter6Section8" title="go to Part F, Chapter 6, section 8 ">8. Representation of women and minorities</a></li>
						<li><a href="#PartFChapter6Section9" title="go to Part F, Chapter 6, section 9 ">9. Inaccuracy</a></li>
						<li><a href="#PartFChapter6Section10" title="Go to Part F, Chapter 6, section 10">10. Financial controls and payments for stories</a></li>
						<li><a href="#PartFChapter6Section11" title="Go to Part F, Chapter 6, section 11">11. Treatment of critics</a></li>
						<li><a href="#PartFChapter6Section12" title="Go to Part F, Chapter 6, section 12">12. Complaints handling</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartFChapter7" title="Go to Part F, Chapter 7">Chapter 7: Conclusion</a>
					<ul>
						<li><a href="#PartFChapter7Section1" title="go to Part F, Chapter 7, section 1 ">1. Introduction</a></li>
						<li><a href="#PartFChapter7Section2" title="go to Part F, Chapter 7, section 2 ">2. Possible causes</a></li>
						<li><a href="#PartFChapter7Section3" title="go to Part F, Chapter 7, section 3 ">3. The relevance of the internet</a></li>
						<li><a href="#PartFChapter7Section4" title="go to Part F, Chapter 7, section 4 ">4. The press response to this Inquiry</a></li>
					</ul>
				</li>
			</ul>
		</li>	
 		<li class="contentspart"><a href="#PartG" title="go to part G">PART G: THE PRESS AND THE POLICE: THE RELATIONSHIP</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartGChapter1" title="Go to Part G, Chapter 1">Chapter 1: Policing with Consent: the role of the press</a>
					<ul>
						<li><a href="#PartGChapter1Section1" title="go to Part G, Chapter 1, section 1 ">1. Introduction</a></li>
						<li><a href="#PartGChapter1Section2" title="go to Part G, Chapter 1, section 2 ">2. The purpose of the relationship and public confidence</a></li>
						<li><a href="#PartGChapter1Section3" title="go to Part G, Chapter 1, section 3 ">3. Tensions in the relationship between the media and the police</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartGChapter2" title="Go to Part G, Chapter 2">Chapter 2: The history of the relationship: different Approaches</a>
					<ul>
						<li><a href="#PartGChapter2Section1" title="go to Part G, Chapter 2, section 1 ">1. Metropolitan Police Service: the Commissioners</a></li>
						<li><a href="#PartGChapter2Section2" title="go to Part G, Chapter 2, section 2 ">2. Other police forces</a></li>
						<li><a href="#PartGChapter2Section3" title="go to Part G, Chapter 2, section 3 ">3. Press departments</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartGChapter3" title="Go to Part G, Chapter 3">Chapter 3: Press and the Police: the harm and the response</a>
					<ul>
						<li><a href="#PartGChapter3Section1" title="go to Part G, Chapter 3, section 1 ">1. Introduction</a></li>
						<li><a href="#PartGChapter3Section2" title="go to Part G, Chapter 3, section 2 ">2. The use and abuse of information</a></li>
						<li><a href="#PartGChapter3Section3" title="go to Part G, Chapter 3, section 3 ">3. Entertainment: an overview</a></li>
						<li><a href="#PartGChapter3Section4" title="go to Part G, Chapter 3, section 4 ">4. The perception of influence</a></li>
						<li><a href="#PartGChapter3Section5" title="go to Part G, Chapter 3, section 5 ">5. The problems of friendship</a></li>
						<li><a href="#PartGChapter3Section6" title="go to Part G, Chapter 3, section 6 ">6. Calibrating the harm: the views of Commissioners</a></li>
						<li><a href="#PartGChapter3Section7" title="go to Part G, Chapter 3, section 7 ">7. The question of corruption</a></li>
						<li><a href="#PartGChapter3Section8" title="go to Part G, Chapter 3, section 8 ">8. Independent Police Complaints Commission (IPCC)</a></li>
						<li><a href="#PartGChapter3Section9" title="go to Part G, Chapter 3, section 9 ">9. HMIC report: ‘Without Fear or Favour’</a></li>
						<li><a href="#PartGChapter3Section10" title="Go to Part G, Chapter 3, section 10">10. Elizabeth Filkin’s review of the relationship between the MPs and the media</a></li>
						<li><a href="#PartGChapter3Section11" title="Go to Part G, Chapter 3, section 11">11. Association of Chief Police Officers (ACPO)</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartGChapter4" title="Go to Part G, Chapter 4">Chapter 4: The press and the police: conclusions and recommendations</a>
					<ul>
						<li><a href="#PartGChapter4Section1" title="go to Part G, Chapter 4, section 1 ">1. Introduction</a></li>
						<li><a href="#PartGChapter4Section2" title="go to Part G, Chapter 4, section 2 ">2. Tip offs</a></li>
						<li><a href="#PartGChapter4Section3" title="go to Part G, Chapter 4, section 3 ">3. Involvement of the press on operations</a></li>
						<li><a href="#PartGChapter4Section4" title="go to Part G, Chapter 4, section 4 ">4. Off-the-record briefings</a></li>
						<li><a href="#PartGChapter4Section5" title="go to Part G, Chapter 4, section 5 ">5. Leaks of information</a></li>
						<li><a href="#PartGChapter4Section6" title="go to Part G, Chapter 4, section 6 ">6. Gifts, hospitability and entertainment</a></li>
						<li><a href="#PartGChapter4Section7" title="go to Part G, Chapter 4, section 7 ">7. Media employment</a></li>
						<li><a href="#PartGChapter4Section8" title="go to Part G, Chapter 4, section 8 ">8. Corruption, whistleblowing and related matters</a></li>
						<li><a href="#PartGChapter4Section9" title="go to Part G, Chapter 4, section 9 ">9. Conclusion</a></li>
					</ul>
				</li>
			</ul>
		</li>	
	</ul>
 <h2 class="contentsvolume">Volume III</h2>
 	<ul class="contents">
		<li class="contentspart"><a href="#PartH" title="go to part H">PART H: THE PRESS AND DATA PROTECTION</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartHChapter1" title="Go to Part H, Chapter 1">Chapter 1: Introduction</a>
					<ul>
						<li><a href="#PartHChapter1Section1" title="go to Part H, Chapter 1, section 1 ">1. Background</a></li>
						<li><a href="#PartHChapter1Section2" title="go to Part H, Chapter 1, section 2 ">2. The ICO: structure, governance and approach</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartHChapter2" title="Go to Part H, Chapter 2">Chapter 2: Operation motorman</a>
					<ul>
						<li><a href="#PartHChapter2Section1" title="go to Part H, Chapter 2, section 1 ">1. The investigation</a></li>
						<li><a href="#PartHChapter2Section2" title="go to Part H, Chapter 2, section 2 ">2. The ICO response: leadership</a></li>
						<li><a href="#PartHChapter2Section3" title="go to Part H, Chapter 2, section 3 ">3. The approach to the PCC</a></li>
						<li><a href="#PartHChapter2Section4" title="go to Part H, Chapter 2, section 4 ">4. <em>What Price Privacy?</em> The political campaign</a></li>
						<li><a href="#PartHChapter2Section5" title="go to Part H, Chapter 2, section 5 ">5. <em>What Price Privacy?</em> The reaction of the PCC and the editors</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartHChapter3" title="Go to Part H, Chapter 3">Chapter 3: Other possible regulatory options</a>
					<ul>
						<li><a href="#PartHChapter3Section1" title="go to Part H, Chapter 3, section 1 ">1. Criminal proceedings in respect of journalists</a></li>
						<li><a href="#PartHChapter3Section2" title="go to Part H, Chapter 3, section 2 ">2. The use of regulatory powers</a></li>
						<li><a href="#PartHChapter3Section3" title="go to Part H, Chapter 3, section 3 ">3. Engagement with the industry: guidance and promoting good practice</a></li>
						<li><a href="#PartHChapter3Section4" title="go to Part H, Chapter 3, section 4 ">4. Engagement with victims</a></li>
						<li><a href="#PartHChapter3Section5" title="go to Part H, Chapter 3, section 5 ">5. Conclusions and the questions raised by Operation Motorman</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartHChapter4" title="Go to Part H, Chapter 4">Chapter 4: the ICo and the press today</a>
					<ul>
						<li><a href="#PartHChapter4Section1" title="go to Part H, Chapter 4, section 1 ">1. Introduction</a></li>
						<li><a href="#PartHChapter4Section2" title="go to Part H, Chapter 4, section 2 ">2. Personal information privacy and press practices</a></li>
						<li><a href="#PartHChapter4Section3" title="go to Part H, Chapter 4, section 3 ">3. Following up Operation Motorman</a></li>
						<li><a href="#PartHChapter4Section4" title="go to Part H, Chapter 4, section 4 ">4. Following up the political campaign</a></li>
						<li><a href="#PartHChapter4Section5" title="go to Part H, Chapter 4, section 5 ">5. Phone hacking and the ICO</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartHChapter5" title="Go to Part H, Chapter 5">Chapter 5: Issues about the legal framework</a>
					<ul>
						<li><a href="#PartHChapter5Section1" title="go to Part H, Chapter 5, section 1 ">1. The current views of the ICO</a></li>
						<li><a href="#PartHChapter5Section2" title="go to Part H, Chapter 5, section 2 ">2. A different perspective on the legal framework</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartHChapter6" title="Go to Part H, Chapter 6">Chapter 6: The relationship: the ICO and the press</a>
					<ul>
						<li><a href="#PartHChapter6Section1" title="go to Part H, Chapter 6, section 1 ">1. “Too big for us?”</a></li>
						<li><a href="#PartHChapter6Section2" title="go to Part H, Chapter 6, section 2 ">2. The struggle for a profile: political campaigning and the power of the press</a></li>
						<li><a href="#PartHChapter6Section3" title="go to Part H, Chapter 6, section 3 ">3. Independent regulation of the press: lessons learned</a></li>
						<li><a href="#PartHChapter6Section4" title="go to Part H, Chapter 6, section 4 ">4. Powers, governance and capability of the ICO: reflections of the future</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartHChapter7" title="Go to Part H, Chapter 7">Chapter 7: Summary of recommendations</a></li>
			</ul>
		</li>	
 		<li class="contentspart"><a href="#PartI" title="go to part I">PART I: THE PRESS AND POLITICIANS</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartIChapter1" title="Go to Part I, Chapter 1">Chapter 1: Introduction</a></li>
				<li class="contentschapter"><a href="#contentPartIChapter2" title="Go to Part I, Chapter 2">Chapter 2: The Conservative years</a>
					<ul>
						<li><a href="#PartIChapter2Section1" title="go to Part I, Chapter 2, section 1 ">1. Prime Minister Thatcher: 1979-1990</a></li>
						<li><a href="#PartIChapter2Section2" title="go to Part I, Chapter 2, section 2 ">2. Prime Minister Major: 1990-1997</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartIChapter3" title="Go to Part I, Chapter 3">Chapter 3: New Labour</a>
					<ul>
						<li><a href="#PartIChapter3Section1" title="go to Part I, Chapter 3, section 1 ">1. The 1992 general election</a></li>
						<li><a href="#PartIChapter3Section2" title="go to Part I, Chapter 3, section 2 ">2. The 1997 general election</a></li>
						<li><a href="#PartIChapter3Section3" title="go to Part I, Chapter 3, section 3 ">3. Prime Minister Blair: 1997-2007</a></li>
						<li><a href="#PartIChapter3Section4" title="go to Part I, Chapter 3, section 4 ">4. Prime Minister Brown: 2007-2010</a></li>
						<li><a href="#PartIChapter3Section5" title="go to Part I, Chapter 3, section 5 ">5. Political news management</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartIChapter4" title="Go to Part I, Chapter 4">Chapter 4: The Conservative revival and the coalition</a>
					<ul>
						<li><a href="#PartIChapter4Section1" title="go to Part I, Chapter 4, section 1 ">1. Introduction and background</a></li>
						<li><a href="#PartIChapter4Section2" title="go to Part I, Chapter 4, section 2 ">2. Mr Cameron’s relations with the press whilst Leader of the Opposition</a></li>
						<li><a href="#PartIChapter4Section3" title="go to Part I, Chapter 4, section 3 ">3. Prime Minister Cameron: 2010-present</a></li>
						<li><a href="#PartIChapter4Section4" title="go to Part I, Chapter 4, section 4 ">4. Reflections</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartIChapter5" title="Go to Part I, Chapter 5">Chapter 5: Media policy: examples from recent history</a>
					<ul>
						<li><a href="#PartIChapter5Section1" title="go to Part I, Chapter 5, section 1 ">1. Purchase of The Times and The Sunday Times</a></li>
						<li><a href="#PartIChapter5Section2" title="go to Part I, Chapter 5, section 2 ">2. Response to the reports of Sir David Calcutt QC</a></li>
						<li><a href="#PartIChapter5Section3" title="go to Part I, Chapter 5, section 3 ">3. Human Rights Act 1998</a></li>
						<li><a href="#PartIChapter5Section4" title="go to Part I, Chapter 5, section 4 ">4. Data Protection Act 1998</a></li>
						<li><a href="#PartIChapter5Section5" title="go to Part I, Chapter 5, section 5 ">5. Communications Act 2003</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartIChapter6" title="Go to Part I, Chapter 6">Chapter 6: media policy: The BSkyB bid</a>
					<ul>
						<li><a href="#PartIChapter6Section1" title="go to Part I, Chapter 6, section 1 ">1. Introduction</a></li>
						<li><a href="#PartIChapter6Section2" title="go to Part I, Chapter 6, section 2 ">2. The plurality test and quasi-judicial procedure</a></li>
						<li><a href="#PartIChapter6Section3" title="go to Part I, Chapter 6, section 3 ">3. June 2010 – December 2010: The Rt Hon Dr Vince Cable MP and the Department for Business, Innovation and Skills</a></li>
						<li><a href="#PartIChapter6Section4" title="go to Part I, Chapter 6, section 4 ">4. 21 December 2010: Dr Cable’s comments and the transfer of function</a></li>
						<li><a href="#PartIChapter6Section5" title="go to Part I, Chapter 6, section 5 ">5. December 2010 – July 2011: The Rt Hon Jeremy Hunt and the Department for Culture, Media and Sport</a></li>
						<li><a href="#PartIChapter6Section6" title="go to Part I, Chapter 6, section 6 ">6. News Corp and the Rt Hon Alex Salmond MSP</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartIChapter7" title="Go to Part I, Chapter 7">Chapter 7: Further political perspectives on relationships with the press</a>
					<ul>
						<li><a href="#PartIChapter7Section1" title="go to Part I, Chapter 7, section 1 ">1. Introduction</a></li>
						<li><a href="#PartIChapter7Section2" title="go to Part I, Chapter 7, section 2 ">2. The Deputy Prime Minister, the Rt Hon Nick Clegg MP</a></li>
						<li><a href="#PartIChapter7Section3" title="go to Part I, Chapter 7, section 3 ">3. The Leader of the Opposition, the Rt Hon Ed Miliband MP</a></li>
						<li><a href="#PartIChapter7Section4" title="go to Part I, Chapter 7, section 4 ">4. The First Minister of Scotland, the Rt Hon Alex Salmond MSP</a></li>
						<li><a href="#PartIChapter7Section5" title="go to Part I, Chapter 7, section 5 ">5. The Rt Hon Kenneth Clarke QC MP</a></li>
						<li><a href="#PartIChapter7Section6" title="go to Part I, Chapter 7, section 6 ">6. The Rt Hon Michael Gove MP</a></li>
						<li><a href="#PartIChapter7Section7" title="go to Part I, Chapter 7, section 7 ">7. The Rt Hon George Osborne MP</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartIChapter8" title="Go to Part I, Chapter 8">Chapter 8: Conclusions and recommendations</a>
					<ul>
						<li><a href="#PartIChapter8Section1" title="go to Part I, Chapter 8, section 1 ">1. Introduction</a></li>
						<li><a href="#PartIChapter8Section2" title="go to Part I, Chapter 8, section 2 ">2. The proprietors</a></li>
						<li><a href="#PartIChapter8Section3" title="go to Part I, Chapter 8, section 3 ">3. ‘Too close’ a relationship</a></li>
						<li><a href="#PartIChapter8Section4" title="go to Part I, Chapter 8, section 4 ">4. Existing regulatory framework</a></li>
						<li><a href="#PartIChapter8Section5" title="go to Part I, Chapter 8, section 5 ">5. Recommendations for future relations between politicians and the press</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartIChapter9" title="Go to Part I, Chapter 9">Chapter 9: Plurality and media ownership: conclusions and recommendations</a>
					<ul>
						<li><a href="#PartIChapter9Section1" title="go to Part I, Chapter 9, section 1 ">1. Introduction</a></li>
						<li><a href="#PartIChapter9Section2" title="go to Part I, Chapter 9, section 2 ">2. Scope</a></li>
						<li><a href="#PartIChapter9Section3" title="go to Part I, Chapter 9, section 3 ">3. Measuring plurality</a></li>
						<li><a href="#PartIChapter9Section4" title="go to Part I, Chapter 9, section 4 ">4. Limits and remedies</a></li>
						<li><a href="#PartIChapter9Section5" title="go to Part I, Chapter 9, section 5 ">5. What should trigger a review?</a></li>
						<li><a href="#PartIChapter9Section6" title="go to Part I, Chapter 9, section 6 ">6. Who should be responsible for the decisions?</a></li>
					</ul>
				</li>
			</ul>
		</li>	
	</ul>
 <h2 class="contentsvolume">Volume IV</h2>
 	<ul class="contents">
		<li class="contentspart"><a href="#PartJ" title="go to part J">PART J: ASPECTS OF REGULATION: THE LAW AND THE PRESS COMPLAINTS COMMISSION</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartJChapter1" title="Go to Part J, Chapter 1">Chapter 1: Introduction</a></li>
				<li class="contentschapter"><a href="#contentPartJChapter2" title="Go to Part J, Chapter 2">Chapter 2: the criminal law</a>
					<ul>
						<li><a href="#PartJChapter2Section1" title="go to Part J, Chapter 2, section 1 ">1. Introduction</a></li>
						<li><a href="#PartJChapter2Section2" title="go to Part J, Chapter 2, section 2 ">2. The investigation of crime: complaints to the police</a></li>
						<li><a href="#PartJChapter2Section3" title="go to Part J, Chapter 2, section 3 ">3. The Investigation of crime: gathering evidence</a></li>
						<li><a href="#PartJChapter2Section4" title="go to Part J, Chapter 2, section 4 ">4. A failure of policing</a></li>
						<li><a href="#PartJChapter2Section5" title="go to Part J, Chapter 2, section 5 ">5. Police resources</a></li>
						<li><a href="#PartJChapter2Section6" title="go to Part J, Chapter 2, section 6 ">6. Public interest: a defence to crime</a></li>
						<li><a href="#PartJChapter2Section7" title="go to Part J, Chapter 2, section 7 ">7. Public interest: the decision to prosecute</a></li>
						<li><a href="#PartJChapter2Section8" title="go to Part J, Chapter 2, section 8 ">8. Public interest: other safeguards in the criminal process</a></li>
						<li><a href="#PartJChapter2Section9" title="go to Part J, Chapter 2, section 9 ">9. The future</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartJChapter3" title="Go to Part J, Chapter 3">Chapter 3: The civil law</a>
					<ul>
						<li><a href="#PartJChapter3Section1" title="go to Part J, Chapter 3, section 1 ">1. Introduction</a></li>
						<li><a href="#PartJChapter3Section2" title="go to Part J, Chapter 3, section 2 ">2. Civil proceedings: the present risk of litigation</a></li>
						<li><a href="#PartJChapter3Section3" title="go to Part J, Chapter 3, section 3 ">3. Litigation against the press</a></li>
						<li><a href="#PartJChapter3Section4" title="go to Part J, Chapter 3, section 4 ">4. The substantive civil law</a></li>
						<li><a href="#PartJChapter3Section5" title="go to Part J, Chapter 3, section 5 ">5. Damages</a></li>
						<li><a href="#PartJChapter3Section6" title="go to Part J, Chapter 3, section 6 ">6. Costs</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartJChapter4" title="Go to Part J, Chapter 4">Chapter 4: The Press Complaints Commission and its effectiveness</a>
					<ul>
						<li><a href="#PartJChapter4Section1" title="go to Part J, Chapter 4, section 1 ">1. Introduction</a></li>
						<li><a href="#PartJChapter4Section2" title="go to Part J, Chapter 4, section 2 ">2. What the PCC did well</a></li>
						<li><a href="#PartJChapter4Section3" title="go to Part J, Chapter 4, section 3 ">3. Independence from the industry</a></li>
						<li><a href="#PartJChapter4Section4" title="go to Part J, Chapter 4, section 4 ">4. The alignment with industry</a></li>
						<li><a href="#PartJChapter4Section5" title="go to Part J, Chapter 4, section 5 ">5. The PCC as regulator</a></li>
						<li><a href="#PartJChapter4Section6" title="go to Part J, Chapter 4, section 6 ">6. Structural problems with the PCC</a></li>
						<li><a href="#PartJChapter4Section7" title="go to Part J, Chapter 4, section 7 ">7. Investigatory failures</a></li>
						<li><a href="#PartJChapter4Section8" title="go to Part J, Chapter 4, section 8 ">8. Conclusions</a></li>
					</ul>
				</li>
			</ul>
 		</li>
		<li class="contentspart"><a href="#PartK" title="go to part K">PART K: REGULATORY MODELS FOR THE FUTURE</a>
			<ul>
				<li class="contentschapter"><a href="#contentPartKChapter1" title="Go to Part K, Chapter 1">Chapter 1: Criteria for a regulatory solution</a>
					<ul>
						<li><a href="#PartKChapter1Section1" title="go to Part K, Chapter 1, section 1 ">1. Introduction</a></li>
						<li><a href="#PartKChapter1Section2" title="go to Part K, Chapter 1, section 2 ">2. Effectiveness</a></li>
						<li><a href="#PartKChapter1Section3" title="go to Part K, Chapter 1, section 3 ">3. Fairness and objectivity of standards</a></li>
						<li><a href="#PartKChapter1Section4" title="go to Part K, Chapter 1, section 4 ">4. Independence and transparency of enforcement and compliance</a></li>
						<li><a href="#PartKChapter1Section5" title="go to Part K, Chapter 1, section 5 ">5. Powers and remedies</a></li>
						<li><a href="#PartKChapter1Section6" title="go to Part K, Chapter 1, section 6 ">6. Cost</a></li>
						<li><a href="#PartKChapter1Section7" title="go to Part K, Chapter 1, section 7 ">7. Accountability</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartKChapter2" title="Go to Part K, Chapter 2">Chapter 2: The self-regulatory model proposed by the PCC and PressBoF</a>
					<ul>
						<li><a href="#PartKChapter2Section1" title="go to Part K, Chapter 2, section 1 ">1. Industry acceptance of the need for reform</a></li>
						<li><a href="#PartKChapter2Section2" title="go to Part K, Chapter 2, section 2 ">2. The proposal: overview</a></li>
						<li><a href="#PartKChapter2Section3" title="go to Part K, Chapter 2, section 3 ">3. Governance and structures</a></li>
						<li><a href="#PartKChapter2Section4" title="go to Part K, Chapter 2, section 4 ">4. Complaints</a></li>
						<li><a href="#PartKChapter2Section5" title="go to Part K, Chapter 2, section 5 ">5. Standards and compliance</a></li>
						<li><a href="#PartKChapter2Section6" title="go to Part K, Chapter 2, section 6 ">6. Potential for growth</a></li>
						<li><a href="#PartKChapter2Section7" title="go to Part K, Chapter 2, section 7 ">7. Funding</a></li>
						<li><a href="#PartKChapter2Section8" title="go to Part K, Chapter 2, section 8 ">8. The Code and the Code Committee</a></li>
						<li><a href="#PartKChapter2Section9" title="go to Part K, Chapter 2, section 9 ">9. The Industry Funding Body</a></li>
						<li><a href="#PartKChapter2Section10" title="Go to Part K, Chapter 2, section 10">10. Incentives to membership</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartKChapter3" title="Go to Part K, Chapter 3">Chapter 3: Analysis of the model proposed by the PCC and PressBoF</a>
					<ul>
						<li><a href="#PartKChapter3Section1" title="go to Part K, Chapter 3, section 1 ">1. Introduction</a></li>
						<li><a href="#PartKChapter3Section2" title="go to Part K, Chapter 3, section 2 ">2. Effectiveness</a></li>
						<li><a href="#PartKChapter3Section3" title="go to Part K, Chapter 3, section 3 ">3. Fairness and objectivity of standards</a></li>
						<li><a href="#PartKChapter3Section4" title="go to Part K, Chapter 3, section 4 ">4. Independence and transparency of enforcement and compliance</a></li>
						<li><a href="#PartKChapter3Section5" title="go to Part K, Chapter 3, section 5 ">5. Powers and remedies</a></li>
						<li><a href="#PartKChapter3Section6" title="go to Part K, Chapter 3, section 6 ">6. Cost</a></li>
						<li><a href="#PartKChapter3Section7" title="go to Part K, Chapter 3, section 7 ">7. Response of editors and proprietors to the PCC and PressBoF proposals</a></li>
						<li><a href="#PartKChapter3Section8" title="go to Part K, Chapter 3, section 8 ">8. Summary and conclusions</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartKChapter4" title="Go to Part K, Chapter 4">Chapter 4: Other proposals submitted to the Inquiry</a>
					<ul>
						<li><a href="#PartKChapter4Section1" title="go to Part K, Chapter 4, section 1 ">1. Introduction</a></li>
						<li><a href="#PartKChapter4Section2" title="go to Part K, Chapter 4, section 2 ">2. A new regulatory body</a></li>
						<li><a href="#PartKChapter4Section3" title="go to Part K, Chapter 4, section 3 ">3. Functions and structures</a></li>
						<li><a href="#PartKChapter4Section4" title="go to Part K, Chapter 4, section 4 ">4. Should coverage be voluntary or mandatory?</a></li>
						<li><a href="#PartKChapter4Section5" title="go to Part K, Chapter 4, section 5 ">5. Incentives for membership</a></li>
						<li><a href="#PartKChapter4Section6" title="go to Part K, Chapter 4, section 6 ">6. Statutory recognition</a></li>
						<li><a href="#PartKChapter4Section7" title="go to Part K, Chapter 4, section 7 ">7. Statutory provision</a></li>
						<li><a href="#PartKChapter4Section8" title="go to Part K, Chapter 4, section 8 ">8. The Code</a></li>
						<li><a href="#PartKChapter4Section9" title="go to Part K, Chapter 4, section 9 ">9. Complaint handling</a></li>
						<li><a href="#PartKChapter4Section10" title="Go to Part K, Chapter 4, section 10">10. Remedies and redress</a></li>
						<li><a href="#PartKChapter4Section11" title="Go to Part K, Chapter 4, section 11">11. Sanctions</a></li>
						<li><a href="#PartKChapter4Section12" title="Go to Part K, Chapter 4, section 12">12. Dispute resolution</a></li>
						<li><a href="#PartKChapter4Section13" title="Go to Part K, Chapter 4, section 13">13. The role of the courts</a></li>
						<li><a href="#PartKChapter4Section14" title="Go to Part K, Chapter 4, section 14">14. Costs and funding</a></li>
						<li><a href="#PartKChapter4Section15" title="Go to Part K, Chapter 4, section 15">15. Protection and promotion of freedom of expression</a></li>
						<li><a href="#PartKChapter4Section16" title="Go to Part K, Chapter 4, section 16">16. Protection of journalists</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartKChapter5" title="Go to Part K, Chapter 5">Chapter 5: International comparators</a>
					<ul>
						<li><a href="#PartKChapter5Section1" title="go to Part K, Chapter 5, section 1 ">1. The Press Council of Ireland and the Press Ombudsman</a></li>
						<li><a href="#PartKChapter5Section2" title="go to Part K, Chapter 5, section 2 ">2. Other models of press regulation: Europe and beyond</a></li>
						<li><a href="#PartKChapter5Section3" title="go to Part K, Chapter 5, section 3 ">3. Review of press regulation: Australia and New Zealand</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartKChapter6" title="Go to Part K, Chapter 6">Chapter 6: Techniques of regulation</a>
					<ul>
						<li><a href="#PartKChapter6Section1" title="go to Part K, Chapter 6, section 1 ">1. Introduction</a></li>
						<li><a href="#PartKChapter6Section2" title="go to Part K, Chapter 6, section 2 ">2. Regulatory options</a></li>
						<li><a href="#PartKChapter6Section3" title="go to Part K, Chapter 6, section 3 ">3. Regulatory tools</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartKChapter7" title="Go to Part K, Chapter 7">Chapter 7: Conclusions and recommendations for future regulationof the press 17</a>
					<ul>
						<li><a href="#PartKChapter7Section1" title="go to Part K, Chapter 7, section 1 ">1, Introduction</a></li>
						<li><a href="#PartKChapter7Section2" title="go to Part K, Chapter 7, section 2 ">2. Options put forward</a></li>
						<li><a href="#PartKChapter7Section3" title="go to Part K, Chapter 7, section 3 ">3. A new system must include everyone</a></li>
						<li><a href="#PartKChapter7Section4" title="go to Part K, Chapter 7, section 4 ">4. Voluntary independent self-regulation</a></li>
						<li><a href="#PartKChapter7Section5" title="go to Part K, Chapter 7, section 5 ">5. Encouraging membership</a></li>
						<li><a href="#PartKChapter7Section6" title="go to Part K, Chapter 7, section 6 ">6. Giving effect to the incentives</a></li>
						<li><a href="#PartKChapter7Section7" title="go to Part K, Chapter 7, section 7 ">7. Summary of recommendations</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartKChapter8" title="Go to Part K, Chapter 8">Chapter 8: The alternatives</a>
					<ul>
						<li><a href="#PartKChapter8Section1" title="go to Part K, Chapter 8, section 1 ">1. The issue</a></li>
						<li><a href="#PartKChapter8Section2" title="go to Part K, Chapter 8, section 2 ">2. The questions</a></li>
						<li><a href="#PartKChapter8Section3" title="go to Part K, Chapter 8, section 3 ">3. What standards should be complied with?</a></li>
						<li><a href="#PartKChapter8Section4" title="go to Part K, Chapter 8, section 4 ">4. What consequences should apply for breach?</a></li>
						<li><a href="#PartKChapter8Section5" title="go to Part K, Chapter 8, section 5 ">5. How should any consequences be applied?</a></li>
						<li><a href="#PartKChapter8Section6" title="go to Part K, Chapter 8, section 6 ">6. To whom should any provision apply?</a></li>
						<li><a href="#PartKChapter8Section7" title="go to Part K, Chapter 8, section 7 ">7. My views</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="#contentPartKChapter9" title="Go to Part K, Chapter 9">Chapter 9: recommendations for a self-regulatory body</a>
					<ul>
						<li><a href="#PartKChapter9Section1" title="go to Part K, Chapter 9, section 1 ">1. Introduction</a></li>
						<li><a href="#PartKChapter9Section2" title="go to Part K, Chapter 9, section 2 ">2. Recommendations to a new regulatory body</a></li>
					</ul>
				</li>
			</ul>
		</li>	
 		<li class="contentspart"><a href="#PartL" title="go to part L">PART L: SUMMARY OF RECOMMENDATIONS</a></li>
 		<li class="contentspart"><a href="#Appendices">APPENDICES</a>
			<ul>
				<li class="appendixtitle"><a href="#contentAppendix1">Appendix 1: Counsel to the Inquiry and the Inquiry Team</a></li>
				<li class="appendixtitle"><a href="#contentAppendix2">Appendix 2: Submissions and correspondence statistics</a></li>
				<li class="appendixtitle"><a href="#contentAppendix3">Appendix 3: Witnesses to the Inquiry</a></li>
				<li class="appendixtitle"><a href="#contentAppendix4">Appendix 4: Legal materials</a></li>
				<li class="appendixtitle"><a href="#contentAppendix5">Appendix 5: Evidence relevant to the generic conclusions on the relationship between politicians and the press: Part I, Chapter 8,.</a></li>
				<li class="appendixtitle"><a href="#contentAppendix6">Appendix 6: Bibliography</a></li>
			</ul>
		</li>	
	</ul>
</div>
<!-- end contents-->

<?php

/* Content */

echo "<a name=\"PartA\"></a>\n";
require_once('../A/chapter1/content.php');
require_once('../A/chapter2/content.php');
require_once('../A/chapter3/content.php');
require_once('../A/chapter4/content.php');
echo "<a name=\"PartB\"></a>\n";
require_once('../B/chapter1/content.php');
require_once('../B/chapter2/content.php');
require_once('../B/chapter3/content.php');
require_once('../B/chapter4/content.php');
echo "<a name=\"PartC\"></a>\n";
require_once('../C/chapter1/content.php');
require_once('../C/chapter2/content.php');
require_once('../C/chapter3/content.php');
require_once('../C/chapter4/content.php');
echo "<a name=\"PartD\"></a>\n";
require_once('../D/chapter1/content.php');
require_once('../D/chapter2/content.php');
echo "<a name=\"PartE\"></a>\n";
require_once('../E/chapter1/content.php');
require_once('../E/chapter2/content.php');
require_once('../E/chapter3/content.php');
require_once('../E/chapter4/content.php');
require_once('../E/chapter5/content.php');
echo "<a name=\"PartF\"></a>\n";
require_once('../F/chapter1/content.php');
require_once('../F/chapter2/content.php');
require_once('../F/chapter3/content.php');
require_once('../F/chapter4/content.php');
require_once('../F/chapter5/content.php');
require_once('../F/chapter6/content.php');
require_once('../F/chapter7/content.php');
echo "<a name=\"PartG\"></a>\n";
require_once('../G/chapter1/content.php');
require_once('../G/chapter2/content.php');
require_once('../G/chapter3/content.php');
require_once('../G/chapter4/content.php');
echo "<a name=\"PartH\"></a>\n";
require_once('../H/chapter1/content.php');
require_once('../H/chapter2/content.php');
require_once('../H/chapter3/content.php');
require_once('../H/chapter4/content.php');
require_once('../H/chapter5/content.php');
require_once('../H/chapter6/content.php');
require_once('../H/chapter7/content.php');
echo "<a name=\"PartI\"></a>\n";
require_once('../I/chapter1/content.php');
require_once('../I/chapter2/content.php');
require_once('../I/chapter3/content.php');
require_once('../I/chapter4/content.php');
require_once('../I/chapter5/content.php');
require_once('../I/chapter6/content.php');
require_once('../I/chapter7/content.php');
require_once('../I/chapter8/content.php');
require_once('../I/chapter9/content.php');
echo "<a name=\"PartJ\"></a>\n";
require_once('../J/chapter1/content.php');
require_once('../J/chapter2/content.php');
require_once('../J/chapter3/content.php');
require_once('../J/chapter4/content.php');
echo "<a name=\"PartK\"></a>\n";
require_once('../K/chapter1/content.php');
require_once('../K/chapter2/content.php');
require_once('../K/chapter3/content.php');
require_once('../K/chapter4/content.php');
require_once('../K/chapter5/content.php');
require_once('../K/chapter6/content.php');
require_once('../K/chapter7/content.php');
require_once('../K/chapter8/content.php');
require_once('../K/chapter9/content.php');
echo "<a name=\"PartL\"></a>\n";
require_once('../L/content.php');
echo "<a name=\"Appendices\"></a>\n";
require_once('../appendices/appendix1/content.php');
require_once('../appendices/appendix2/content.php');
require_once('../appendices/appendix3/content.php');
require_once('../appendices/appendix4/content.php');
require_once('../appendices/appendix5/content.php');
require_once('../appendices/appendix6/content.php');

/* Footnotes */

echo "<h2>Footnotes for Part A, Chapter 1</h2>";
require_once('../A/chapter1/footnotes.php');
echo "<h2>Footnotes for Part A, Chapter 2</h2>";
require_once('../A/chapter2/footnotes.php');
echo "<h2>Footnotes for Part A, Chapter 3</h2>";
require_once('../A/chapter3/footnotes.php');
echo "<h2>Footnotes for Part A, Chapter 4</h2>";
require_once('../A/chapter4/footnotes.php');

echo "<h2>Footnotes for Part B, Chapter 1</h2>";
require_once('../B/chapter1/footnotes.php');
echo "<h2>Footnotes for Part B, Chapter 2</h2>";
require_once('../B/chapter2/footnotes.php');
echo "<h2>Footnotes for Part B, Chapter 3</h2>";
require_once('../B/chapter3/footnotes.php');
echo "<h2>Footnotes for Part B, Chapter 4</h2>";
require_once('../B/chapter4/footnotes.php');

echo "<h2>Footnotes for Part C, Chapter 1</h2>";
require_once('../C/chapter1/footnotes.php');
echo "<h2>Footnotes for Part C, Chapter 2</h2>";
require_once('../C/chapter2/footnotes.php');
echo "<h2>Footnotes for Part C, Chapter 3</h2>";
require_once('../C/chapter3/footnotes.php');
echo "<h2>Footnotes for Part C, Chapter 4</h2>";
require_once('../C/chapter4/footnotes.php');

echo "<h2>Footnotes for Part D, Chapter 1</h2>";
require_once('../D/chapter1/footnotes.php');
echo "<h2>Footnotes for Part D, Chapter 2</h2>";
require_once('../D/chapter2/footnotes.php');

echo "<h2>Footnotes for Part E, Chapter 1</h2>";
require_once('../E/chapter1/footnotes.php');
echo "<h2>Footnotes for Part E, Chapter 2</h2>";
require_once('../E/chapter2/footnotes.php');
echo "<h2>Footnotes for Part E, Chapter 3</h2>";
require_once('../E/chapter3/footnotes.php');
echo "<h2>Footnotes for Part E, Chapter 4</h2>";
require_once('../E/chapter4/footnotes.php');
echo "<h2>Footnotes for Part E, Chapter 5</h2>";
require_once('../E/chapter5/footnotes.php');

echo "<h2>Footnotes for Part F, Chapter 1</h2>";
require_once('../F/chapter1/footnotes.php');
echo "<h2>Footnotes for Part F, Chapter 2</h2>";
require_once('../F/chapter2/footnotes.php');
echo "<h2>Footnotes for Part F, Chapter 3</h2>";
require_once('../F/chapter3/footnotes.php');
echo "<h2>Footnotes for Part F, Chapter 4</h2>";
require_once('../F/chapter4/footnotes.php');
echo "<h2>Footnotes for Part F, Chapter 5</h2>";
require_once('../F/chapter5/footnotes.php');
echo "<h2>Footnotes for Part F, Chapter 6</h2>";
require_once('../F/chapter6/footnotes.php');
echo "<h2>Footnotes for Part F, Chapter 7</h2>";
require_once('../F/chapter7/footnotes.php');

echo "<h2>Footnotes for Part G, Chapter 1</h2>";
require_once('../G/chapter1/footnotes.php');
echo "<h2>Footnotes for Part G, Chapter 2</h2>";
require_once('../G/chapter2/footnotes.php');
echo "<h2>Footnotes for Part G, Chapter 3</h2>";
require_once('../G/chapter3/footnotes.php');
echo "<h2>Footnotes for Part G, Chapter 4</h2>";
require_once('../G/chapter4/footnotes.php');

echo "<h2>Footnotes for Part H, Chapter 1</h2>";
require_once('../H/chapter1/footnotes.php');
echo "<h2>Footnotes for Part H, Chapter 2</h2>";
require_once('../H/chapter2/footnotes.php');
echo "<h2>Footnotes for Part H, Chapter 3</h2>";
require_once('../H/chapter3/footnotes.php');
echo "<h2>Footnotes for Part H, Chapter 4</h2>";
require_once('../H/chapter4/footnotes.php');
echo "<h2>Footnotes for Part H, Chapter 5</h2>";
require_once('../H/chapter5/footnotes.php');
echo "<h2>Footnotes for Part H, Chapter 6</h2>";
require_once('../H/chapter6/footnotes.php');
echo "<h2>Footnotes for Part H, Chapter 7</h2>";
require_once('../H/chapter7/footnotes.php');

echo "<h2>Footnotes for Part I, Chapter 1</h2>";
require_once('../I/chapter1/footnotes.php');
echo "<h2>Footnotes for Part I, Chapter 2</h2>";
require_once('../I/chapter2/footnotes.php');
echo "<h2>Footnotes for Part I, Chapter 3</h2>";
require_once('../I/chapter3/footnotes.php');
echo "<h2>Footnotes for Part I, Chapter 4</h2>";
require_once('../I/chapter4/footnotes.php');
echo "<h2>Footnotes for Part I, Chapter 5</h2>";
require_once('../I/chapter5/footnotes.php');
echo "<h2>Footnotes for Part I, Chapter 6</h2>";
require_once('../I/chapter6/footnotes.php');
echo "<h2>Footnotes for Part I, Chapter 7</h2>";
require_once('../I/chapter7/footnotes.php');
echo "<h2>Footnotes for Part I, Chapter 8</h2>";
require_once('../I/chapter8/footnotes.php');
echo "<h2>Footnotes for Part I, Chapter 9</h2>";
require_once('../I/chapter9/footnotes.php');

echo "<h2>Footnotes for Part J, Chapter 1</h2>";
require_once('../J/chapter1/footnotes.php');
echo "<h2>Footnotes for Part J, Chapter 2</h2>";
require_once('../J/chapter2/footnotes.php');
echo "<h2>Footnotes for Part J, Chapter 3</h2>";
require_once('../J/chapter3/footnotes.php');
echo "<h2>Footnotes for Part J, Chapter 4</h2>";
require_once('../J/chapter4/footnotes.php');

echo "<h2>Footnotes for Part K, Chapter 1</h2>";
require_once('../K/chapter1/footnotes.php');
echo "<h2>Footnotes for Part K, Chapter 2</h2>";
require_once('../K/chapter2/footnotes.php');
echo "<h2>Footnotes for Part K, Chapter 3</h2>";
require_once('../K/chapter3/footnotes.php');
echo "<h2>Footnotes for Part K, Chapter 4</h2>";
require_once('../K/chapter4/footnotes.php');
echo "<h2>Footnotes for Part K, Chapter 5</h2>";
require_once('../K/chapter5/footnotes.php');
echo "<h2>Footnotes for Part K, Chapter 6</h2>";
require_once('../K/chapter6/footnotes.php');
echo "<h2>Footnotes for Part K, Chapter 7</h2>";
require_once('../K/chapter7/footnotes.php');
echo "<h2>Footnotes for Part K, Chapter 8</h2>";
require_once('../K/chapter8/footnotes.php');
echo "<h2>Footnotes for Part K, Chapter 9</h2>";
require_once('../K/chapter9/footnotes.php');

echo "<h2>Footnotes for Part L</h2>";
require_once('../L/footnotes.php');

echo "<h2>Footnotes for Appendix 1</h2>";
require_once('../appendices/appendix1/footnotes.php');
echo "<h2>Footnotes for Appendix 4</h2>";
require_once('../appendices/appendix4/footnotes.php');

?>


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
