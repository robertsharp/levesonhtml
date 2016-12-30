<?php 
require_once('common.php');
levesonHeader('','');
levesonNav('');
?>
<div id="topheader">
<h1 id="top">The Leveson Report<span class="hiddenstructure">(As It Should Be)</span></h1>
<p class="strapline">An open, linkable, HTML version of Lord Justice Leveson&#8217;s report into the culture, practices and ethics of the press</p>
</div><!--end front page logo-->
<div id="divein">
<p>Jump to the <a href="#contents">contents page</a>, or dive right in at <a href="A/chapter1/"><?php internalChapterLink('../../','A',1); ?></a></p>
</div>
<div id="why">
<h2>An explanation of the project</h2>
	<h3>Our right to the text</h3>
		<p>Every year, our democracy produces billions of words. Parliament publishes Bills, Acts of Parliament, Hansard transcripts of debates and evidence sessions, and Select Committee reports. The Government and its agencies generate policy papers, consultation documents, guidelines, rules and regulations. The judiciary hands down judgements and makes case law. Journalists parse all this information into news and analysis, and civil society groups write their own recommendations for change.</p>
		<p>A modern and vibrant democracy must give everyone access to this text. The great parliamentary reformer John Wilkes fought legal battles with the Government to ensure that the deliberations of Parliament were published and available to be scrutinised by those less privileged. Today, this same principle of openness means that accessing all influential documents should be quick and easy. We should also be able work with the text - 'copying and pasting' paragraphs into our own documents. We should be able to perform meta-analyses on the documents produced by others, asking whether the words they use shape the policy they make.</p>
	<h3>The Leveson Report</h3>
		<p><a href="http://www.levesoninquiry.org.uk/">The Inquiry into the Culture, Practice and Ethics of the Press</a>, conducted by Lord Justice Leveson in 2012, was a crucial moment in our politics. It examined the collusion of politicians, the police and the press to corrupt our culture and short-circuit our democracy. Its recommendations have huge impact on the idea of a free press. The report of the inquiry, published in November 2012, should be as accessible as possible, so that everyone can properly discuss its findings and recommendations.</p>
		<p>The four volume report is only officially available in two formats. One may order a printed copy from The Stationery Office at a cost of &pound;250. Or, you can <a href="http://www.official-documents.gov.uk/document/hc1213/hc07/0780/0780.asp">download a free PDF</a> from the <strong>official-documents.gov.uk</strong> website. This is an incomplete offering. The report has so many parts, chapters, sub-chapters and paragraphs that navigating the text is extremely hard. You cannot embed a link to a particular page or line in a PDF document (unless you are the author of that document) so those debating the report are reduced to citing its findings only by page number, as we did in the pre-internet era. Additionally, the PDF format does not lend itself to copy-and-paste or meta-analysis.</p>
		<p><strong>The Leveson Report (As It Should Be)</strong> seeks to fix this issue. It presents the entire text of the Leveson Report in HMTL format. Those who wish to cite particular paragraphs in the report can link to a web page here, rather than to a cumbersome PDF document. The hope is that this will aid discussion of the report and its recommendations, and give more people a say in how our politics is conducted.</p>
		<!-- <h3>The value of cross-referencing</h3>
		<p>Checking sources and cross-referencing texts are an important part of political and academic debate. It is vital to be able to check the veracity of a quote, or read what was said in its full context. In academia, the reader should always be able to view the data cited, to see for themselves whether it backs up the claims the author has made.</p>
		<p>In the past, cross-checking text took up a great deal of time. The reader would have to look up footnotes and then visit a library to read the whole of the cited text. Happily, digital technologies have made this process quicker, because many of the texts cited are available online.</p>
		<p>Moreover, Hypertext Markup Language (HTML), the underlying language of the World Wide Web, has the idea of cross-referencing built into its fabric. Not only may we click links to jump between web pages, but authors can embed bookmarks into their text so that particular paragraphs may be referenced with ease.</p>
	<h2>A mixed offering</h2>
		<p>To the credit of Government and Parliament, the texts they produce are becoming more accessible. Unfortunately, the format and design of their publications is inconsistent. <a href="http://www.legislation.gov.uk/">Legislation.gov.uk</a> is an excellent website, which presents our laws in HTML format on a clause by clause basis. Many branches of Government have begun to publish routinely on accessible web-pages.</p>
		<p>Unfortunately, the <a href="http://www.parliament.uk/business/publications/">online version of Hansard</a> (the parliamentary record) is flawed. Although it is possible to reference individual paragraphs or speakers, the text is presented as a representation of the printed page. Speeches and debates are split over multiple columns and sections, because that is how they are presented on the paper version of the Hansard. This is unnecessary in the digital age, when neither the reader nor the writer need worry about concepts such as 'margins', 'columns' and 'pages'.</p> -->
</div>

<div id="about">
<h2>About this project</h2>
<p>This project was initiated by <a href="http://www.robertsharp.co.uk" title="Visit my website">Robert Sharp</a>, inspired by the work of a long line of people, from John Wilkes to <a href="http://www.mysociety.org/">MySociety</a>.  The HTML files are available for <a href="https://github.com/robertsharp/levesonhtml" title="Go to the HTML repository on GitHub">free download via GitHub</a>, so you can read the Leveson Report offline, or even host a version on your own website.</p>
<p>These pages were created through a long series of <a href="http://en.wikipedia.org/wiki/Regular_expression" title="The REGEX Wikipedia page">REGEX</a> Search-and-Replace operations.  This process has a human element to it and there may be small formatting errors in the text, which I will gladly fix as soon as they are drawn to my attention.  If you spot any kind of error <a href="https://github.com/robertsharp/levesonhtml/issues" title="report an issue">then add it as an 'issue' on GitHub</a>.  I will warmly welcome any offers of collaboration, especially with the task of ensuring the files are as correct and complete as they can be.</p>
<p>You can show your appreciation for this project by spreading the word. <a href="http://ctt.ec/S8IY7" title="Send a tweet">Click here to send a tweet</a>.</p>
</div>






