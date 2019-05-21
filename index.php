<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
		<main>
			<section class="aboutMe">
				<div class="leftColumn">
					<h1>Dai Nguyen</h1>
					<p>I'm an Electrical/Computer Engineer, and Computer Networking enthusiast.</p>

					<button onclick="moreAboutMe()" id="moreAboutMeButton" style="display: none;">More About Me</button>
					<div id="moreAboutMe" style="display: none;">
						<p>When I was 6 years old, my Dad bought a Desktop PC for our home so that it could help him and my sister to work on documents easier. The processor on the PC was Intel Pentium II, and it had Windows 98 OS installed on it. Fascinating, the PC used a big and heavy cathode-ray-tube (CRT) monitor, and it also had Flobby Disks which were very popular back then.<p>
							
						<p>At that time, none of us knew how to assemble the PC. Therefore, we had to wait for a technician to come in and assemble it. When he came and finished assembling it, he showed us how to use it. In the end, he showed me how to open a racing game to play since the game was pre-installed on the hard drive.</p>

						<p>The moment when I started playing the game, I was amazed by how the computer could do that. Since then, my passion and ambition started heading toward to Electronics & Computer field, and I have been taking a lot of classes regarding about Electrical/Electronics, Computer Systems, Computer Networks, and Programming to better understand about the computer.</p>
					</div>
				</div>

				<div class="profileSection">
					<figure>
						<img src="imgs/profile.jpg" class="profilePhoto" alt="profile photo">
					</figure>
				</div>

				<div class="infoTable">
					<h2>Genernal Information</h2>

					<div class="tableRow">
						<div class="tableCell_1">Address</div>
						<div class="tableCell_2">Burien, WA 98166, USA</div>
					</div>

					<div class="tableRow">
						<div class="tableCell_1">Email</div>
						<div class="tableCell_2">
							<span class="infoMail">
								<a href="mailto:hello@dai-nguyen.com">hello@dai-nguyen.com</a>
							</span>
						</div>
					</div>
				</div>

				<div class="socialNetwork">
					<nav>
						<a href="http://linkedin.dai-nguyen.com/" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="fab fa-linkedin fa-3x"></i></a>
						<a href="http://github.dai-nguyen.com/" aria-label="GitHub" target="_blank" rel="noopener"><i class="fab fa-github fa-3x"></i></a>
						<a href="http://fb.dai-nguyen.com/" aria-label="Facebook" target="_blank" rel="noopener"><i class="fab fa-facebook fa-3x"></i></a>
						<a href="http://ig.dai-nguyen.com/" aria-label="Instagram" target="_blank" rel="noopener"><i class="fab fa-instagram fa-3x"></i></a>
						<a href="http://tw.dai-nguyen.com/" aria-label="Twitter" target="_blank" rel="noopener"><i class="fab fa-twitter fa-3x"></i></a>
					</nav>
				</div>
			</section>		
			
			<section class="experience">
				<h2>Relevant Experience</h2>
				<ul>
					<li>
						<h3>June 2017 - August 2017</h3>
						<h4>Seattle University</h4>
						<h5>Undergraduate Research Assistant</h5>
						<p>Provideded ongoing assistance to an assigned faculty member, and handled various responsibilities related to research projects and miscellaneous assignments</p>
					</li>

					<li>
						<h3>March 2017 - June 2017</h3>
						<h4>Seattle City Light</h4>
						<h5>Electrical Engineering Intern</h5>
						<p>Designed, tested, and developed a prototype for a DC distribution circuit to charge a cellphone, using 6VDC alkaline battery and 5V USB charger</p>
					</li>

					<li>
						<h3>January 2017 - March 2017</h3>
						<h4>Seattle University</h4>
						<h5>Teaching Assistant</h5>
						<p>Provided ongoing assistance to laboratory students, specifically with developing and comprehending programming projects using VHDL to FPGA</p>
					</li>
				</ul>		
			</section>

			<section id="project" class="project">
				<h2>Projects Highlights</h2>
				<div class="grid-container projectSection"> 
                    <div class="grid-item">
						<h3>IMAGE PROCESSING WITH IoT</h3>
						<p>Undergraduate research assistant to create an image processing project for students</p>
						<p class="skill">
							<span><strong>MatLab | ThingSpeak</strong></span>
						</p>

						<img src="projects//imgs/under-research-1.png" alt="Undergraduate Research">

						<div class="navButton">
							<a href="projects/under-research.php">Project Details</a>
						</div>
					</div>
					
					<div class="grid-item">
						<h3>TRACTOR/TRAILER COMMUNICATION</h3>
						<p>Senior design project to create a truck's communication system that can collect data from its trailer's sensor</p>
						<p class="skill">
							<span><strong>C | Python | Java | Anrdroid | Bluetooth | SQLite</strong></span>
						</p>
						
						<img src="projects/imgs/senior-design-1.jpg" alt="senior design project">

						<div class="navButton">
							<a href="projects/senior-design.php">Project Details</a>
						</div>
					</div>

					<div class="grid-item">
						<h3>HOME GIGABIT NETWORK & NAS</h3>
						<p>Network engineering project to create a fast, secure and reliable home network </p>
						<p class="skill">
							<span><strong>UNIX | Linux | TCP/IP</strong></span>
						</p>
						
						<img src="projects/imgs/home-net-1.jpg" alt="home gigabit">

						<div class="navButton">
							<a href="projects/home-net.php">Project Details</a>
						</div>
					</div>

                    <div class="grid-item">
						<h3>AUTOMATED DANCING PUPPET</h3>
						<p>Engineering lab project using hardware and software to control a puppet</p>
						<p class="skill">
							<span><strong>C | Raspberry Pi</strong></span>
						</p>
						
						<img src="projects/imgs/puppet-3.jpg" alt="Junior Lab">

						<div class="navButton">
							<a href="projects/puppet.php">Project Details</a>
						</div>
                    </div>
                </div>
			</section>
			
			<section class="reference">
				<h2>References</h2>
				<div class="ref-wrapper">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div><i class="fas fa-quote-left fa-1x"></i></div>
							<div class="ref">
								<p>
									I had the pleasure of teaching and mentoring Dai during his time at Seattle University. His ability to find creative and resourceful solutions to problems, while being mindful of project constraints, sets him apart from his peers. Above all, I was impressed with Dai's desire to learn and perfect as many technical skills as he could, often going above and beyond what is required for his courses and projects. He takes pride in mentoring and helping his peers. Dai will be a valuable asset to any team. 
								</p>
								<h3>Shiny Abraham, Ph.D</h3>
								<h4>Associate Professor at Seattle University</h4>
								<div>
									<a href="https://www.linkedin.com/in/dai-nguyen/" target="_blank" rel="noopener">Original recommendation on LinkedIn</a>
								</div>
							</div>
						</div>

						<div class="item">
							<div><i class="fas fa-quote-left fa-1x"></i></div>
							<div class="ref">
								<p>
									As Dai Nguyen's academic advisor over the last four years, I have watched him gain important job skills and, more importantly, observed his growth in self-discipline and focus. He achieves his goals and can communicate well about his technical accomplishments. He also serves on teams and pulls his weight in both performing tasks and contributing leadership.
								</p>
								<h3>Alvin Moser, Ph.D</h3>
								<h4>Associate Professor at Seattle University</h4>
								<div>
									<a href="https://www.linkedin.com/in/dai-nguyen/" target="_blank" rel="noopener">Original recommendation on LinkedIn</a>
								</div>
							</div>
						</div>

						<div class="item">
							<div><i class="fas fa-quote-left fa-1x"></i></div>
							<div class="ref">
								<p>
									I had the pleasure of studying with Dai when we were in school together. An incredibly gifted student, Dai was always meticulously organized. His notes were immaculate, and I'm not exaggerating when I say that his breadboards looked like works of art. Dai is dedicated, the type of person who will spend an extra hour to take a project from 98% perfect to 100%. He is extremely smart, focused, and driven. In group projects, he was the quiet backbone of the team. You can tell by talking with him that he has a genuine passion for software and electronics. He would make a great addition to any software or hardware team. Finally, I would like to add that Dai did not request that I write this recommendation. I just saw his profile and wanted to write one because he is that good.
								</p>
								<h3>Mirka Mandich</h3>
								<h4>Electrical Engineering Student</h4>
								<h5>Seattle University Class of 2019</h5>
								<div>
									<a href="https://www.linkedin.com/in/dai-nguyen/" target="_blank" rel="noopener">Original recommendation on LinkedIn</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php include 'includes/footer.php';?>