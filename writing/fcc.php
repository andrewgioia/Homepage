<?php	include('../header.php'); ?>

		<div id="caption">
			<h2>FCC Jurisdction Over ISPs in Protocol-Specific Bandwidth Throttling</h2>
			<p>
				This Note was published in <a href="http://mttlr.org/html/volume15issue2.html">Volume 15, Issue 2</a> of the Michigan Telecommunications and 
				Technology Law Review (MTTLR). A <a href="http://mttlr.org/volfifteen/gioia.pdf">PDF</a> is also available. Please cite this Note as: Andrew Gioia, 
				<em>FCC Jurisdiction over ISPs in Protocol-Specific Bandwidth Throttling</em>, <em class="smallcap">15 Mich. Telecomm. Tech. L. Rev. 517</em> (2009).
			</p>
		</div>
		
		<div id="article">
			<h2 id="#I">I. Introduction</h2>
			<p>
				Over the past decade, the Internet has matured from its dial-up infancy into the nation's dominant communications infrastructure. Such rapid growth 
				and accessibility&mdash;while fostering free speech and innovation like nothing before&mdash;has nonetheless created complex regulatory and policy 
				questions for both the Federal Communications Commission (FCC) and the cable companies providing the nation's broadband Internet access. For instance, 
				Comcast, one such Internet provider, has recently brought to the fore the question of how, and to what extent, the FCC can ensure an open and accessible 
				Internet through the company's recent actions in selectively targeting and interfering with the connections of certain peer-to-peer, or P2P, 
				applications.<sup id="a-1"><a href="<?php echo site_url($base,"#fn-1"); ?>">[1]</a></sup>
			</p>
			<p>
				After the FCC concluded this past summer that such conduct does not constitute reasonable network 
				management,<sup id="a-2"><a href="<?php echo site_url($base,"#fn-2"); ?>">[2]</a></sup> the existence and extent of the FCC's jurisdiction 
				over broadband Internet access was challenged by Comcast in the D.C. Circuit Court of Appeals.<sup id="a-3"><a href="<?php echo site_url($base,"#fn-3"); ?>">[3]</a></sup> 
				The FCC can and must act to address the types of unreasonable discrimination in which ISPs, like Comcast, have engaged if it wants to ensure an open, 
				competitive Internet and guarantee that broadband networks are "operated in a neutral manner,"<sup id="a-4"><a href="<?php echo site_url($base,"#fn-4"); ?>">[4]</a></sup> 
				and the 1996 Telecommunications Act conveniently provides the requisite jurisdictional basis for such action. First, Title I of the 1996 Act confers an 
				alternative basis for the FCC's statutory authority over broadband Internet providers&mdash;namely, its Title I "ancillary" jurisdiction over all wire 
				and radio communication.<sup id="a-5"><a href="<?php echo site_url($base,"#fn-5"); ?>">[5]</a></sup> Second, as Title I requires, the Commission's 
				exercise of that jurisdiction is "reasonably ancillary," or sufficiently related, to advancing congressional goals and policies&mdash;specifically, 
				Section 230 of the 1996 Act.<sup id="a-6"><a href="<?php echo site_url($base,"#fn-6"); ?>">[6]</a></sup> Finally, and just as importantly, the Supreme 
				Court has confirmed the FCC's ancillary jurisdiction over innovative technologies like broadband Internet throughout its long history addressing Title I.
			</p>
			<h2 id="#II">II. Technical and Procedural Background</h2>
			<h3 id="#II-A">A. <i>The BitTorrent Protocol</i></h3>
			<p>
				One of the more recent, and perhaps most prolific, sources of debate in maintaining "net neutrality" has been the BitTorrent protocol, an open-source, 
				peer-to-peer networking protocol (or standard of electronic communication) that allows users to download files from each other. Unlike traditional methods 
				of file sharing, which typically require a direct connection between a user's computer and a central hub, "BitTorrent employs a decentralized distribution 
				model: Each computer in a BitTorrent 'swarm' is able to download content from the other computers in the swarm, and in turn each computer also makes available 
				content for those same peers to download."<sup id="a-7"><a href="<?php echo site_url($base,"#fn-7"); ?>">[7]</a></sup> Essentially, BitTorrent allows users to download different portions of 
				the same file while simultaneously uploading parts of that file to other users, taking full advantage of the numerous Internet connections its users 
				establish.<sup id="a-8"><a href="<?php echo site_url($base,"#fn-8"); ?>">[8]</a></sup> Though it was originally popularized by users sharing allegedly unlawful content, new distributors 
				have begun to take commercial&mdash;but non-infringing&mdash;advantage of the efficiency and speed that the BitTorrent protocol offers as an improved 
				content delivery platform for existing television and video programming.<sup id="a-9"><a href="<?php echo site_url($base,"#fn-9"); ?>">[9]</a></sup>
			</p>
			<p>
				As a result, many new peer-to-peer applications have posed legitimate competitive threats to companies like Comcast, offering the same high-quality video 
				content which is otherwise available to watch on cable television and directly competing with the similar online video-on-demand ("VOD") services that Comcast 
				itself provides. Over the past year, Comcast has dedicated a large amount of its resources to providing video content delivered through cable television 
				whenever its customers want,<sup id="a-10"><a href="<?php echo site_url($base,"#fn-10"); ?>">[10]</a></sup> and has even begun "incorporating its VOD content online through sites competing 
				directly with BitTorrent protocol sites," such as its online Fancast service.<sup id="a-11"><a href="<?php echo site_url($base,"#fn-11"); ?>">[11]</a></sup>
			</p>
			<h3 id="#II-B">B. <i>Comcast's Protocol-Specific Discrimination Policy</i></h3>
			<p>
				Increasingly, Comcast provides broadband Internet access as well as the types of video content that competitors offer via BitTorrent.<sup id="a-12"><a href="<?php echo site_url($base,"#fn-12"); ?>">[12]</a></sup> 
				This arrangement has predictably led to significant conflicts of interest as Comcast attempts to balance its Internet use policies while bolstering its 
				competitive advantage online. Though all ISPs engage in some form of network management&mdash;for instance, placing restrictions on the amount of 
				information that can be transferred at one time and ensuring that all connections are continuous and reliable<sup id="a-13"><a href="<?php echo site_url($base,"#fn-13"); ?>">[13]</a></sup>&mdash;Comcast
				began, in late 2007, to single out BitTorrent, one of the protocols it determined was responsible for a disproportionate amount of network 
				activity.<sup id="a-14"><a href="<?php echo site_url($base,"#fn-14"); ?>">[14]</a></sup> Essentially, when one Comcast Internet user attempts to share a file or communicate with another 
				user, all of the data must pass through Comcast's servers. Under its policy, however, if Comcast determines that the data was sent via BitTorrent and 
				decides to act, each user receives a message "that looks like it comes from the other computer, telling it to stop communicating,"<sup id="a-15"><a href="<?php echo site_url($base,"#fn-15"); ?>">[15]</a></sup> 
				and terminates the connection. Moreover, "Comcast's interference affects all types of content, meaning that, for instance, an independent movie producer who 
				wanted to distribute his work using BitTorrent and his Comcast connection could find that difficult or impossible . . . ."<sup id="a-16"><a href="<?php echo site_url($base,"#fn-16"); ?>">[16]</a></sup>
			</p>
			<p>
				After a number of tests performed by the Associated Press<sup id="a-17"><a href="<?php echo site_url($base,"#fn-17"); ?>">[17]</a></sup> and the Electronic Frontier Foundation<sup id="a-18"><a href="<?php echo site_url($base,"#fn-18"); ?>">[18]</a></sup> 
				demonstrated that Comcast was indeed "actively interfer[ing] with attempts by some of its high-speed Internet subscribers to share files online" and 
				knowingly "falsifying network traffic,"<sup id="a-19"><a href="<?php echo site_url($base,"#fn-19"); ?>">[19]</a></sup> Comcast admitted that it was discriminately restricting certain types 
				of network activity and, nearly six months later, that its "P2P management [was] triggered . . . regardless of the level of overall network congestion at 
				the time, and regardless of the time of day."<sup id="a-20"><a href="<?php echo site_url($base,"#fn-20"); ?>">[20]</a></sup> As a result, Comcast’s customers across the country had up to 40 
				percent of their BitTorrent-established connections reset.<sup id="a-21"><a href="<?php echo site_url($base,"#fn-21"); ?>">[21]</a></sup>
			</p>
			<p>
				In light of this, both the newly formed Vuze, Inc., a company providing software to download and view licensed and self-published video content over the 
				BitTorrent protocol, and the media-focused nonprofit organization, Free Press, filed petitions against Comcast requesting a declaration that Comcast had 
				violated the FCC's Internet policies.<sup id="a-22"><a href="<?php echo site_url($base,"#fn-22"); ?>">[22]</a></sup> Vuze and Free Press asked the FCC to adopt a set of reasonable rules 
				that would prevent Comcast and other ISPs from discriminating against particular Internet applications, content, or technologies like that of 
				Vuze.<sup id="a-23"><a href="<?php echo site_url($base,"#fn-23"); ?>">[23]</a></sup> After months of public hearings across the country and in the Senate, culminating in more than 20,000 
				comments from concerned Comcast users,<sup id="a-24"><a href="<?php echo site_url($base,"#fn-24"); ?>">[24]</a></sup> the FCC issued a final Report and Order on August 20, 2008, requiring 
				Comcast to discontinue network blocking and to provide further details about its past and future network policies.<sup id="a-25"><a href="<?php echo site_url($base,"#fn-25"); ?>">[25]</a></sup> 
				Though the issue of the FCC's jurisdiction in regulating Comcast's broadband Internet policies was thoroughly briefed and outlined in the Report, Comcast 
				brought a federal action against the FCC in September 2008, questioning the extent of the FCC's authority and the evidentiary and legal support used to 
				prohibit the type of protocol-specific network throttling that Comcast employed.<sup id="a-26"><a href="<?php echo site_url($base,"#fn-26"); ?>">[26]</a></sup>
			</p>
			<h2 id="#III">III. The FCC Has Title I Jurisdiction over Broadband Internet</h2>
			<h3 id="#III-A">A. <i>Broadband Internet Must Find Regulatory Authority Under Title I</i></h3>
			<p>
				In general, the FCC's authority to regulate various forms of communications is derived from the Communications Act of 1934,<sup id="a-27"><a href="<?php echo site_url($base,"#fn-27"); ?>">[27]</a></sup> 
				as amended principally by the Telecommunications Act of 1996 (together, the "Act", or "Telecommunications Act").<sup id="a-28"><a href="<?php echo site_url($base,"#fn-28"); ?>">[28]</a></sup> 
				The Act is explicitly applicable to "all interstate and foreign communication by wire or radio,"<sup id="a-29"><a href="<?php echo site_url($base,"#fn-29"); ?>">[29]</a></sup> and it requires 
				the FCC to endeavor to "make available . . . to all the people of the United States . . . a rapid, efficient, Nation-wide, and world-wide wire and radio 
				communication service."<sup id="a-30"><a href="<?php echo site_url($base,"#fn-30"); ?>">[30]</a></sup> Ultimately, the Act is intended to grant the FCC "regulatory power over all forms of 
				electrical communication, whether by telephone, telegraph, cable, or radio,"<sup id="a-31"><a href="<?php echo site_url($base,"#fn-31"); ?>">[31]</a></sup> and which is, for this purpose, 
				given sufficiently "broad authority."<sup id="a-32"><a href="<?php echo site_url($base,"#fn-32"); ?>">[32]</a></sup>
			</p>
			<p>
				Amidst this expansive regulatory context, however, the Act grants authority to the FCC over only three <em>specific</em> modes of communication services: 
				interstate common carriers under Title II, spectrum licensees under Title III, and cable operators under Title VI.<sup id="a-33"><a href="<?php echo site_url($base,"#fn-33"); ?>">[33]</a></sup> 
				In defining the types of regulation Title II authorizes, the Supreme Court further divided entities that may be potentially regulated under Title II into two 
				categories, each carrying different levels of FCC regulation: telecommunications carriers and information-service providers.<sup id="a-34"><a href="<?php echo site_url($base,"#fn-34"); ?>">[34]</a></sup>
			</p>
			<p>
				In essence, "the Act regulates telecommunications carriers, but not information-service providers, as common carriers,"<sup id="a-35"><a href="<?php echo site_url($base,"#fn-35"); ?>">[35]</a></sup> 
				holding them to mandatory statutory requirements and granting the FCC more pervasive regulatory authority over them under Title II of the Act. "Information-service 
				providers, by contrast, are not subject to mandatory common-carrier regulation under Title II,"<sup id="a-36"><a href="<?php echo site_url($base,"#fn-36"); ?>">[36]</a></sup> and, as the FCC 
				concluded and the Supreme Court affirmed, the "integrated nature of Internet access and the high-speed wire used to provide Internet access [confirms] that 
				cable companies providing Internet access are not telecommunications providers," but rather information-service providers over which the FCC must find some 
				other form of jurisdiction, if at all.<sup id="a-37"><a href="<?php echo site_url($base,"#fn-37"); ?>">[37]</a></sup> This two-tiered classification creates the principal difficulty for the 
				FCC in justifying the exercise of its jurisdiction over the Internet and ultimately prompts the FCC to look to Title I for its jurisdictional basis: "[i]f 
				the Internet is not a telecommunications service, i.e., not a common carrier service, then the FCC cannot rely on its Title II powers to make legislative rules 
				or to adjudicate disputes."<sup id="a-38"><a href="<?php echo site_url($base,"#fn-38"); ?>">[38]</a></sup>
			</p>
			<p>
				Accordingly, the FCC often looks back to Title I and its expansive, general provisions in solving this problem. In elaborating on the extent of Title I 
				jurisdiction, for instance, the Supreme Court first held that Title I consists of a jurisdictional grant squarely in itself; that is, instead of requiring the 
				FCC to find substantive jurisdiction in other areas of the Act, the Court specifically stated that "[n]othing in the language of Sec- tion 152(a), in the 
				surrounding language, or in the Act's history or purposes limits the Commission's authority to those activities and forms of communication that are specifically 
				described by the Act's other provisions."<sup id="a-39"><a href="<?php echo site_url($base,"#fn-39"); ?>">[39]</a></sup>
			</p>
			<p>
				Many of the "necessary and proper clauses" of Titles I and II likewise confirm this understanding: Section 154(i) states that the FCC "may perform <em>any and 
				all acts</em>, make such rules and regulations, and issue such orders . . . <em>as may be necessary</em> in the execution of its functions;"<sup id="a-40"><a href="<?php echo site_url($base,"#fn-40"); ?>">[40]</a></sup> 
				Section 201 specifies that "[t]he Commission may prescribe <em>such rules and regulations as may be necessary</em> in the public interest to carry out the provisions 
				of this [Act];"<sup id="a-41"><a href="<?php echo site_url($base,"#fn-41"); ?>">[41]</a></sup> and Section 303(r) again authorizes the FCC to "[m]ake such rules and regulations and prescribe 
				such restrictions and conditions, not inconsistent with the law, as may be necessary to carry out the provisions of this [Act]."<sup id="a-42"><a href="<?php echo site_url($base,"#fn-42"); ?>">[42]</a></sup>
			</p>
			<p>
				Although the FCC uses Section 154(i)'s "necessary and proper" provision and Title I generally for authority not specifically granted in other titles, some argue 
				that Section 154(i) "is not a grant of legislative authority to the FCC, but rather a grant of housekeeping authority empowering the agency only to set rules 
				of internal procedure."<sup id="a-43"><a href="<?php echo site_url($base,"#fn-43"); ?>">[43]</a></sup> Indeed, on the surface, the section is included in the Act's administrative provisions 
				and those related to the internal workings of the Commission,<sup id="a-44"><a href="<?php echo site_url($base,"#fn-44"); ?>">[44]</a></sup> and, if interpreted to include a general, 
				unrestricted grant of legislative rulemaking authority over all things "communication," Section 154(i) would theoretically render the three aforementioned 
				substantive grants of authority redundant.<sup id="a-45"><a href="<?php echo site_url($base,"#fn-45"); ?>">[45]</a></sup> Yet the Supreme Court has, on multiple occasions, expressly authorized 
				broad Title I ancillary jurisdiction over new forms of communication and the FCC may apply this analysis to broadband Internet as well.
			</p>
			<p>
				For instance, when dealing with the advent of new, pervasive technologies like cable television in the 1960s, the Supreme Court flatly rejected the argument 
				that Section 154(i) "does not independently confer regulatory authority upon the Commission, but instead merely prescribes the forms of communication to which 
				the Act's other provisions may separately be made applicable."<sup id="a-46"><a href="<?php echo site_url($base,"#fn-46"); ?>">[46]</a></sup> Rather, the Court routinely defers to the FCC to 
				extend its jurisdiction over major forms of communication not contemplated by Congress in 1934, regulating communications not specifically described by the 
				Act's other provisions under this <em>direct</em> grant of "ancillary jurisdiction" under Title I.<sup id="a-47"><a href="<?php echo site_url($base,"#fn-47"); ?>">[47]</a></sup> In other words, as 
				will be discussed <i>infra</i>, with regard to emerging information-services like broadband Internet that require Title I jurisdiction, the FCC need only rely on 
				provisions outside of the Title I grant of authority "for the <em>policies</em> they state and not for any regulatory power they might confer," because the 
				provisions of Title I themselves provide that regulatory authority.<sup id="a-48"><a href="<?php echo site_url($base,"#fn-48"); ?>">[48]</a></sup>
			</p>
			<p>
				Ultimately, it is this understanding of the "ancillary to" language, as originally interpreted from Section 152(a) by the Supreme Court, that has consistently 
				grounded its prior grants and restrictions on ancillary jurisdiction.<sup id="a-49"><a href="<?php echo site_url($base,"#fn-49"); ?>">[49]</a></sup> For instance, "ancillary to" was not held 
				by the Supreme Court to simply mean "'necessary to' the furtherance of [the FCC's] other regulatory authority . . . in common carrier, broadcast, or cable 
				regulation" alone.<sup id="a-50"><a href="<?php echo site_url($base,"#fn-50"); ?>">[50]</a></sup> Rather, Title I directly accords the FCC authority over "communications by wire and 
				radio,"<sup id="a-51"><a href="<?php echo site_url($base,"#fn-51"); ?>">[51]</a></sup> with the express conditions that such authority remains both ancillary to, and constrained by, explicit, 
				substantive congressional grants or intentions.<sup id="a-52"><a href="<?php echo site_url($base,"#fn-52"); ?>">[52]</a></sup> Even in <i>Midwest II</i>, where the Supreme Court found the FCC's 
				regulations to exceed the bounds of any such congressional intent, the Court fully reaffirmed that the "various responsibilities" upon which the FCC must base 
				its Title I jurisdiction must be derived from and delimited by "congressional guidance."<sup id="a-53"><a href="<?php echo site_url($base,"#fn-53"); ?>">[53]</a></sup>
			</p>
			<p>
				Ultimately, with regard to broadband Internet&mdash;as will be discussed more fully in <a href="<?php echo site_url($base,"#III-C"); ?>">Part III.C</a>, <i>infra</i>&mdash;the FCC and the 
				Court may find explicit congressional intent to regulate Internet service providers like Comcast and their protocol-specific throttling, thereby ensuring an 
				open and competitive market over broadband Internet, within Section 230 of the Telecommunications Act. The following section outlines the history and 
				reasoning behind the Supreme Court's recognition and application of Title I jurisdiction and the development of this general ancillary-to-congressional-intent 
				interpretation.
			</p>
			<h3 id="#III-B">B. <i>Courts Have Maintained the FCC’s Use of Title I Ancillary Jurisdiction</i></h3>
			<h4 id="#III-B-1">1. 1970s&mdash;<i>Southwestern Cable</i>, <i>Midwest I</i>, and <i>Midwest II</i></h4>
			<p>
				In a line of cases dealing with the burgeoning cable television technologies in the late 1960s and early 1970s, the Supreme Court resoundingly interpreted 
				the Telecommunications Act to grant the FCC the authority to regulate cable based on the idea that such regulation was "reasonably ancillary" to the 
				Commission's statutory authority over broadcast television.<sup id="a-54"><a href="<?php echo site_url($base,"#fn-54"); ?>">[54]</a></sup> The first such decision was <i>United States v. 
				Southwestern Cable Co.</i>, a 1968 case that addressed the issue of whether the FCC could create and enforce rules prohibiting a cable company from importing 
				the "distant signals" of a broadcast company and re-transmitting them through its cable system.<sup id="a-55"><a href="<?php echo site_url($base,"#fn-55"); ?>">[55]</a></sup> Midwest 
				Television, the licensee of a broadcasting station in San Diego, complained that Southwestern's cable systems "transmitted the signals of Los Angeles 
				broadcasting stations into the San Diego area, and thereby had . . . adversely affected Midwest's San Diego station."<sup id="a-56"><a href="<?php echo site_url($base,"#fn-56"); ?>">[56]</a></sup> 
				After the FCC found that "cable systems were neither common carriers nor broadcasters, and [therefore] had no primary jurisdiction over 
				them"<sup id="a-57"><a href="<?php echo site_url($base,"#fn-57"); ?>">[57]</a></sup>&mdash;and after Congress offered no assistance or approval<sup id="a-58"><a href="<?php echo site_url($base,"#fn-58"); ?>">[58]</a></sup>&mdash;the 
				FCC "went ahead with making rules for the cable industry and ordered Southwestern not to expand into areas where it had not been cable casting 
				before."<sup id="a-59"><a href="<?php echo site_url($base,"#fn-59"); ?>">[59]</a></sup>
			</p>
			<p>
				In finding the Commission's assertion of jurisdiction appropriate, the Court both held that cable television was within Section 152(a)'s broad application 
				to "all interstate and foreign communication by wire or radio"<sup id="a-60"><a href="<?php echo site_url($base,"#fn-60"); ?>">[60]</a></sup> and that the "legislative history indicates that 
				the Commission was given 'regulatory power over all forms of electrical communication . . .'"<sup id="a-61"><a href="<?php echo site_url($base,"#fn-61"); ?>">[61]</a></sup>	Perhaps most 
				importantly, the Court stressed that Congress specifically granted this broad authority to the FCC so that it could appropriately handle new technologies as 
				they are developed and accepted:
			</p>
			<blockquote>
				Certainly Congress could not in 1934 have foreseen the development of community antenna television systems, but it seems to us that it was precisely because 
				Congress wished to maintain, through appropriate administrative control, a grip on the dynamic aspects of radio transmission . . . that it conferred upon the 
				Commission a "unified jurisdiction" and "broad authority." Thus, "underlying the whole Communications Act is recognition of the rapidly fluctuating factors 
				characteristic of the evolution of broadcasting and of the corresponding requirement that the administrative process possess sufficient flexibility to adjust 
				itself to these factors."<sup id="a-62"><a href="<?php echo site_url($base,"#fn-62"); ?>">[62]</a></sup>
			</blockquote>
			<p>
				Recognizing that Congress, in 1934, acted in a field that was demonstrably "both new and dynamic," and that Congress therefore gave the Commission "a 
				comprehensive mandate" with "expansive powers,"<sup id="a-63"><a href="<?php echo site_url($base,"#fn-63"); ?>">[63]</a></sup> the Court acknowledged that it is the FCC's role to administer 
				wire and radio communications as they develop; otherwise, absent congressional intent to the contrary, it would be prohibiting "administrative action imperative 
				for the achievement of [the] agency's ultimate purposes."<sup id="a-64"><a href="<?php echo site_url($base,"#fn-64"); ?>">[64]</a></sup> Ultimately, instead of listing&mdash;or attempting to 
				predict&mdash;every form of communication the FCC would be authorized to regulate, Congress realized that the FCC would be in a better position to understand 
				new technologies and respond accordingly, and so it appropriately gave the FCC the statutory leeway and deference to do so.<sup id="a-65"><a href="<?php echo site_url($base,"#fn-65"); ?>">[65]</a></sup>
			</p>
			<p>
				Title I ancillary jurisdiction was further defined and expanded four years later in <i>United States v. Midwest Video Corp.</i> 
				(“Midwest I”),<sup id="a-66"><a href="<?php echo site_url($base,"#fn-66"); ?>">[66]</a></sup> where the Supreme Court affirmed both the FCC's jurisdiction over ca- ble television and its 
				order that certain cable systems had to originate some of their own programming.<sup id="a-67"><a href="<?php echo site_url($base,"#fn-67"); ?>">[67]</a></sup> After basing its conclusions 
				again on Section 152(a)'s direct grant of jurisdiction, the Court went on to fill in the holes in its jurisprudence, stating that because "[152(a)] does not 
				in and of itself prescribe any objectives for which the Commission's regulatory power over [cable] might properly be exercised," the use of jurisdiction 
				under Title I is only appropriate when "the Commission has reasonably concluded that regulatory authority . . . is imperative if it is to perform with 
				appropriate effectiveness certain of its other responsibilities."<sup id="a-68"><a href="<?php echo site_url($base,"#fn-68"); ?>">[68]</a></sup> In applying this"regulatory goals" test to 
				the FCC's regulation, the Court found a sufficient goal upon which to base ancillary jurisdiction, as its application to cable systems would "further the 
				achievement of long-established regulatory goals in the field of television broadcasting by increasing the number of outlets for community self-expression 
				and augmenting the public's choice of programs and types of services."<sup id="a-69"><a href="<?php echo site_url($base,"#fn-69"); ?>">[69]</a></sup>
			</p>
			<p>
				Effectively, "<i>Midwest Video I</i> thus took a giant step beyond <i>Southwestern</i> . . . in relaxing the nature of the 'ancillariness' necessary to 
				support an assertion of Commission power."<sup id="a-70"><a href="<?php echo site_url($base,"#fn-70"); ?>">[70]</a></sup> In other words, the FCC can regulate wire or radio communications as 
				long as that authority is ancillary to either continuing the effective regulation of existing responsibilities (such as broadcast regulation) or, more broadly, 
				to one of Congress' explicit policies or to the purposes or goals of those existing responsibilities in the Telecommunications Act (like the enhancement and 
				diversification of local service that the Court in <i>Midwest I found</i><sup id="a-71"><a href="<?php echo site_url($base,"#fn-71"); ?>">[71]</a></sup>).
			</p>
			<p>
				Though the next case dealing with the issue of ancillary jurisdiction, <i>FCC v. Midwest Video Corp.</i> ("<i>Midwest II</i>"), rightfully identified some limits 
				on the bases for FCC ancillary authority, it did not question the jurisdiction granted by Title I, the "regulatory goals" test articulated in <i>Southwestern</i> and 
				<i>Midwest I</i>, or the general deference given to the FCC in the absence of congressional intent.<sup id="a-72"><a href="<?php echo site_url($base,"#fn-72"); ?>">[72]</a></sup> <i>Midwest II</i> 
				merely applied the same test articulated in <i>Southwestern</i> and <i>Midwest I</i>, finding instead that Congress intended the FCC not to treat cable systems 
				as common carriers and, in that particular case, that Congress had specifically "restricted the Commission's ability to advance objectives associated with 
				public access at the expense of the journalistic freedom of persons engaged in broadcasting."<sup id="a-73"><a href="<?php echo site_url($base,"#fn-73"); ?>">[73]</a></sup> While appropriately 
				recognizing that the "Commission was not delegated unrestrained authority,"<sup id="a-74"><a href="<?php echo site_url($base,"#fn-74"); ?>">[74]</a></sup> the Court did, however, affirm the 
				reasoning and holdings in both <i>Southwestern</i> and <i>Midwest I</i>,<sup id="a-75"><a href="<?php echo site_url($base,"#fn-75"); ?>">[75]</a></sup> as well as the role that Congressional 
				intent plays in deferring to, supporting, or opposing the FCC in its rules grounded in ancillary jurisdiction.
			</p>
			<p>
				As stated above, the Court's reasoning in developing and applying the "regulatory goals" test of ancillary jurisdiction was not limited to those relating to 
				the explicit substantive grants in Titles II, III, and VI. While it is true that <i>Southwestern</i>, <i>Midwest I</i>, and <i>Midwest II</i> each dealt with 
				policies related to broadcast television or the encroachment upon the FCC's long-established priority of promoting 
				broadcast,<sup id="a-76"><a href="<?php echo site_url($base,"#fn-76"); ?>">[76]</a></sup> the Court never acknowledged such a subject matter limitation on ancillariness and never stated that 
				it was required to find some policy that was also related to the three specific grants of authority in the Act. Instead, the Court grounded its holdings on 
				congressional intent in general, broadly holding in <i>Southwestern</i> that it "may not, 'in the absence of compelling evidence that such was Congress' 
				intention . . . prohibit administrative action imperative for the achievement of an agency's ultimate purposes.'"<sup id="a-77"><a href="<?php echo site_url($base,"#fn-77"); ?>">[77]</a></sup> 
				The Court looked to congressional intent, not specifically congressional intent vis-à-vis Title II, III, or VI subject matter, and because there was no evidence 
				of such congressional intent, the "Commission's authority over 'all interstate . . . communication by wire or radio' permit[ted] the regulation of [cable] 
				systems."<sup id="a-78"><a href="<?php echo site_url($base,"#fn-78"); ?>">[78]</a></sup> Likewise, in <i>Midwest I</i>, the Court broadly concluded that its "duty is at an end when [it] 
				find[s] that the action of the Commission was based upon findings supported by evidence, and was made pursuant to authority granted by 
				Congress,"<sup id="a-79"><a href="<?php echo site_url($base,"#fn-79"); ?>">[79]</a></sup> and in <i>Midwest II</i>, it struck down a Commission regulation after it found a conflicting, 
				codified congressional intention without any indication that that intention was required to be based in the Act's explicit subject matter 
				grants.<sup id="a-80"><a href="<?php echo site_url($base,"#fn-80"); ?>">[80]</a></sup> Overall, the fact that cable was so closely related to broadcast was irrelevant in the Court's creation 
				of its "regulatory goals" test, and each of these cases only went so far as to require some policy on which to base ancillary jurisdiction, not a policy related 
				to the other three titles.
			</p>
			<h4 id="#III-B-2">2. 1980s&mdash;The Computer Inquiries</h4>
			<p>
				While the Supreme Court was adjudicating these cable cases, the Federal Circuit was considering the extent of FCC jurisdiction over the computer industry. 
				In a series of FCC inquiries and subsequent court proceedings referred to as <i>Computer I</i>,<sup id="a-81"><a href="<?php echo site_url($base,"#fn-81"); ?>">[81]</a></sup> 
				<i>Computer II</i>,<sup id="a-82"><a href="<?php echo site_url($base,"#fn-82"); ?>">[82]</a></sup> and <i>Computer III</i>,<sup id="a-83"><a href="<?php echo site_url($base,"#fn-83"); ?>">[83]</a></sup> the FCC and the courts 
				drew a line "between computer data processing (computers used to direct network operations) and telecommunications (end users using computers to communicate)," 
				creating today's regulatory dichotomy of “"enhanced" and "basic" services, or "information" and "telecommunications" services.<sup id="a-84"><a href="<?php echo site_url($base,"#fn-84"); ?>">[84]</a></sup> 
				Because of the substantial data processing component of the former, and the Commission's desire to promote enhanced services by generally discouraging rules 
				and procedures from being "interjected between technology and its marketplace applications," the FCC concluded that enhanced services would not be regulated 
				under Title II,<sup id="a-85"><a href="<?php echo site_url($base,"#fn-85"); ?>">[85]</a></sup> instead opting, again, for Title I ancillary jurisdiction.<sup id="a-86"><a href="<?php echo site_url($base,"#fn-86"); ?>">[86]</a></sup>
			</p>
			<p>
				Such a conclusion is consistent with the position that the FCC and the courts have taken on innovative communications services since <i>Southwestern</i>. In 
				general, the FCC should be given significant leeway in adapting to and regulating emerging telecommunications technologies, and, in contrast to the rigid 
				formalities of Title II common carrier jurisdiction, Title I ancillary jurisdiction is the most effective means of both encouraging that leeway and allowing 
				the FCC to respond to and promote the important market forces central to those technologies. For instance, as the <i>Computer</i> inquiries concluded, the "goals 
				under Section [151] [of the Telecommunications Act] of assuring a '[n]ationwide . . . wire and radio communications service with adequate facilities at 
				reasonable charges . . .' will be more effectively promoted by relying upon our ancillary regulatory powers with respect to these emerging 
				services."<sup id="a-87"><a href="<?php echo site_url($base,"#fn-87"); ?>">[87]</a></sup>
			</p>
			<p>
				Even more pertinent in the justification of Title I jurisdiction, however, is the <i>Computer II</i> court's rationale for allowing the FCC to regulate the 
				information-services sector of AT&T, effectively holding that the Commission can regulate those services if it determines that the market is either "not 
				sufficiently competitive," or that there are no "other adequate consumer safeguards, to ensure that consumers receive reasonably nondiscriminatory access 
				to the Internet."<sup id="a-88"><a href="<?php echo site_url($base,"#fn-88"); ?>">[88]</a></sup> The court concluded:
			</p>
			<blockquote>
				Instead of regulating enhanced services under Title II, the Commission used its ancillary jurisdiction to impose upon AT&T a structural regulation scheme 
				that requires AT&T to offer enhanced services only through a separate subsidiary. The Commission found that this separation requirement will effectively 
				protect the public interest by limiting the power of AT&T to gain an unfair advantage in the marketplace by cross-subsidizing its competitive services by 
				its monopoly ones. We believe this to be a sufficient basis to support the Commission's decision not to regulate enhanced services under 
				Title II.<sup id="a-89"><a href="<?php echo site_url($base,"#fn-89"); ?>">[89]</a></sup>
			</blockquote>
			<p>
				Following this rationale, the court then affirmed the efficiency and responsiveness of the FCC in using its Title I authority over new forms of communications, 
				stating succinctly that "[o]nce the difficulty of isolating activities subject to Title II regulation outweighs the benefits to be gained by that regulation, 
				then the Commission is justified in conserving its energies for more efficacious undertakings, at least when it establishes an alternative regulatory scheme 
				under its ancillary jurisdiction."<sup id="a-90"><a href="<?php echo site_url($base,"#fn-90"); ?>">[90]</a></sup> Emerging communications technologies, like broadband Internet, are prime 
				examples of activities the FCC can regulate far more effectively under Title I.<sup id="a-91"><a href="<?php echo site_url($base,"#fn-91"); ?>">[91]</a></sup>
			</p>
			<h4 id="#III-B-3">3. 2000s&mdash;<i>Brand X</i> and the Broadcast Flag</h4>
			<p>
				Finally, and most recently, the Supreme Court and the D.C. Circuit have further defined the extent of ancillary jurisdiction in two other contexts. In 
				<i>National Cable & Telecommunications Ass'n v. Brand X</i>, the Supreme Court both reaffirmed the distinction between telecommunications and 
				information-services in the Internet context and granted the FCC the authorization to reasonably determine whether a new communication technology falls 
				under either category.<sup id="a-92"><a href="<?php echo site_url($base,"#fn-92"); ?>">[92]</a></sup> In dealing with broadband Internet services provided by cable companies, the FCC 
				concluded that this service was most akin to information-services, and again the Court deferred to that determination.<sup id="a-93"><a href="<?php echo site_url($base,"#fn-93"); ?>">[93]</a></sup> 
				More importantly, though, "[t]he Court said in dicta that, although 'information-service providers . . . are not subject to mandatory common-carrier 
				regulation under Title II . . . the Commission has jurisdiction to impose additional regulatory obligations under its Title I ancillary jurisdiction,' 
				and indicated that policies in this 'technical and complex' area should be set by the Commission . . . ."<sup id="a-94"><a href="<?php echo site_url($base,"#fn-94"); ?>">[94]</a></sup>	
				In expanding the authority of the FCC, the Court effectively gave "the Commission complete discretion over what rules should be mandated with respect 
				to 'information-services' (including the Internet), even if those rules are the same as rules applied to common carriers."<sup id="a-95"><a href="<?php echo site_url($base,"#fn-95"); ?>">[95]</a></sup>
			</p>
			<p>
				That same year, in <i>American Library Ass'n v. FCC</i>, the D.C. Circuit also considered Title I jurisdiction in cable television's "broadcast flag" 
				context.<sup id="a-96"><a href="<?php echo site_url($base,"#fn-96"); ?>">[96]</a></sup> Broadcast flags are "digital code[s] embedded in a [digital television] broadcasting stream, which 
				prevents digital television reception equipment from redistributing broadcast content" and, most importantly, they "affect[] receiver devices only <em>after</em> 
				a broadcast transmission is complete."<sup id="a-97"><a href="<?php echo site_url($base,"#fn-97"); ?>">[97]</a></sup> In addressing whether the FCC had the authority to require digital 
				equipment manufacturers to embed technology capable of receiving these signals, the court plainly held that because such equipment operates after the 
				communicative transmissions&mdash;i.e., the digital television broadcast&mdash;are sent and complete, the regulation does not regulate the actual transmission 
				of the broadcast and therefore does not involve "communication by wire or radio."<sup id="a-98"><a href="<?php echo site_url($base,"#fn-98"); ?>">[98]</a></sup> After reaffirming the analysis 
				from the cable cases and their two requirements for ancillary jurisdiction&mdash;namely, the broad condition that the regulation cover communication by wire 
				or radio and that that regulation remains reasonably ancillary to some congressional goal or statutory 
				responsibility<sup id="a-99"><a href="<?php echo site_url($base,"#fn-99"); ?>">[99]</a></sup>&mdash;the court invalidated the FCC's regulation on the first prong. The court correctly held 
				that "these [cable] cases leave no doubt that the Commission may not invoke its ancillary jurisdiction under Title I to regulate matters outside of the 
				compass of communications by wire or radio"<sup id="a-100"><a href="<?php echo site_url($base,"#fn-100"); ?>">[100]</a></sup> and the broadcast flags at issue simply did not affect 
				communication at that stage. Therefore, the second "ancillary-to-something" prong was not necessary to address in this case, and, arguably, any analysis 
				of that requirement is dicta.
			</p>
			<p>
				In contrast, Comcast's protocol discrimination clearly involves "communication by wire or radio"<sup id="a-101"><a href="<?php echo site_url($base,"#fn-101"); ?>">[101]</a></sup> by 
				directly terminating connections over those wires. The sole issue here is whether the FCC can regulate that communication by finding some regulatory goal, 
				congressional policy, or statutory responsibility upon which to base its Title I authority. Because, under these facts, Section 230 of the Telecommunications 
				Act provides the Commission with a reasonable basis to exercise its ancillary authority, the second prong&mdash;the only prong at issue here, unlike in 
				<i>American Library Association</i>&mdash;is satisfied.
			</p>
			<h3 id="#III-C">C. <i>Section 230's Internet Policy Advances Goals Sufficient to Satisfy Ancillary Jurisdiction</i></h3>
			<p>
				As outlined above, while possessing jurisdiction directly under the provisions of Title I, the FCC can assert that authority merely by acting in a manner 
				"reasonably ancillary to the effective performance of the Commission's various responsibilities . . . ."<sup id="a-102"><a href="<?php echo site_url($base,"#fn-102"); ?>">[102]</a></sup> In 
				the past, these responsibilities have included "further[ing] the achievement of long-established regulatory goals"<sup id="a-103"><a href="<?php echo site_url($base,"#fn-103"); ?>">[103]</a></sup> 
				in a specific field, serving the public interest,<sup id="a-104"><a href="<?php echo site_url($base,"#fn-104"); ?>">[104]</a></sup> promoting general congressional 
				policies,<sup id="a-105"><a href="<?php echo site_url($base,"#fn-105"); ?>">[105]</a></sup> and enforcing the mandates of Sections 151 and 152 of the Act 
				itself.<sup id="a-106"><a href="<?php echo site_url($base,"#fn-106"); ?>">[106]</a></sup> For instance, peer-to-peer communications, like those created by the BitTorrent protocol over 
				broadband Internet, are undoubtedly a form of "communication by wire"&mdash;and an emerging technology requiring a subjective, efficient regulatory 
				response&mdash;over which the FCC has clear jurisdiction created in Title I itself. Moreover, if such a conclusion is deemed "reasonable," and absent 
				congressional intent saying otherwise, the Supreme Court will even defer to the FCC in that determination.<sup id="a-107"><a href="<?php echo site_url($base,"#fn-107"); ?>">[107]</a></sup>
			</p>
			<p>
				Ultimately, as the FCC explained, the "exercise of authority must be 'reasonably ancillary to the effective performance' of the Commission's responsibility 
				for 'something.'"<sup id="a-108"><a href="<?php echo site_url($base,"#fn-108"); ?>">[108]</a></sup> Though that "something" can be found throughout the Act or in other congressional mandates, 
				perhaps the most significant is the national Internet Policy enshrined in Section 230(b),<sup id="a-109"><a href="<?php echo site_url($base,"#fn-109"); ?>">[109]</a></sup> which has been 
				continuously reaffirmed by the Commission since its passage. Although there are numerous other provisions providing adequate goals upon which ancillary 
				jurisdiction can be based,<sup id="a-110"><a href="<?php echo site_url($base,"#fn-110"); ?>">[110]</a></sup> none are more relevant than Congress' own "policies [inscribed] into . . . the 
				Communications Act&mdash;the very same Act that established the Commission as the federal agency entrusted with regulating interstate and foreign commerce 
				in communication by wire."<sup id="a-111"><a href="<?php echo site_url($base,"#fn-111"); ?>">[111]</a></sup>
			</p>
			<h4 id="#III-C-1">1. Section 230 and the FCC's Internet Policy Statement</h4>
			<p>
				The Policy Statement enacted as Section 230 of the Telecommunications Act (and as part of the Communications Decency Act) lays out congressional findings and 
				policies regarding the Internet.<sup id="a-112"><a href="<?php echo site_url($base,"#fn-112"); ?>">[112]</a></sup> After subsection(a) outlines the benefits, history, goals, and technicalities 
				of the Internet, the policies found in subsection (b) include, in pertinent part:
			</p>
			<ol>
				<li>to promote the continued development of the Internet and other interactive computer services and other interactive media;</li>
				<li>to <em>preserve the vibrant and competitive free market</em> that presently exists for the Internet and other interactive computer services, unfettered by 
				Federal or State regulation;</li>
				<li>to encourage the development of technologies which <em>maximize user control over what information is received</em> by individuals, families, and schools 
				who use the Internet and other interactive computer services . . . .<sup id="a-113"><a href="<?php echo site_url($base,"#fn-113"); ?>">[113]</a></sup></li>
			</ol>
			<p>
				These national policies and the FCC's responsibility in overseeing and enforcing them were further recognized in the Commission's Internet Policy 
				Statement,<sup id="a-114"><a href="<?php echo site_url($base,"#fn-114"); ?>">[114]</a></sup> which reaffirmed Section 230(b) and clarified the contours of its policies. For instance, 
				the FCC "instructed providers of broadband Internet access services that 'consumers are entitled to run applications and use services of their choice' and 
				'to access the lawful Internet content of their choice,' subject to reasonable network management practices."<sup id="a-115"><a href="<?php echo site_url($base,"#fn-115"); ?>">[115]</a></sup> 
				It also restated its commitment to the "duty to preserve and promote the vibrant and open character of the Internet as the telecommunications marketplace 
				enters the broadband age."<sup id="a-116"><a href="<?php echo site_url($base,"#fn-116"); ?>">[116]</a></sup> Thus, Section 230(b) provides three different regulatory goals upon which 
				the Commission can base Title I ancillary jurisdiction in preventing protocol discrimination over broadband Internet. Further, the FCC's Internet Policy 
				Statement recognizes and supports those congressional goals and their adequacy in providing Title I jurisdiction, as discussed <i>infra</i>.
			</p>
			<h4 id="#III-C-2">2. Section 230(b)(2) Provides a Basis for Ancillary Jurisdiction to Ensure Vibrant Online Competitive Markets</h4>
			<p>
				Section 230(b)(2) instructs the Commission to ensure that competition in Internet services, content, and applications exists. At the time the Act was passed 
				in 1996, "the competitive free market that 'presently' existed for the Internet . . . consisted of consumers' unfettered access to all online 
				services . . . ."<sup id="a-117"><a href="<?php echo site_url($base,"#fn-117"); ?>">[117]</a></sup> As the opponents to Comcast noted in their petition, peer-to-peer services like those 
				taking advantage of the BitTorrent protocol are the future of online high-definition television; by offering that service alongside broadband Internet 
				access, Comcast has an inherent anticompetitive motive to stifle such content and undermine competition.<sup id="a-118"><a href="<?php echo site_url($base,"#fn-118"); ?>">[118]</a></sup> To 
				ensure true competition in video-on-demand over broadband Internet, the FCC must regulate and prevent companies like Comcast from unfairly exploiting their 
				monopolistic advantage.<sup id="a-119"><a href="<?php echo site_url($base,"#fn-119"); ?>">[119]</a></sup>
			</p>
			<p>
				Though the provision includes the phrase "unfettered by Federal or State regulation," an interpretation that would remove all FCC jurisdiction would entirely 
				contradict the initial goal of "preserv[ing] the vibrant and competitive free market."<sup id="a-120"><a href="<?php echo site_url($base,"#fn-120"); ?>">[120]</a></sup> When companies like 
				Comcast seek to destroy that competitive market, the only way the Act can provide a remedy is through regulation; and, as the Supreme Court and Federal 
				Circuit have held, the actor best suited for this type of regulation is the FCC. Additionally, Section 230(b)(2) must be read in the context of Section 
				230(a)'s other findings, noting that the Internet has flourished for the "benefit of all Americans, with a minimum of government 
				regulation."<sup id="a-121"><a href="<?php echo site_url($base,"#fn-121"); ?>">[121]</a></sup> Nowhere does Congress "refer to the 'benefit of broadband access providers' or to 
				'no regulation';"<sup id="a-122"><a href="<?php echo site_url($base,"#fn-122"); ?>">[122]</a></sup> instead, a minimum level of government regulation is necessary and expected to benefit the 
				entire Nation, particularly with regard to the free, open marketplace that Section230(b)(2) promotes. At the very least, the Commission can regulate as far 
				as the spirit of this provision allows.<sup id="a-123"><a href="<?php echo site_url($base,"#fn-123"); ?>">[123]</a></sup>
			</p>
			<h4 id="#III-C-3">3. Section 230(b)(1) Requires the FCC to Use Title I Jurisdiction in Promoting the Continued Development of the Internet</h4>
			<p>
				Section 230(b)(1) seeks to "promote the continued development of the Internet and other interactive computer services and other interactive 
				media,"<sup id="a-124"><a href="<?php echo site_url($base,"#fn-124"); ?>">[124]</a></sup> and likewise must be read in the context of Section 230's congressional findings and goals. For 
				instance, Congress has sought to continue the competitive marketplace of and within broadband Internet;<sup id="a-125"><a href="<?php echo site_url($base,"#fn-125"); ?>">[125]</a></sup> it 
				has determined that the Internet offers "a forum for a true diversity of political discourse, unique opportunities for cultural development, and myriad 
				avenues for intellectual activity."<sup id="a-126"><a href="<?php echo site_url($base,"#fn-126"); ?>">[126]</a></sup> Further, Congress has increasingly found that "Americans are relying on 
				interactive media for a variety of political, educational, cultural, and entertainment services."<sup id="a-127"><a href="<?php echo site_url($base,"#fn-127"); ?>">[127]</a></sup> In this 
				context, the failure to exercise ancillary jurisdiction would fully prevent the continued enjoyment and development of interactive media in providing various 
				services as well as the types of forums the Internet offers. Such diversity has long been a goal of Congress and the FCC,<sup id="a-128"><a href="<?php echo site_url($base,"#fn-128"); ?>">[128]</a></sup> 
				and without this basis, "Comcast would be able to block consumers' access to the diversity of political discourse available on [Internet-based content 
				providers], such as Democracy Now!, PBS, ABC, and other political and religious outlets who rely on the inexpensive distribution methods" like 
				BitTorrent.<sup id="a-129"><a href="<?php echo site_url($base,"#fn-129"); ?>">[129]</a></sup>
			</p>
			<h4 id="#III-C-4">4. Section 230(b)(3) Requires the FCC to Maximize Internet Users' Ability to Control the Information They Receive</h4>
			<p>
				Congress announced a federal policy in Section 230(b)(3) to encourage the development of Internet-based technologies that maximize users' control over what 
				information they receive. Again, this policy is quite relevant in Comcast's BitTorrent throttling, which seeks the exact opposite: to remove its users' input, 
				preferences, and control over the types of video content and other media they seek. Ancillary jurisdiction under Title I is necessary to prevent Comcast and 
				other broadband Internet providers from blocking or degrading particular applications used to provide particular content-policies which do not maximize user 
				control.<sup id="a-130"><a href="<?php echo site_url($base,"#fn-130"); ?>">[130]</a></sup>
			</p>
			<p>
				Overall, the Internet policies enacted by Congress in Section 230, and their approval and reinforcement in the FCC's Internet Policy Statement, provide 
				the requisite "regulatory goals," congressional intent, and statutory basis upon which to base Title I ancillary 
				jurisdiction.<sup id="a-131"><a href="<?php echo site_url($base,"#fn-131"); ?>">[131]</a></sup> Congress clearly intended, as evident in its findings and policymaking, to foster the open, 
				competitive exchange and free market that the Internet continues to offer. Therefore, regulation over broadband Internet, under Title I, to remedy both an 
				ISP's discriminatory access and promote competition online, is proper.
			</p>
			<p>
				While critics charge that the FCC's use of Section 230 will enable it to regulate any aspect of the Internet that it 
				wishes,<sup id="a-132"><a href="<?php echo site_url($base,"#fn-132"); ?>">[132]</a></sup> the limited policies outlined in the provision, when read in light of the Supreme Court's 
				"regulatory goals" test for ancillary jurisdiction, appropriately restrict any FCC regulation of broadband Internet to those specific goals outlined in 
				Section 230. The medium is not open for unfettered regulation simply because the provision's subject matter includes the Internet, and such an interpretation 
				of the FCC's Comcast Report is similarly misguided. In this instance, the Commission may regulate Comcast's network throttling because such regulation is 
				ancillary to the congressional policies of ensuring a competitive market, promoting the continued development of the Internet, and allowing users to control 
				the information they receive with the applications they chose. However, nothing in section 230 suggests that the FCC can regulate an ISP's reasonable network 
				management practices.
			</p>
			<h4 id="#III-C-5">5. The History of Section 230 in the Communications Decency Act Does Not Minimize Its Role as a Basis for Ancillary Jurisdiction</h4>
			<p>
				Admittedly, Section 230 was passed as part of the Communications Decency Act ("CDA") or Title V of the 1996 Telecommunications Act&mdash;a law whose 
				primary purposes were to regulate indecency and obscenity on the Internet and to provide immunity for operators of Internet services regarding the potentially 
				defamatory or obscene speech of their users.<sup id="a-133"><a href="<?php echo site_url($base,"#fn-133"); ?>">[133]</a></sup> In this context, the provision forbids any treatment of such 
				interactive computer service providers as publishers, and removes any liability as long as they attempt to screen offensive material in good 
				faith.<sup id="a-134"><a href="<?php echo site_url($base,"#fn-134"); ?>">[134]</a></sup> While the policies and findings of Section 230 speak to broad goals for the Internet, such as 
				maintaining a competitive market, some have argued that this language has only meant that "walled gardens like the former AOL ('online service providers,' 
				in the language of Section 230) that provide content as well as Internet access, or content providers generally (in the language of the cases under Section 
				230) should not be treated like publishers. Congress wanted to avoid making companies like AOL or eBay liable for every posting of their users," and the 
				intent of Section 230 was merely to foster such competition by preventing the myriad lawsuits that would predictably beleaguer these services if they were 
				treated as publishers.<sup id="a-135"><a href="<?php echo site_url($base,"#fn-135"); ?>">[135]</a></sup>
			</p>
			<p>
				Though this argument certainly has merit, and while it is likewise fair to conclude that "Section 230 itself had nothing to do with whether telephone 
				companies or cable companies providing access to the Internet should or should not be burdened with nondiscrimination 
				requirements,"<sup id="a-136"><a href="<?php echo site_url($base,"#fn-136"); ?>">[136]</a></sup> the plain meaning of the statute&mdash;alongside Congress' unwillingness to restrict its 
				statutory grants and policies solely to the technologies that existed at the time&mdash;provide more than adequate justification for the FCC's use of 
				Section 230 as a foundation for ancillary jurisdiction in this context.
			</p>
			<p>
				First, nowhere does Section 230, or any provision of the Telecommunications Act, restrict the Act's Internet policies to the domain of "Internet 
				publisher liability" or specifically prevent the FCC from implementing nondiscrimination policies. The statute plainly outlines a series of general 
				findings and furthers them with five specific goals, only two of which specifically relate to obscenity or the other stated purposes of the 
				CDA.<sup id="a-137"><a href="<?php echo site_url($base,"#fn-137"); ?>">[137]</a></sup> On its face, then, Section 230 provides the only source of congressional Internet policies in the 
				entire Act. Not only does it also fail to restrict those policies to the Internet publisher context, but it would be improper to conclude that simply 
				because Congress' Internet policies happened to be included in a section entitled "Protection for Private Blocking and Screening of Offensive 
				Material"<sup id="a-138"><a href="<?php echo site_url($base,"#fn-138"); ?>">[138]</a></sup> that such broad, sweeping policies were entirely limited to providing ancillary jurisdiction 
				for the FCC's narrow responsibility of protecting content providers from defamation liability.
			</p>
			<p>
				Second, and more importantly, throughout the Supreme Court's history with ancillary jurisdiction, it has consistently held that Congress did not intend to 
				freeze the Act in time and prevent the FCC from expanding its regulatory goals to other appropriate technologies through Title 
				I.<sup id="a-139"><a href="<?php echo site_url($base,"#fn-139"); ?>">[139]</a></sup> Instead, by allowing the FCC to regulate new technologies like cable 
				television<sup id="a-140"><a href="<?php echo site_url($base,"#fn-140"); ?>">[140]</a></sup> and information-services<sup id="a-141"><a href="<?php echo site_url($base,"#fn-141"); ?>">[141]</a></sup> through its ancillary 
				authority, the Supreme Court acknowledged the broad principles of FCC-deference and the extension of existing statutory goals and language to new areas and 
				contexts in the Act. In this context, it would be improper to find that Congress somehow restricted its Internet policy goals in Section 230 to one specific 
				circumstance&mdash;ISP publisher liability&mdash;while at the same time left its other policy goals and statutory grants of authority open to new applications 
				through Title I. More specifically, if Congress allowed the FCC to regulate cable television under the umbrella of broadcast television goals, then it seems 
				unreasonable that Congress would prohibit the FCC from regulating protocol discrimination over broadband Internet while allowing it to regulate the types of 
				defamation claims actionable against content providers over that same broadband Internet.
			</p>
			<p>
				Moreover, Section 230's specific goals of improving competition and the development of applications and services are acutely applicable in both the Internet 
				publisher context and the bandwidth throttling context. By removing the virtually endless litigation that would ensue if content providers were open to 
				defamation suits based on the content their users provide, Section 230 appropriately encourages the growth of the Internet and competition among such 
				providers.<sup id="a-142"><a href="<?php echo site_url($base,"#fn-142"); ?>">[142]</a></sup> Likewise, by eliminating the types of anticompetitive behavior Comcast sought to introduce with 
				its protocol throttling, jurisdiction based on Section 230 would similarly ensure that the Internet remains both a hotbed for development and a competitive 
				environment by removing barriers to entry and success.
			</p>
			<p>
				As outlined above, any application of statutory policy goals&mdash;like those found in Section 230&mdash;as a basis for Title I ancillary jurisdiction must 
				be specifically limited to those stated "regulatory goals" and implicit congressional intent.<sup id="a-143"><a href="<?php echo site_url($base,"#fn-143"); ?>">[143]</a></sup> This appropriate 
				limitation underpinning any proposed FCC regulation under Title I prevents the Commission from broadly regulating <em>anything</em> related to the Internet under 
				the auspices of Section 230's Internet policies&mdash;a fact that the FCC Report does not recognize in its broad statement of 
				authority<sup id="a-144"><a href="<?php echo site_url($base,"#fn-144"); ?>">[144]</a></sup> and a concern Commissioner McDowell appropriately notes in his dissenting 
				opinion.<sup id="a-145"><a href="<?php echo site_url($base,"#fn-145"); ?>">[145]</a></sup> However, Section 230 certainly applies to the FCC's regulation of an ISP's protocol-specific 
				bandwidth throttling, as it violates the specific regulatory goals of promoting competition (like that between Comcast and Vuze), encouraging application and 
				service development (such as the use and advancement of the BitTorrent protocol in delivering higher quality video content), and promoting consumer choice in 
				how those consumers wish to receive content (such as providing a delivery service other than Comcast's Fancast). Comcast argues that the FCC "cannot exercise 
				jurisdiction over its interference with peer-to-peer TCP connections . . . because such authority must be 'ancillary' to something, but here it is not clear 
				what that something might be."<sup id="a-146"><a href="<?php echo site_url($base,"#fn-146"); ?>">[146]</a></sup> Again, however, Section 230 lays out five specific, narrow policy goals that 
				define exactly what that "something" is and appropriately limit the FCC's use of Title I over the Internet.
			</p>
			<h2 id="#IV">IV. Conclusion</h2>
			<p>
				While the Internet has enjoyed a history of deregulation&mdash;and rightly so&mdash;nothing in the Telecommunications Act prevents the FCC from exercising 
				its ancillary jurisdiction over unreasonable broadband Internet protocol throttling. The Supreme Court held that Title I provides a direct grant of authority, 
				and that the FCC may exercise that authority as long as it grounds it in some stated congressional policy or goal, regardless of whether that goal is related 
				to one of the Act's three specific grants of statutory authority. Though Section 230 of the Telecommunications Act was passed in the Communications Decency Act, 
				the provision's plain language, inclusion in the Telecommunication Act, and the Supreme Court's policy of FCC deference regarding new technologies all weigh 
				against the notion that Section 230 should be limited to the specific context of content publisher liability. Overall, Section 230 outlines specific policies 
				upon which ancillary jurisdiction over an Internet Service Provider's discriminatory throttling of one specific, popular, and developing protocol can reasonably 
				be based, and in this context the FCC can, and must, act if it seeks to fully promote those policies of competition and development over broadband Internet.
			</p>
			<p class="center">
				* * * * *
			</p>
		</div>
		
		<ol id="footnotes">
			<li id="fn-1">
				Last September, Comcast challenged the FCC's August order in the D.C. Circuit Court of Appeals, which required Comcast to alter its network management 
				practices, specifically those aimed at restricting BitTorrent connections; that case has not yet been argued as of the time of the writing of this Note. 
				<i>See</i> Comcast Corp. v FCC, No. 08-1291 (D.C. Cir. filed Sept. 4, 2008). <a href="<?php echo site_url($base,"#a-1"); ?>">#</a>
			</li>
			<li id="fn-2">
				<i>In re</i> Formal Complaint of Free Press and Public Knowledge Against Comcast Corp. for Secretly Degrading Peer-to-Peer Applications, Broadband Industry 
				Practices Petition of Free Press et al. for Declaratory Ruling that Degrading an Internet Application Violates the FCC's Internet Policy Statement and Does Not 
				Meet an Exception for "Reasonable Network Management", 23 F.C.C.R. 13028 (Aug. 20, 2008) [hereinafter <i>FCC Report</i>]. <a href="<?php echo site_url($base,"a-2"); ?>">#</a>
			</li>
			<li id="fn-3">
				<i>See</i> Comcast Corp., No. 08-1291. <i>See also</i> Petition for Review and, in the Alternative, Notice of Appeal, Comcast Corp. v. FCC, <i>petition for 
				review filed</i>, (D.C. Cir. Sept. 4, 2008), <i>available at</i> <a href="http://government.zdnet.com/images/network-management-fcc-petition-for-review.pdf">
				http://government.zdnet.com/images/network-management-fcc-petition-for-review.pdf</a> (containing a letter and motion requesting review of the FCC's final order 
				and, in the alternative, its request for appeal). <a href="<?php echo site_url($base,"a-3"); ?>">#</a>
			</li>
			<li id="fn-4">
				<i>In re</i> Appropriate Framework for Broadband Access to the Internet Over Wireline Facilities, 20 F.C.C.R. 14986 (Sept. 23, 2005) [hereinafter <i>Internet 
				Policy Statement</i>]. <a href="<?php echo site_url($base,"a-4"); ?>">#</a>
			</li>
			<li id="fn-5">
				<i>See</i> 47 U.S.C. § 152(a) (2006); United States v. Sw. Cable Co., 392 U.S. 157, 167 (1968) ("<i>Southwestern</i>") (affirming Title I's explicit 
				application to "all interstate and foreign communication by wire or radio"). <a href="<?php echo site_url($base,"a-5"); ?>">#</a>
			</li>
			<li id="fn-6">
				The FCC may assert its Title I authority where its exercise is "reasonably ancillary to the effective performance of the Commission's various responsibilities." 
				<i>Id.</i> at 178. As will be set out in greater detail below, Section 230 of the 1996 Act, which outlines the FCC's Internet policies, provides responsibilities 
				on which to base such jurisdiction. 47 U.S.C. § 230(b). <a href="<?php echo site_url($base,"a-6"); ?>">#</a>
			</li>
			<li id="fn-7">
				<i>FCC Report</i>, <i>supra</i> note 2, at 13029 (internal citations omitted). <a href="<?php echo site_url($base,"a-7"); ?>">#</a>
			</li>
			<li id="fn-8">
				<i>See</i> <i>Comcast Blockage of BitTorrent 101</i>, Free Press, Oct. 23, 2007, <i>available at</i> <a href="http://www.freepress.net/files/comcast_blocking_factsheet.pdf">http://www.freepress.net/files/comcast_blocking_factsheet.pdf</a> 
				(containing a detailed description of the BitTorrent protocol). <a href="<?php echo site_url($base,"a-8"); ?>">#</a>
			</li>
			<li id="fn-9">
				Peter Grant, <i>Companies Try New Ways to Boost Web Video Quality</i>, <em class="smallcap">Wall St. J.</em>, Oct. 9, 2007, at B10 (discussing the use of 
				torrent technology to transmit high quality video files). For instance, CBS, Fox, MLB, and the Discovery Channel all currently employ torrent technology. 
				<a href="<?php echo site_url($base,"a-9"); ?>">#</a>
			</li>
			<li id="fn-10">
				<i>See, e.g.</i>, Tim Arango, Comcast to Expand On-Demand Programming, <em class="smallcap">Int'l Herald Trib.</em>, Jan. 8, 2008, <i>available at</i> 
				<a href="http://www.iht.com/articles/2008/01/08/technology/cable.php">http://www.iht.com/articles/2008/01/08/technology/cable.php</a>. <a href="<?php echo site_url($base,"a-10"); ?>">#</a>
			</li>
			<li id="fn-11">
				Comments of Free Press, <i>In re</i> Petitions of Free Press et al. for Declaratory Ruling that Degrading an Internet Application Violates the FCC's 
				Internet Policy Statement and Does Not Meet an Exception for "Reasonable Network Management," and Vuze et al. to Establish Rules Governing Network Management 
				Practices by Broadband Network Operators, WC Docket No. 07-52, CS Docket No. 97-80, at 51, <i>available at</i> 
				<a href="http://fjallfoss.fcc.gov/prod/ecfs/ retrieve.cgi?native_or_pdf=pdf&id_document=6519841216">http://fjallfoss.fcc.gov/prod/ecfs/ retrieve.cgi?native_or_pdf=pdf&id_document=6519841216</a> 
				[hereinafter <i>Comments of Free Press</i>]. <a href="<?php echo site_url($base,"a-11"); ?>">#</a>
			</li>
			<li id="fn-12">
				<i>See</i> <i>supra</i> notes 10&ndash;11. <a href="<?php echo site_url($base,"a-12"); ?>">#</a>
			</li>
			<li id="fn-13">
				<i>FCC Report</i>, <i>supra</i> note 2, at 13029. <a href="<?php echo site_url($base,"a-13"); ?>">#</a>
			</li>
			<li id="fn-14">
				<i>See</i> Peter Svensson, <i>Comcast Blocks Some Internet Traffic</i>, <em class="smallcap">Wash. Post</em>, Oct. 19, 2007, <i>available at</i> 
				<a href="http://www.washingtonpost.com/wp-dyn/content/article/2007/10/19/AR2007101900842.html">http://www.washingtonpost.com/wp-dyn/content/article/2007/10/19/AR2007101900842.html</a>. 
				<a href="<?php echo site_url($base,"a-14"); ?>">#</a>
			</li>
			<li id="fn-15">
				<i>Id.</i> <a href="<?php echo site_url($base,"a-15"); ?>">#</a>
			</li>
			<li id="fn-16">
				<i>Id.</i> <a href="<?php echo site_url($base,"a-16"); ?>">#</a>
			</li>
			<li id="fn-17">
				<i>Id.</i> <a href="<?php echo site_url($base,"a-17"); ?>">#</a>
			</li>
			<li id="fn-18">
				FCC, Reply Comments of the Electronic Frontier Foundation, WC Docket No. 07-52, Feb. 28, 2008, at 2, 9; <i>see also</i> <em class="smallcap">Peter Eckersley, 
				Fred von Lohmann, & Seth Schoen, Elec. Frontier Found., Packet Forgery By ISPs: A Report on the Comcast Affair</em>, 2 (2007), 
				<a href="http://www.eff.org/files/eff_comcast_report2.pdf">http://www.eff.org/files/eff_comcast_report2.pdf</a>. <a href="<?php echo site_url($base,"a-18"); ?>">#</a>
			</li>
			<li id="fn-19">
				Svensson, <i>supra</i> note 14. <a href="<?php echo site_url($base,"a-19"); ?>">#</a>
			</li>
			<li id="fn-20">
				Letter from Kathryn A Zachem, Vice President of Regulatory Affairs, Comcast Corp., to Marlene H. Dortch, Secretary, FCC, at 5 (July 10, 2008). 
				<a href="<?php echo site_url($base,"a-20"); ?>">#</a>
			</li>
			<li id="fn-21">
				FCC Report, <i>supra</i> note 2, at 13032. <a href="<?php echo site_url($base,"a-21"); ?>">#</a>
			</li>
			<li id="fn-22">
				<i>In re</i> Vuze, Inc. Petition to Establish Rules Governing Network Management Practices by Broadband Network Operators, No. 07-52 (Nov. 4, 2007), 
				<i>available at</i> <a href="http://fjallfoss.fcc.gov/prod/ecfs/retrieve.cgi?native_or_pdf=pdf&id_document=6519813947">http://fjallfoss.fcc.gov/prod/ecfs/retrieve.cgi?native_or_pdf=pdf&id_document=6519813947</a> 
				(petition for declaratory ruling); <i>In re</i> Petition of Free Press et al. for Declaratory Ruling that Degrading an Internet Application Violates the 
				FCC's Internet Policy Statement and Does Not Meet an Exception for "Reasonable Network Management," No. 07-52, No. 02-52, (Nov. 1, 2007) <i>available at</i> 
				<a href="http://fjallfoss.fcc.gov/prod/ecfs/retrieve.cgi?native_or_pdf= pdf&id_document=6519825121">http://fjallfoss.fcc.gov/prod/ecfs/retrieve.cgi?native_or_pdf= pdf&id_document=6519825121</a> (petition for declaratory ruling). 
				<a href="<?php echo site_url($base,"a-22"); ?>">#</a>
			</li>
			<li id="fn-23">
				<i>FCC Report</i>, <i>supra</i> note 2, at 13032–33. <a href="<?php echo site_url($base,"a-23"); ?>">#</a>
			</li>
			<li id="fn-24">
				<i>Id.</i> at 13032. <a href="<?php echo site_url($base,"a-24"); ?>">#</a>
			</li>
			<li id="fn-25">
				<i>Id.</i> <a href="<?php echo site_url($base,"a-25"); ?>">#</a>
			</li>
			<li id="fn-26">
				<i>See</i> David Kravetz, <i>Comcast Appeals FCC Throttling Order</i>, <em class="smallcap">Wired Blog Network</em>, Sept. 4, 2008, 
				<a href="http://blog.wired.com/27bstroke6/2008/09/comcast-appeali.html">http://blog.wired.com/27bstroke6/2008/09/comcast-appeali.html</a> 
				("'We filed this appeal in order to protect our legal rights and to challenge the basis on which the commission found that Comcast violated federal policy 
				in the absence of pre-existing legally enforceable standards or rules,' [Comcast] said in a statement."). <a href="<?php echo site_url($base,"a-26"); ?>">#</a>
			</li>
		</ol>
		
<?php	include('../footer.php'); ?>