<!--end About section-->
<div id="use">
<h2>How to use this site</h2>
	<p>This site is structured using 'friendly' URL path names, so users can easily locate the part, chapter, section or paragraph they are looking for.</p>
	<ul>
		<li>To visit a <strong>part</strong>, type a forward-slash and then the letter after the URL.  For example:<br/><code>http://www.leveson.robertsharp.co.uk/<strong>A</strong></code> would take you to the main contents page for Part A.</li>
		<li>To visit a <strong>chapter</strong>, type a forward-slash and the desired chapter after the part.  For example:<br/><code>http://www.leveson.robertsharp.co.uk/<strong>B/chapter2</strong></code> would take you to chapter 2 in Part B.</li>
		<li>To visit a <strong>section</strong>, add a hash and then the section name after the chapter.  For example:<br/><code>http://www.leveson.robertsharp.co.uk/<strong>C/chapter3#section4</strong></code> would take you to section 4 in chapter 3 in Part C.</li>
		<li>To visit a <strong>paragraph</strong>, add a hash and then the paragraph number after the chapter, using a hyphen rather than a decimal point/period.  For example:<br/><code>http://www.leveson.robertsharp.co.uk/<strong>D/chapter2/#para6-1</strong></code> would take you to paragraph 6.1 in chapter 2 in Part D.</li>
	</ul>
	<p>There are a few other 'anchors' on the pages, too.  For example, formulations like <code>#recommendation34</code>, <code>#table-c1-1</code> and <code>#figK2-1</code> all work, so long as such an element actually exists in the relevant chapter you are linking to.</p>
	<p>The numbered paragraphs are all links.  You can get a link for any paragraph simply by right-clicking the number and choosing 'Copy Link Location'.  All footnote references are linked to their corresponding footnotes, and vice versa.</p>
	<p>If, for some reason, you wish to view the <em>entire</em> Leveson Report on a single web page, you can do so <a href="/full/" title="Full text of the Leveson Report (Approx 2 MB)">here</a>.</p>
</div>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//robertsharp.us9.list-manage.com/subscribe/post?u=a4a1bbdd1814b3fda345aed55&amp;id=98120877e9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to the mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group input-group">
    <strong>What kind of e-mails would you like to recieve </strong>
    <ul><li><input type="checkbox" value="1" name="group[14293][1]" id="mce-group[14293]-14293-0"><label for="mce-group[14293]-14293-0">Just general announcements</label></li>
<li><input type="checkbox" value="2" name="group[14293][2]" id="mce-group[14293]-14293-1"><label for="mce-group[14293]-14293-1">Notifications whenever the HTML files change</label></li>
</ul>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_a4a1bbdd1814b3fda345aed55_98120877e9" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<!--End mc_embed_signup-->

