<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jason Bourn's Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/javascript.js"></script>
</head>
<body onload="randomize_header_background();">
    <header id="header">
        <div class="container">
            <img src="images/profile_picture.jpg" alt="Profile Picture" class="profile-pic">
            <h1>Jason Bourn</h1>
            <p class="header-paragraph">Full-Stack Software Engineer | Web Developer | Game Developer | Tech Enthusiast</p>
        </div>
    </header>
    <a class="home-button">Currently In Development</a>
    <nav>
        <ul class="nav-links">
            <li><a href="#about">About Me</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section class="about">
            <h2>About Me</h2>
            <p><!--<p style="text-align: center;">-->
                A driven and versatile software engineer with over 7 years of experience in designing and 
                developing large scale web and mobile applications. Proficient in full-stack development 
                with experience in the LAMP stack, Java, and Android SDK optimization. Experienced with 
                working in Agile environments to deliver scalable software solutions and enhanced user 
                experiences. A strong background in debugging, API integration, and technical 
                documentation with a passion for developing software and contributing to diverse projects.  <br><br>

                Born in 1994 in South Africa, my family successfully moved to the USA in 1998, becoming citizens in 2008. My passion for 
                computers started at a young age, inspired by my father's work in the Information Security industry, writing my first HTML  
                code in middle school and experimenting with game development in highscool. I went on to University to study computer 
                science and computer game design and development at one of the most prestigious technical schools in Georgia.<br>
                In 2012, I graduated highschool and started my university career at Southern Polytechnic State University (SPSU) 
                where I studied Computer Science as a major, learning the basics of programming and software development.<br>
                In 2014, I changed my major from Computer Science to Computer Game Design and Development with a minor in Computer Science. 
                I went on to learn about the video game industry, developing and programming video games, while learning 
                various programming languages and data systems.<br>
                In 2015, SPSU was taken over by Kennesaw State University becoming "SPSU School of Computer and Software Engineering at KSU".<br>
                I graduated in 2016 with a bachelors degree in Computer Game Design and Development and a minor in Computer Science. 
                From there, I went on to work for IDology, a fruad prevention company, as a full stack software engineer. 
                IDology's business is "fraud prevention solutions" tailored to the client's needs, creating many 
                different kinds of applications and web pages for customers to assist with fraud prevention. I worked 
                at IDology for 7 years, gaining first hand software development experience in an enterprise setting. <br>
                In 2023, I decided to move to Japan to immerse myself in a different culture, gain more life experience, 
                and gain a new perspective. Since then, I have been working as an English teacher, a software developer, 
                and an AI data trainer, further expanding my skills and knowledge. I've also been learning new frameworks and 
                working on various programming projects to build my portfolio and stay up to date with the latest in the 
                development field.<br><br>

                This portfolio, powered by PHP and React.js, along with the projects I have worked on, stand as a 
                demonstration of my capabilities as a software developer.
            </p>
        </section>

        <section class="cv">
            <div class="cv-button-container">
                <button id="technical-skills-button" class="cv-button" onclick="change_info('technical-skills')">
                    <h3>Technical Skills</h3>
                </button>

                <button id="professional-experience-button" class="cv-button" onclick="change_info('professional-experience')">
                    <h3>Professional Experience</h3>
                </button>

                <button id="education-button" class="cv-button" onclick="change_info('education')">
                    <h3>Education</h3>
                </button>

                <button id="education-button" class="cv-button" onclick="change_info('full-cv')">
                    <h3>Download CV</h3>
                </button>
            </div>
            <div class="cv-info" id="cv-info">
                <div class="cv-info-div" id="technical-skills">
                    <h3>Technical Skills</h3>
                    <p id="technical_skills" class="information">
                        Linux operating systems – RHEL, Ubuntu <br>
                        Windows operating systems <br>
                        Version control tools 
                        <li>SVN, git, GitHub</li> 
                        Languages 
                        <li>Java, PHP, Python, JavaScript, HTML/HTML5, Swift/SwiftUI, CSS, Unity C#, Bash</li>
                        Frameworks 
                        <li>React.js</li>
                        Database 
                        <li>SQL (MySQL)</li> 
                        Other
                        <li>Apache, AWS</li>
                        Willing to learn other languages and frameworks required.
                    </p>
                </div>
                <div class="cv-info-div" id="professional-experience" style="display: none;">
                    <h3>Professional Experience</h3>
                    <p id="professional_experience" class="information">
                        <table>
                            <tr class="company-experience">
                                <td style="text-align: center; vertical-align: top;"><b>Invisible</b><br>
                                    October 2024 – Present</td>
                                <td class="professional_experience_data"><b>Advanced AI Data Trainer</b><br>
                                    <i>Artifacts</i>
                                    <li>Programming work.</li>
                                    <i>Tether Project</i>
                                    <li>Query Side-by-Side work.</li>
                                    <i>VQA Project</i>
                                    <li>Worked in the Operator role, annotating and creating statistical analyses for sales data graphs and charts.</li>
                                    <li>Moved up to the editor role in LLM training, reviewing and editing Operator annotations for final delivery.</li>
                                    <i>VFM Project</i>
                                    <li>Analyzing, annotating, and creating descriptions of cinematic scenes for training LLMs. </li>
                                </td>
                            </tr>
                            <tr><td><br></td></tr> <!-- just use this for now -->
                            <tr class="company-experience">
                            <td style="text-align: center; vertical-align: top;"><b>NOVA Holdings Co.</b><br>
                                    January 2025 – March 2025</td>
                                <td class="professional_experience_data"><b>Front-end Software Developer</b><br>
                                    <li>Responsible for creating and managing teaching applications, tools, and webpages for ESL teachers.</li>
                                    <li>Handled deployment of updates, fixes, and releases for teachers nationwide in Japan.</li>
                                    <li>Taking part in code refactoring and cleanup of entire codebase.</li>
                                </td>
                            </tr>
                            <tr><td><br></td></tr> <!-- just use this for now -->
                            <tr>
                            <td style="text-align: center; vertical-align: top;"><b>NOVA Holdings Co.</b><br>
                                    May 2024 – March 2025</td>
                                <td class="professional_experience_data"><b>ESL(English Second Language) Teacher</b><br>
                                    <li>ESL Teacher
                                        <li>Teaching ESL classes for elementary school students, high school students, and adults in group 
                                            and one-on-one classes.</li>
                                        <li>Teaching Business English classes for adults in one-on-one classes.</li>
                                    </li>
                                </td>
                            </tr>
                            <tr><td><br></td></tr> <!-- just use this for now -->
                            <tr>
                                <td style="text-align: center; vertical-align: top;"><b>GBG IDology</b><br>
                                    March 2017 – April 2024</td>
                                <td class="professional_experience_data"><b>Mid-Level full stack software engineer – LAMP software stack</b><br>
                                    <li>Linux/Apache/MySql/PHP</li>
                                    <li>Worked within an Agile methodology framework.</li>
                                    <li>Accountable for implementing front-end modifications to both the customer web 'configuration portal' and the customer 
                                    <li>'developer portal', both of which were powered by PHP/JSP and backed by a SQL database.</li>
                                    <li>Managed backend web application REST API adjustments, including the modification of existing endpoints 
                                        and integration of new ones.</li>
                                    <li>Conducted thorough code reviews for colleagues.</li>
                                    <li>Created and maintained developer utility scripts for handling routine activities.</li>
                                    <li>Conducted troubleshooting and debugging on all areas of the code base, front-end and back-end.</li>
                                    <li>Executed developer testing and User Acceptance Testing (UAT) for new and modified features of the platform.</li>
                                    <li>Managed technical documentation for platform modifications and enhancements.</li>
                                </td>
                            </tr>
                            <tr><td><br></td></tr> <!-- just use this for now -->
                            <tr>
                                <td style="text-align: center; vertical-align: top;"><b>GBG IDology</b><br>
                                    March 2022 – April 2024</td>
                                <td class="professional_experience_data"><b>Mobile developer – Android</b><br>
                                    <li>Java SDK developed in Android Studio.</li>
                                    <li>Rebuilt and optimized the identity verification Android SDK.</li>
                                    <li>Responsible for leading the development and enhancement of the SDK.</li>
                                    <li>Tasked with providing maintenance and support to clients integrating with the SDK.</li>
                                </td>
                            </tr>
                        </table>
                    </p>
                </div>
                <div class="cv-info-div" id="education" style="display: none;">
                    <h3>Education</h3>
                    <b>Bachelor of Science from SPSU School of Computer & Software Engineering at KSU</b>
                    <li>Fall 2012 - Fall 2016</li>
                    <li>B.S. in Computer Game Design and Development - Computer Science Minor</li>
                    <li>GPA: 3.11</li>
                    <li>Upper-level Courses: Artificial Intelligence, Software Testing & Quality Assurance, Algorithm Analysis, 
                    Applications Extensions & Scripting, Data Structures, 3D Modelling & Animation, Mobile & Casual Game 
                    Development, Computer Graphics & Multimedia, User-Centered Design.</li>
                </div>
                <div class="cv-info-div" id="full-cv" style="display: none;">
                    <h3>Dwonload CV</h3>
                    <p>
                        Download a PDF of my CV below.
                    </p>
                    <a href="download.php?file=JasonBourn_CV_2.pdf" style="text-decoration: none;">CV Download</a>
                </div>
            </div>
        </section>

        <!--<section id="skills">
        </section>-->
        <section id="projects">
            <h2>Projects</h2>
            <div class="projects">
   
                <?php
                $projects = [
                    ["title" => "The Final Frontier", "description" => "A top down sci-fi shooter game created in Unity 3D.", "link" => "https://sites.google.com/site/tffdev/home"],
                    ["title" => "Mischief", "description" => "Action stealth shooter game created in Unity 3D.", "link" => "https://sites.google.com/site/mischiefcentral/home"],
                    ["title" => "Android Projects", "description" => "Android application projects (in development).", "link" => "android_projects.php"],
                    ["title" => "Python Game - Pl@4mer (in development)", "description" => "A simple 2D python game(in development).", "link" => "platformer_game.php"],
                    ["title" => "ANN Chess (in development)", "description" => "A simple JavaScript chess game. Play against an AI powered by an ANN", "link" => "chess.php"]
                ];

                foreach ($projects as $project) {
                    echo "<a class='projectButton' href='{$project['link']}'>";
                    echo "<h3>{$project['title']}</h3>";
                    echo "<p>{$project['description']}</p>";
                    echo "</a>";
                }
                ?>

            </div>
        </section>
        <section id="contact">
            <h2>Contact Me</h2>
            <form action="send_mail.php" method="POST">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Jason Bourn. All rights reserved.</p>
    </footer>
</body>
</html>