<div id="contents">
<h1>AN INQUIRY INTO THE CULTURE, PRACTICES AND ETHICS OF THE PRESS<br/><br/>Contents</h1>
<h2 class="contentsvolume">Volume I</h2>
	<ul class="contents">
		<li class="contentspart"><a href="A/" title="go to contents for part A">PART A: THE INQUIRY</a>
			<ul>
				<li class="contentschapter"><a href="A/chapter1/" title="Go to Chapter 1">Chapter 1: the Announcement</a>
					<ul>
						<li><a href="A/chapter1/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="A/chapter1/#section2" title="go to section 2">2. Role of the Assessors</a></li>
						<li><a href="A/chapter1/#section3" title="go to section 3">3. Visits</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="A/chapter2/" title="Go to Chapter 2">Chapter 2: the approach</a>
					<ul>
						<li><a href="A/chapter2/#section1" title="go to section 1">1. Setting up and preliminaries</a></li>
						<li><a href="A/chapter2/#section2" title="go to section 2">2. The gathering and presentation of evidence</a></li>
						<li><a href="A/chapter2/#section3" title="go to section 3">3. Challenging the evidence</a></li>
						<li><a href="A/chapter2/#section4" title="go to section 4">4. Other material</a></li>
						<li><a href="A/chapter2/#section5" title="go to section 5">5. Submissions</a></li>
						<li><a href="A/chapter2/#section6" title="go to section 6">6. Engagement with the public: the website</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="A/chapter3/" title="Go to Chapter 3">Chapter 3: Further issues of law</a>
					<ul>
						<li><a href="A/chapter3/#section1" title="go to section 1">1. Rule 13 of the Inquiry Rules 2006: the approach</a></li>
						<li><a href="A/chapter3/#section2" title="go to section 2">2. Rule 13 of the Inquiry Rules 2006: the practice</a></li>
						<li><a href="A/chapter3/#section3" title="go to section 3">3. The nature and standard of proof</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="A/chapter4/" title="Go to Chapter 4">Chapter 4: the Report</a>
					<ul>
						<li><a href="A/chapter4/#section1" title="go to section 1">1. Scope</a></li>
						<li><a href="A/chapter4/#section2" title="go to section 2">2. Purpose</a></li>
						<li><a href="A/chapter4/#section3" title="go to section 3">3. Timing and content</a></li>
					</ul>
				</li>
			</ul>
 		</li>
		<li class="contentspart"><a href="B/" title="go to contents for part B">PART B: THE PRESS AND THE PUBLIC INTEREST</a>
			<ul>
				<li class="contentschapter"><a href="B/chapter1/" title="Go to Chapter 1">Chapter 1: Introduction</a></li>
				<li class="contentschapter"><a href="B/chapter2/" title="Go to Chapter 2">Chapter 2: the freedom of the press and democracy</a>
					<ul>
						<li><a href="B/chapter2/#section1" title="go to section 1">1. Context</a></li>
						<li><a href="B/chapter2/#section2" title="go to section 2">2. A brief history of press freedom in the United Kingdom</a></li>
						<li><a href="B/chapter2/#section3" title="go to section 3">3. The importance of a free press: free communication</a></li>
						<li><a href="B/chapter2/#section4" title="go to section 4">4. The importance of a free press: public debate and holding power to account</a></li>
						<li><a href="B/chapter2/#section5" title="go to section 5">5. Press freedom within the rule of law and the role of statute</a></li>
						<li><a href="B/chapter2/#section6" title="go to section 6">6. The protection of sources and other legal privileges of the press</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="B/chapter3/" title="Go to Chapter 3">Chapter 3: Competing public interests</a>
					<ul>
						<li><a href="B/chapter3/#section1" title="go to section 1">1. Context</a></li>
						<li><a href="B/chapter3/#section2" title="go to section 2">2. Freedom of expression</a></li>
						<li><a href="B/chapter3/#section3" title="go to section 3">3. Personal autonomy and civil liberties</a></li>
						<li><a href="B/chapter3/#section4" title="go to section 4">4. Other public goods</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="B/chapter4/" title="Go to Chapter 4">Chapter 4: The responsibilities of the press</a>
					<ul>
						<li><a href="B/chapter4/#section1" title="go to section 1">1. Context</a></li>
						<li><a href="B/chapter4/#section2" title="go to section 2">2. Press power and the impact on society</a></li>
						<li><a href="B/chapter4/#section3" title="go to section 3">3. Communication: truth, comment and ‘assessability’</a></li>
						<li><a href="B/chapter4/#section4" title="go to section 4">4. Press ethics and the role of a code of ethics</a></li>
					</ul>
				</li>
			</ul>
 		</li>
		<li class="contentspart"><a href="C/" title="go to contents for part C">PART C: THE PRESS</a>
			<ul>
				<li class="contentschapter"><a href="C/chapter1/" title="Go to Chapter 1">Chapter 1: Context</a>
					<ul>
						<li><a href="C/chapter1/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="C/chapter1/#section2" title="go to section 2">2. Commercial pressure on the press</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="C/chapter2/" title="Go to Chapter 2">Chapter 2: The press: history, governance structures and finances</a>
					<ul>
						<li><a href="C/chapter2/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="C/chapter2/#section2" title="go to section 2">2. News Corporation</a></li>
						<li><a href="C/chapter2/#section3" title="go to section 3">3. Associated Newspapers Ltd</a></li>
						<li><a href="C/chapter2/#section4" title="go to section 4">4. Northern and Shell Media Group Ltd</a></li>
						<li><a href="C/chapter2/#section5" title="go to section 5">5. Trinity Mirror plc</a></li>
						<li><a href="C/chapter2/#section6" title="go to section 6">6. The Telegraph Media Group</a></li>
						<li><a href="C/chapter2/#section7" title="go to section 7">7. The Guardian Media Group</a></li>
						<li><a href="C/chapter2/#section8" title="go to section 8">8. The Independent Group</a></li>
						<li><a href="C/chapter2/#section9" title="go to section 9">9. The Financial Times</a></li>
						<li><a href="C/chapter2/#section10" title="go to section 10">10. The regional press</a></li>
						<li><a href="C/chapter2/#section11" title="go to section 11">11. Magazines and periodicals</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="C/chapter3/" title="Go to Chapter 3">Chapter 3: Alternative news providers</a>
					<ul>
						<li><a href="C/chapter3/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="C/chapter3/#section2" title="go to section 2">2. Broadcasters</a></li>
						<li><a href="C/chapter3/#section3" title="go to section 3">3. The World Wide Web</a></li>
						<li><a href="C/chapter3/#section4" title="go to section 4">4. Blogs and other web-based commentary</a></li>
						<li><a href="C/chapter3/#section5" title="go to section 5">5. Social networking sites</a></li>
						<li><a href="C/chapter3/#section6" title="go to section 6">6. Other providers</a></li>
						<li><a href="C/chapter3/#section7" title="go to section 7">7. Enforcement</a></li>
						<li><a href="C/chapter3/#section8" title="go to section 8">8. Press photographers</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="C/chapter4/" title="Go to Chapter 4">Chapter 4: Plurality</a>
					<ul>
						<li><a href="C/chapter4/#section1" title="go to section 1">1. What is plurality and why does it matter?</a></li>
						<li><a href="C/chapter4/#section2" title="go to section 2">2. Approaches to securing plurality</a></li>
						<li><a href="C/chapter4/#section3" title="go to section 3">3. The history of media ownership rules in the UK from the 1990s</a></li>
						<li><a href="C/chapter4/#section4" title="go to section 4">4. History of the newspaper ownership regime</a></li>
					</ul>
				</li>
			</ul>
		</li>
 		<li class="contentspart"><a href="D/" title="go to contents for part D">PART D: STANDARDS</a>
			<ul>
				<li class="contentschapter"><a href="D/chapter1/" title="Go to Chapter 1">Chapter 1: The historical background</a>
					<ul>
						<li><a href="D/chapter1/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="D/chapter1/#section2" title="go to section 2">2. The Royal Commission into the Press 1947</a></li>
						<li><a href="D/chapter1/#section3" title="go to section 3">3. The Royal Commission of 1962 and the Younger Committee into privacy</a></li>
						<li><a href="D/chapter1/#section4" title="go to section 4">4. The Royal Commission of 1974</a></li>
						<li><a href="D/chapter1/#section5" title="go to section 5">5. The first Report of Sir David Calcutt QC</a></li>
						<li><a href="D/chapter1/#section6" title="go to section 6">6. The second Report of Sir David Calcutt QC</a></li>
						<li><a href="D/chapter1/#section7" title="go to section 7">7. The death of Diana, Princess of Wales</a></li>
						<li><a href="D/chapter1/#section8" title="go to section 8">8. Conclusions</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="D/chapter2/" title="Go to Chapter 2">Chapter 2: Self-regulation of the press</a>
					<ul>
						<li><a href="D/chapter2/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="D/chapter2/#section2" title="go to section 2">2. The establishment of the PCC</a></li>
						<li><a href="D/chapter2/#section3" title="go to section 3">3. Current powers, operation and standards</a></li>
						<li><a href="D/chapter2/#section4" title="go to section 4">4. PressBoF</a></li>
						<li><a href="D/chapter2/#section5" title="go to section 5">5. Benefits of self-regulation</a></li>
						<li><a href="D/chapter2/#section6" title="go to section 6">6. Anti-harassment policy</a></li>
						<li><a href="D/chapter2/#section7" title="go to section 7">7. Complaints</a></li>
					</ul>
				</li>
			</ul>
		</li>
 		<li class="contentspart"><a href="E/" title="go to contents for part E">PART E: CROSSING LEGAL BOUNDARIES: THE CRIMINAL AND CIVIL LAW</a>
			<ul>
				<li class="contentschapter"><a href="E/chapter1/" title="Go to Chapter 1">Chapter 1: The legal framework</a></li>
				<li class="contentschapter"><a href="E/chapter2/" title="Go to Chapter 2">Chapter 2: Police investigations start</a>
					<ul>
						<li><a href="E/chapter2/#section1" title="go to section 1">1. Operation Reproof</a></li>
						<li><a href="E/chapter2/#section2" title="go to section 2">2. Operation Glade</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="E/chapter3/" title="Go to Chapter 3">Chapter 3: Operation motorman</a>
					<ul>
						<li><a href="E/chapter3/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="E/chapter3/#section2" title="go to section 2">2. The genesis of Operation Motorman</a></li>
						<li><a href="E/chapter3/#section3" title="go to section 3">3. The search</a></li>
						<li><a href="E/chapter3/#section4" title="go to section 4">4. Prosecutions arising from Operation Motorman</a></li>
						<li><a href="E/chapter3/#section5" title="go to section 5">5. Publication of Parliamentary Reports in 2006</a></li>
						<li><a href="E/chapter3/#section6" title="go to section 6">6. Conclusions</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="E/chapter4/" title="Go to Chapter 4">Chapter 4: Phone hacking: the expanding impact of Operation Caryatid</a>
					<ul>
						<li><a href="E/chapter4/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="E/chapter4/#section2" title="go to section 2">2. The collection of evidence</a></li>
						<li><a href="E/chapter4/#section3" title="go to section 3">3. The prosecution strategy</a></li>
						<li><a href="E/chapter4/#section4" title="go to section 4">4. The outcome to the prosecution</a></li>
						<li><a href="E/chapter4/#section5" title="go to section 5">5. Subsequent operational decisions</a></li>
						<li><a href="E/chapter4/#section6" title="go to section 6">6. Police strategy for the aftermath</a></li>
						<li><a href="E/chapter4/#section7" title="go to section 7">7. The reaction of the News of the World</a></li>
						<li><a href="E/chapter4/#section8" title="go to section 8">8. July 2009: The Guardian</a></li>
						<li><a href="E/chapter4/#section9" title="go to section 9">9. September 2010: The New York Times</a></li>
						<li><a href="E/chapter4/#section10" title="go to section 10">10. December 2010: The Guardian article and the aftermath</a></li>
						<li><a href="E/chapter4/#section11" title="go to section 11">11. The past unravels</a></li>
						<li><a href="E/chapter4/#section12" title="go to section 12">12. Conclusions: the police and the CPS</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="E/chapter5/" title="Go to Chapter 5">Chapter 5: A new approach to the allegations</a>
					<ul>
						<li><a href="E/chapter5/#section1" title="go to section 1">1. Police Inquiries: Operations Weeting, Elveden and Tuleta</a></li>
						<li><a href="E/chapter5/#section2" title="go to section 2">2. The Management and Standards Committee</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
 <h2 class="contentsvolume">Volume II</h2>
 	<ul class="contents">
		<li class="contentspart"><a href="F/" title="go to contents for part F">PART F: THE CULTURE, PRACTICES AND ETHICS OF THE PRESS: THE PRESS AND THE PUBLIC</a>
			<ul>
				<li class="contentschapter"><a href="F/chapter1/" title="Go to Chapter 1">Chapter 1: Introduction</a>
					<ul>
						<li><a href="F/chapter1/#section1" title="go to section 1">1. Overview</a></li>
						<li><a href="F/chapter1/#section2" title="go to section 2">2. Module One and the Terms of Reference</a></li>
						<li><a href="F/chapter1/#section3" title="go to section 3">3. Evidence in Module One of the Inquiry</a></li>
						<li><a href="F/chapter1/#section4" title="go to section 4">4. The structure of Part F of the Report</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="F/chapter2/" title="Go to Chapter 2">Chapter 2: Good practice</a>
					<ul>
						<li><a href="F/chapter2/#section1" title="go to section 1">1. The value and virtues of the UK press</a></li>
						<li><a href="F/chapter2/#section2" title="go to section 2">2. Some case studies</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="F/chapter3/" title="Go to Chapter 3">Chapter 3: Complaints of an unethical press</a>
					<ul>
						<li><a href="F/chapter3/#section1" title="go to section 1">1. Overview</a></li>
						<li><a href="F/chapter3/#section2" title="go to section 2">2. The complaints</a></li>
						<li><a href="F/chapter3/#section3" title="go to section 3">3. The harm</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="F/chapter4/" title="Go to Chapter 4">Chapter 4: Some practices at the news of the world</a>
					<ul>
						<li><a href="F/chapter4/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="F/chapter4/#section2" title="go to section 2">2. Influence on culture at the News of the World</a></li>
						<li><a href="F/chapter4/#section3" title="go to section 3">3. Attitude towards individuals</a></li>
						<li><a href="F/chapter4/#section4" title="go to section 4">4. Intrusion</a></li>
						<li><a href="F/chapter4/#section5" title="go to section 5">5. Investigative journalism</a></li>
						<li><a href="F/chapter4/#section6" title="go to section 6">6. Approach to compliance</a></li>
						<li><a href="F/chapter4/#section7" title="go to section 7">7. Credibility of witnesses</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="F/chapter5/" title="Go to Chapter 5">Chapter 5: some case studies</a>
					<ul>
						<li><a href="F/chapter5/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="F/chapter5/#section2" title="go to section 2">2. The Dowlers</a></li>
						<li><a href="F/chapter5/#section3" title="go to section 3">3. Kate and Gerry McCann</a></li>
						<li><a href="F/chapter5/#section4" title="go to section 4">4. Christopher Jefferies</a></li>
						<li><a href="F/chapter5/#section5" title="go to section 5">5. The Rt Hon Gordon Brown MP and his son’s illness</a></li>
						<li><a href="F/chapter5/#section6" title="go to section 6">6. Hugh Grant and ‘the mendacious smear’</a></li>
						<li><a href="F/chapter5/#section7" title="go to section 7">7. Sebastian Bowles</a></li>
						<li><a href="F/chapter5/#section8" title="go to section 8">8. Recent events: Royal photographs</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="F/chapter6/" title="Go to Chapter 6">Chapter 6: Criticisms of the culture, practices and ethics of the press</a>
					<ul>
						<li><a href="F/chapter6/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="F/chapter6/#section2" title="go to section 2">2. Lack of respect for privacy and dignity</a></li>
						<li><a href="F/chapter6/#section3" title="go to section 3">3. Unlawful or unethical acquisition of private information</a></li>
						<li><a href="F/chapter6/#section4" title="go to section 4">4. Breach of confidence and misuse of confidential and/or sensitive information</a></li>
						<li><a href="F/chapter6/#section5" title="go to section 5">5. Harassment</a></li>
						<li><a href="F/chapter6/#section6" title="go to section 6">6. Intrusion into grief and shock</a></li>
						<li><a href="F/chapter6/#section7" title="go to section 7">7. Treatment of children</a></li>
						<li><a href="F/chapter6/#section8" title="go to section 8">8. Representation of women and minorities</a></li>
						<li><a href="F/chapter6/#section9" title="go to section 9">9. Inaccuracy</a></li>
						<li><a href="F/chapter6/#section10" title="go to section 10">10. Financial controls and payments for stories</a></li>
						<li><a href="F/chapter6/#section11" title="go to section 11">11. Treatment of critics</a></li>
						<li><a href="F/chapter6/#section12" title="go to section 12">12. Complaints handling</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="F/chapter7/" title="Go to Chapter 7">Chapter 7: Conclusion</a>
					<ul>
						<li><a href="F/chapter7/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="F/chapter7/#section2" title="go to section 2">2. Possible causes</a></li>
						<li><a href="F/chapter7/#section3" title="go to section 3">3. The relevance of the internet</a></li>
						<li><a href="F/chapter7/#section4" title="go to section 4">4. The press response to this Inquiry</a></li>
					</ul>
				</li>
			</ul>
		</li>	
 		<li class="contentspart"><a href="G/" title="go to contents for part G">PART G: THE PRESS AND THE POLICE: THE RELATIONSHIP</a>
			<ul>
				<li class="contentschapter"><a href="G/chapter1/" title="Go to Chapter 1">Chapter 1: Policing with Consent: the role of the press</a>
					<ul>
						<li><a href="G/chapter1/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="G/chapter1/#section2" title="go to section 2">2. The purpose of the relationship and public confidence</a></li>
						<li><a href="G/chapter1/#section3" title="go to section 3">3. Tensions in the relationship between the media and the police</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="G/chapter2/" title="Go to Chapter 2">Chapter 2: The history of the relationship: different Approaches</a>
					<ul>
						<li><a href="G/chapter2/#section1" title="go to section 1">1. Metropolitan Police Service: the Commissioners</a></li>
						<li><a href="G/chapter2/#section2" title="go to section 2">2. Other police forces</a></li>
						<li><a href="G/chapter2/#section3" title="go to section 3">3. Press departments</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="G/chapter3/" title="Go to Chapter 3">Chapter 3: Press and the Police: the harm and the response</a>
					<ul>
						<li><a href="G/chapter3/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="G/chapter3/#section2" title="go to section 2">2. The use and abuse of information</a></li>
						<li><a href="G/chapter3/#section3" title="go to section 3">3. Entertainment: an overview</a></li>
						<li><a href="G/chapter3/#section4" title="go to section 4">4. The perception of influence</a></li>
						<li><a href="G/chapter3/#section5" title="go to section 5">5. The problems of friendship</a></li>
						<li><a href="G/chapter3/#section6" title="go to section 6">6. Calibrating the harm: the views of Commissioners</a></li>
						<li><a href="G/chapter3/#section7" title="go to section 7">7. The question of corruption</a></li>
						<li><a href="G/chapter3/#section8" title="go to section 8">8. Independent Police Complaints Commission (IPCC)</a></li>
						<li><a href="G/chapter3/#section9" title="go to section 9">9. HMIC report: ‘Without Fear or Favour’</a></li>
						<li><a href="G/chapter3/#section10" title="go to section 10">10. Elizabeth Filkin’s review of the relationship between the MPs and the media</a></li>
						<li><a href="G/chapter3/#section11" title="go to section 11">11. Association of Chief Police Officers (ACPO)</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="G/chapter4/" title="Go to Chapter 4">Chapter 4: The press and the police: conclusions and recommendations</a>
					<ul>
						<li><a href="G/chapter4/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="G/chapter4/#section2" title="go to section 2">2. Tip offs</a></li>
						<li><a href="G/chapter4/#section3" title="go to section 3">3. Involvement of the press on operations</a></li>
						<li><a href="G/chapter4/#section4" title="go to section 4">4. Off-the-record briefings</a></li>
						<li><a href="G/chapter4/#section5" title="go to section 5">5. Leaks of information</a></li>
						<li><a href="G/chapter4/#section6" title="go to section 6">6. Gifts, hospitability and entertainment</a></li>
						<li><a href="G/chapter4/#section7" title="go to section 7">7. Media employment</a></li>
						<li><a href="G/chapter4/#section8" title="go to section 8">8. Corruption, whistleblowing and related matters</a></li>
						<li><a href="G/chapter4/#section9" title="go to section 9">9. Conclusion</a></li>
					</ul>
				</li>
			</ul>
		</li>	
	</ul>
 <h2 class="contentsvolume">Volume III</h2>
 	<ul class="contents">
		<li class="contentspart"><a href="H/" title="go to contents for part H">PART H: THE PRESS AND DATA PROTECTION</a>
			<ul>
				<li class="contentschapter"><a href="H/chapter1/" title="Go to Chapter 1">Chapter 1: Introduction</a>
					<ul>
						<li><a href="H/chapter1/#section1" title="go to section 1">1. Background</a></li>
						<li><a href="H/chapter1/#section2" title="go to section 2">2. The ICO: structure, governance and approach</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="H/chapter2/" title="Go to Chapter 2">Chapter 2: Operation motorman</a>
					<ul>
						<li><a href="H/chapter2/#section1" title="go to section 1">1. The investigation</a></li>
						<li><a href="H/chapter2/#section2" title="go to section 2">2. The ICO response: leadership</a></li>
						<li><a href="H/chapter2/#section3" title="go to section 3">3. The approach to the PCC</a></li>
						<li><a href="H/chapter2/#section4" title="go to section 4">4. <em>What Price Privacy?</em> The political campaign</a></li>
						<li><a href="H/chapter2/#section5" title="go to section 5">5. <em>What Price Privacy?</em> The reaction of the PCC and the editors</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="H/chapter3/" title="Go to Chapter 3">Chapter 3: Other possible regulatory options</a>
					<ul>
						<li><a href="H/chapter3/#section1" title="go to section 1">1. Criminal proceedings in respect of journalists</a></li>
						<li><a href="H/chapter3/#section2" title="go to section 2">2. The use of regulatory powers</a></li>
						<li><a href="H/chapter3/#section3" title="go to section 3">3. Engagement with the industry: guidance and promoting good practice</a></li>
						<li><a href="H/chapter3/#section4" title="go to section 4">4. Engagement with victims</a></li>
						<li><a href="H/chapter3/#section5" title="go to section 5">5. Conclusions and the questions raised by Operation Motorman</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="H/chapter4/" title="Go to Chapter 4">Chapter 4: the ICo and the press today</a>
					<ul>
						<li><a href="H/chapter4/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="H/chapter4/#section2" title="go to section 2">2. Personal information privacy and press practices</a></li>
						<li><a href="H/chapter4/#section3" title="go to section 3">3. Following up Operation Motorman</a></li>
						<li><a href="H/chapter4/#section4" title="go to section 4">4. Following up the political campaign</a></li>
						<li><a href="H/chapter4/#section5" title="go to section 5">5. Phone hacking and the ICO</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="H/chapter5/" title="Go to Chapter 5">Chapter 5: Issues about the legal framework</a>
					<ul>
						<li><a href="H/chapter5/#section1" title="go to section 1">1. The current views of the ICO</a></li>
						<li><a href="H/chapter5/#section2" title="go to section 2">2. A different perspective on the legal framework</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="H/chapter6/" title="Go to Chapter 6">Chapter 6: The relationship: the ICO and the press</a>
					<ul>
						<li><a href="H/chapter6/#section1" title="go to section 1">1. “Too big for us?”</a></li>
						<li><a href="H/chapter6/#section2" title="go to section 2">2. The struggle for a profile: political campaigning and the power of the press</a></li>
						<li><a href="H/chapter6/#section3" title="go to section 3">3. Independent regulation of the press: lessons learned</a></li>
						<li><a href="H/chapter6/#section4" title="go to section 4">4. Powers, governance and capability of the ICO: reflections of the future</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="H/chapter7/" title="Go to Chapter 7">Chapter 7: Summary of recommendations</a></li>
			</ul>
		</li>	
 		<li class="contentspart"><a href="I/" title="go to contents for part I">PART I: THE PRESS AND POLITICIANS</a>
			<ul>
				<li class="contentschapter"><a href="I/chapter1/" title="Go to Chapter 1">Chapter 1: Introduction</a></li>
				<li class="contentschapter"><a href="I/chapter2/" title="Go to Chapter 2">Chapter 2: The Conservative years</a>
					<ul>
						<li><a href="I/chapter2/#section1" title="go to section 1">1. Prime Minister Thatcher: 1979-1990</a></li>
						<li><a href="I/chapter2/#section2" title="go to section 2">2. Prime Minister Major: 1990-1997</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="I/chapter3/" title="Go to Chapter 3">Chapter 3: New Labour</a>
					<ul>
						<li><a href="I/chapter3/#section1" title="go to section 1">1. The 1992 general election</a></li>
						<li><a href="I/chapter3/#section2" title="go to section 2">2. The 1997 general election</a></li>
						<li><a href="I/chapter3/#section3" title="go to section 3">3. Prime Minister Blair: 1997-2007</a></li>
						<li><a href="I/chapter3/#section4" title="go to section 4">4. Prime Minister Brown: 2007-2010</a></li>
						<li><a href="I/chapter3/#section5" title="go to section 5">5. Political news management</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="I/chapter4/" title="Go to Chapter 4">Chapter 4: The Conservative revival and the coalition</a>
					<ul>
						<li><a href="I/chapter4/#section1" title="go to section 1">1. Introduction and background</a></li>
						<li><a href="I/chapter4/#section2" title="go to section 2">2. Mr Cameron’s relations with the press whilst Leader of the Opposition</a></li>
						<li><a href="I/chapter4/#section3" title="go to section 3">3. Prime Minister Cameron: 2010-present</a></li>
						<li><a href="I/chapter4/#section4" title="go to section 4">4. Reflections</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="I/chapter5/" title="Go to Chapter 5">Chapter 5: Media policy: examples from recent history</a>
					<ul>
						<li><a href="I/chapter5/#section1" title="go to section 1">1. Purchase of The Times and The Sunday Times</a></li>
						<li><a href="I/chapter5/#section2" title="go to section 2">2. Response to the reports of Sir David Calcutt QC</a></li>
						<li><a href="I/chapter5/#section3" title="go to section 3">3. Human Rights Act 1998</a></li>
						<li><a href="I/chapter5/#section4" title="go to section 4">4. Data Protection Act 1998</a></li>
						<li><a href="I/chapter5/#section5" title="go to section 5">5. Communications Act 2003</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="I/chapter6/" title="Go to Chapter 6">Chapter 6: media policy: The BSkyB bid</a>
					<ul>
						<li><a href="I/chapter6/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="I/chapter6/#section2" title="go to section 2">2. The plurality test and quasi-judicial procedure</a></li>
						<li><a href="I/chapter6/#section3" title="go to section 3">3. June 2010 – December 2010: The Rt Hon Dr Vince Cable MP and the Department for Business, Innovation and Skills</a></li>
						<li><a href="I/chapter6/#section4" title="go to section 4">4. 21 December 2010: Dr Cable’s comments and the transfer of function</a></li>
						<li><a href="I/chapter6/#section5" title="go to section 5">5. December 2010 – July 2011: The Rt Hon Jeremy Hunt and the Department for Culture, Media and Sport</a></li>
						<li><a href="I/chapter6/#section6" title="go to section 6">6. News Corp and the Rt Hon Alex Salmond MSP</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="I/chapter7/" title="Go to Chapter 7">Chapter 7: Further political perspectives on relationships with the press</a>
					<ul>
						<li><a href="I/chapter7/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="I/chapter7/#section2" title="go to section 2">2. The Deputy Prime Minister, the Rt Hon Nick Clegg MP</a></li>
						<li><a href="I/chapter7/#section3" title="go to section 3">3. The Leader of the Opposition, the Rt Hon Ed Miliband MP</a></li>
						<li><a href="I/chapter7/#section4" title="go to section 4">4. The First Minister of Scotland, the Rt Hon Alex Salmond MSP</a></li>
						<li><a href="I/chapter7/#section5" title="go to section 5">5. The Rt Hon Kenneth Clarke QC MP</a></li>
						<li><a href="I/chapter7/#section6" title="go to section 6">6. The Rt Hon Michael Gove MP</a></li>
						<li><a href="I/chapter7/#section7" title="go to section 7">7. The Rt Hon George Osborne MP</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="I/chapter8/" title="Go to Chapter 8">Chapter 8: Conclusions and recommendations</a>
					<ul>
						<li><a href="I/chapter8/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="I/chapter8/#section2" title="go to section 2">2. The proprietors</a></li>
						<li><a href="I/chapter8/#section3" title="go to section 3">3. ‘Too close’ a relationship</a></li>
						<li><a href="I/chapter8/#section4" title="go to section 4">4. Existing regulatory framework</a></li>
						<li><a href="I/chapter8/#section5" title="go to section 5">5. Recommendations for future relations between politicians and the press</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="I/chapter9/" title="Go to Chapter 9">Chapter 9: Plurality and media ownership: conclusions and recommendations</a>
					<ul>
						<li><a href="I/chapter9/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="I/chapter9/#section2" title="go to section 2">2. Scope</a></li>
						<li><a href="I/chapter9/#section3" title="go to section 3">3. Measuring plurality</a></li>
						<li><a href="I/chapter9/#section4" title="go to section 4">4. Limits and remedies</a></li>
						<li><a href="I/chapter9/#section5" title="go to section 5">5. What should trigger a review?</a></li>
						<li><a href="I/chapter9/#section6" title="go to section 6">6. Who should be responsible for the decisions?</a></li>
					</ul>
				</li>
			</ul>
		</li>	
	</ul>
 <h2 class="contentsvolume">Volume IV</h2>
 	<ul class="contents">
		<li class="contentspart"><a href="J/" title="go to contents for part J">PART J: ASPECTS OF REGULATION: THE LAW AND THE PRESS COMPLAINTS COMMISSION</a>
			<ul>
				<li class="contentschapter"><a href="J/chapter1/" title="Go to Chapter 1">Chapter 1: Introduction</a></li>
				<li class="contentschapter"><a href="J/chapter2/" title="Go to Chapter 2">Chapter 2: the criminal law</a>
					<ul>
						<li><a href="J/chapter2/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="J/chapter2/#section2" title="go to section 2">2. The investigation of crime: complaints to the police</a></li>
						<li><a href="J/chapter2/#section3" title="go to section 3">3. The Investigation of crime: gathering evidence</a></li>
						<li><a href="J/chapter2/#section4" title="go to section 4">4. A failure of policing</a></li>
						<li><a href="J/chapter2/#section5" title="go to section 5">5. Police resources</a></li>
						<li><a href="J/chapter2/#section6" title="go to section 6">6. Public interest: a defence to crime</a></li>
						<li><a href="J/chapter2/#section7" title="go to section 7">7. Public interest: the decision to prosecute</a></li>
						<li><a href="J/chapter2/#section8" title="go to section 8">8. Public interest: other safeguards in the criminal process</a></li>
						<li><a href="J/chapter2/#section9" title="go to section 9">9. The future</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="J/chapter3/" title="Go to Chapter 3">Chapter 3: The civil law</a>
					<ul>
						<li><a href="J/chapter3/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="J/chapter3/#section2" title="go to section 2">2. Civil proceedings: the present risk of litigation</a></li>
						<li><a href="J/chapter3/#section3" title="go to section 3">3. Litigation against the press</a></li>
						<li><a href="J/chapter3/#section4" title="go to section 4">4. The substantive civil law</a></li>
						<li><a href="J/chapter3/#section5" title="go to section 5">5. Damages</a></li>
						<li><a href="J/chapter3/#section6" title="go to section 6">6. Costs</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="J/chapter4/" title="Go to Chapter 4">Chapter 4: The Press Complaints Commission and its effectiveness</a>
					<ul>
						<li><a href="J/chapter4/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="J/chapter4/#section2" title="go to section 2">2. What the PCC did well</a></li>
						<li><a href="J/chapter4/#section3" title="go to section 3">3. Independence from the industry</a></li>
						<li><a href="J/chapter4/#section4" title="go to section 4">4. The alignment with industry</a></li>
						<li><a href="J/chapter4/#section5" title="go to section 5">5. The PCC as regulator</a></li>
						<li><a href="J/chapter4/#section6" title="go to section 6">6. Structural problems with the PCC</a></li>
						<li><a href="J/chapter4/#section7" title="go to section 7">7. Investigatory failures</a></li>
						<li><a href="J/chapter4/#section8" title="go to section 8">8. Conclusions</a></li>
					</ul>
				</li>
			</ul>
 		</li>
		<li class="contentspart"><a href="K/" title="go to contents for part K">PART K: REGULATORY MODELS FOR THE FUTURE</a>
			<ul>
				<li class="contentschapter"><a href="K/chapter1/" title="Go to Chapter 1">Chapter 1: Criteria for a regulatory solution</a>
					<ul>
						<li><a href="K/chapter1/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="K/chapter1/#section2" title="go to section 2">2. Effectiveness</a></li>
						<li><a href="K/chapter1/#section3" title="go to section 3">3. Fairness and objectivity of standards</a></li>
						<li><a href="K/chapter1/#section4" title="go to section 4">4. Independence and transparency of enforcement and compliance</a></li>
						<li><a href="K/chapter1/#section5" title="go to section 5">5. Powers and remedies</a></li>
						<li><a href="K/chapter1/#section6" title="go to section 6">6. Cost</a></li>
						<li><a href="K/chapter1/#section7" title="go to section 7">7. Accountability</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="K/chapter2/" title="Go to Chapter 2">Chapter 2: The self-regulatory model proposed by the PCC and PressBoF</a>
					<ul>
						<li><a href="K/chapter2/#section1" title="go to section 1">1. Industry acceptance of the need for reform</a></li>
						<li><a href="K/chapter2/#section2" title="go to section 2">2. The proposal: overview</a></li>
						<li><a href="K/chapter2/#section3" title="go to section 3">3. Governance and structures</a></li>
						<li><a href="K/chapter2/#section4" title="go to section 4">4. Complaints</a></li>
						<li><a href="K/chapter2/#section5" title="go to section 5">5. Standards and compliance</a></li>
						<li><a href="K/chapter2/#section6" title="go to section 6">6. Potential for growth</a></li>
						<li><a href="K/chapter2/#section7" title="go to section 7">7. Funding</a></li>
						<li><a href="K/chapter2/#section8" title="go to section 8">8. The Code and the Code Committee</a></li>
						<li><a href="K/chapter2/#section9" title="go to section 9">9. The Industry Funding Body</a></li>
						<li><a href="K/chapter2/#section10" title="go to section 10">10. Incentives to membership</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="K/chapter3/" title="Go to Chapter 3">Chapter 3: Analysis of the model proposed by the PCC and PressBoF</a>
					<ul>
						<li><a href="K/chapter3/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="K/chapter3/#section2" title="go to section 2">2. Effectiveness</a></li>
						<li><a href="K/chapter3/#section3" title="go to section 3">3. Fairness and objectivity of standards</a></li>
						<li><a href="K/chapter3/#section4" title="go to section 4">4. Independence and transparency of enforcement and compliance</a></li>
						<li><a href="K/chapter3/#section5" title="go to section 5">5. Powers and remedies</a></li>
						<li><a href="K/chapter3/#section6" title="go to section 6">6. Cost</a></li>
						<li><a href="K/chapter3/#section7" title="go to section 7">7. Response of editors and proprietors to the PCC and PressBoF proposals</a></li>
						<li><a href="K/chapter3/#section8" title="go to section 8">8. Summary and conclusions</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="K/chapter4/" title="Go to Chapter 4">Chapter 4: Other proposals submitted to the Inquiry</a>
					<ul>
						<li><a href="K/chapter4/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="K/chapter4/#section2" title="go to section 2">2. A new regulatory body</a></li>
						<li><a href="K/chapter4/#section3" title="go to section 3">3. Functions and structures</a></li>
						<li><a href="K/chapter4/#section4" title="go to section 4">4. Should coverage be voluntary or mandatory?</a></li>
						<li><a href="K/chapter4/#section5" title="go to section 5">5. Incentives for membership</a></li>
						<li><a href="K/chapter4/#section6" title="go to section 6">6. Statutory recognition</a></li>
						<li><a href="K/chapter4/#section7" title="go to section 7">7. Statutory provision</a></li>
						<li><a href="K/chapter4/#section8" title="go to section 8">8. The Code</a></li>
						<li><a href="K/chapter4/#section9" title="go to section 9">9. Complaint handling</a></li>
						<li><a href="K/chapter4/#section10" title="go to section 10">10. Remedies and redress</a></li>
						<li><a href="K/chapter4/#section11" title="go to section 11">11. Sanctions</a></li>
						<li><a href="K/chapter4/#section12" title="go to section 12">12. Dispute resolution</a></li>
						<li><a href="K/chapter4/#section13" title="go to section 13">13. The role of the courts</a></li>
						<li><a href="K/chapter4/#section14" title="go to section 14">14. Costs and funding</a></li>
						<li><a href="K/chapter4/#section15" title="go to section 15">15. Protection and promotion of freedom of expression</a></li>
						<li><a href="K/chapter4/#section16" title="go to section 16">16. Protection of journalists</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="K/chapter5/" title="Go to Chapter 5">Chapter 5: International comparators</a>
					<ul>
						<li><a href="K/chapter5/#section1" title="go to section 1">1. The Press Council of Ireland and the Press Ombudsman</a></li>
						<li><a href="K/chapter5/#section2" title="go to section 2">2. Other models of press regulation: Europe and beyond</a></li>
						<li><a href="K/chapter5/#section3" title="go to section 3">3. Review of press regulation: Australia and New Zealand</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="K/chapter6/" title="Go to Chapter 6">Chapter 6: Techniques of regulation</a>
					<ul>
						<li><a href="K/chapter6/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="K/chapter6/#section2" title="go to section 2">2. Regulatory options</a></li>
						<li><a href="K/chapter6/#section3" title="go to section 3">3. Regulatory tools</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="K/chapter7/" title="Go to Chapter 7">Chapter 7: Conclusions and recommendations for future regulationof the press 17</a>
					<ul>
						<li><a href="K/chapter7/#section1" title="go to section 1">1, Introduction</a></li>
						<li><a href="K/chapter7/#section2" title="go to section 2">2. Options put forward</a></li>
						<li><a href="K/chapter7/#section3" title="go to section 3">3. A new system must include everyone</a></li>
						<li><a href="K/chapter7/#section4" title="go to section 4">4. Voluntary independent self-regulation</a></li>
						<li><a href="K/chapter7/#section5" title="go to section 5">5. Encouraging membership</a></li>
						<li><a href="K/chapter7/#section6" title="go to section 6">6. Giving effect to the incentives</a></li>
						<li><a href="K/chapter7/#section7" title="go to section 7">7. Summary of recommendations</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="K/chapter8/" title="Go to Chapter 8">Chapter 8: The alternatives</a>
					<ul>
						<li><a href="K/chapter8/#section1" title="go to section 1">1. The issue</a></li>
						<li><a href="K/chapter8/#section2" title="go to section 2">2. The questions</a></li>
						<li><a href="K/chapter8/#section3" title="go to section 3">3. What standards should be complied with?</a></li>
						<li><a href="K/chapter8/#section4" title="go to section 4">4. What consequences should apply for breach?</a></li>
						<li><a href="K/chapter8/#section5" title="go to section 5">5. How should any consequences be applied?</a></li>
						<li><a href="K/chapter8/#section6" title="go to section 6">6. To whom should any provision apply?</a></li>
						<li><a href="K/chapter8/#section7" title="go to section 7">7. My views</a></li>
					</ul>
				</li>
				<li class="contentschapter"><a href="K/chapter9/" title="Go to Chapter 9">Chapter 9: recommendations for a self-regulatory body</a>
					<ul>
						<li><a href="K/chapter9/#section1" title="go to section 1">1. Introduction</a></li>
						<li><a href="K/chapter9/#section2" title="go to section 2">2. Recommendations to a new regulatory body</a></li>
					</ul>
				</li>
			</ul>
		</li>	
 		<li class="contentspart"><a href="L/" title="go to contents for part L">PART L: SUMMARY OF RECOMMENDATIONS</a></li>
 		<li class="contentspart"><a href="appendices/">APPENDICES</a>
			<ul>
				<li class="appendixtitle"><a href="appendices/appendix1/">Appendix 1: Counsel to the Inquiry and the Inquiry Team</a></li>
				<li class="appendixtitle"><a href="appendices/appendix2/">Appendix 2: Submissions and correspondence statistics</a></li>
				<li class="appendixtitle"><a href="appendices/appendix3/">Appendix 3: Witnesses to the Inquiry</a></li>
				<li class="appendixtitle"><a href="appendices/appendix4/">Appendix 4: Legal materials</a></li>
				<li class="appendixtitle"><a href="appendices/appendix5/">Appendix 5: Evidence relevant to the generic conclusions on the relationship between politicians and the press: <?php internalChapterLink('../../','I',8); ?>.</a></li>
				<li class="appendixtitle"><a href="appendices/appendix6/">Appendix 6: Bibliography</a></li>
			</ul>
		</li>	
	</ul>
</div><!-- end contents-->
<div id="licence">
<h2>Licence</h2>
<p>The report of the Leveson Inquiry was published under an <a href="http://www.nationalarchives.gov.uk/doc/open-government-licence/version/2/" title="Visit the licence text at the National Archives website">Open Government Licence</a>.  The pages on this site are published under the same licence.</p>
</div>
<?php LevesonCommonFooter(); ?>