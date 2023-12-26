<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">Shu Zhang</div>
        <img src="images/icon.png" alt="icon" class="icon-img"/>
        <div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo" id="logo">Shu Zhang</div>
        <img src="images/icon.png" alt="icon" class="icon-img"/>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="#about" onclick="toggleMenu()">About</a></li>
                <li><a href="#skills" onclick="toggleMenu()">Skills</a></li>
                <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
                <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
                <li><a href="login.php" onclick="toggleMenu()">Login</a></li>
            </div>            
        </div>
    </nav>
    <section id="introduction">
        <div class="profile-image">
          <img src="images/profile-photo.jpg" 
          alt="Shu's profile photo" class="introduction-profile-image"/>
        </div>
        <div class="section-text">
          <p class="section-text-p1">Hello, I'm</p>
          <h1 class="title">Shu Zhang</h1>
          <p class="section-text-p2">Software Developer</p>
          <div id="link-icons">
            <img
              src="images/linkedin-icon.png"
              alt="My LinkedIn profile"
              class="icon"
              onclick="location.href='https://www.linkedin.com/in/shu-zhang-582265263/'"
            />
            <img
              src="images/github.png"
              alt="My Github profile"
              class="icon"
              onclick="location.href='https://github.com/Shuzzzzzzz'"
            />
          </div>
        </div>
      </section>
      <section id="about">
        <p class="section-text-p1">Get To Know More</p>
        <h1 class="title">About Me</h1>
        <div class="section">
          <div class="profile-image">
            <img
              src="images/profile-photo.jpg"
              alt="Profile picture"
              class="about-profile-image"
            />
          </div>
          <div class="about-container">
            <div class="about-details">
              <div class="details-container">
                <img
                  src="images/education.png"
                  alt="Education icon"
                  class="icon"
                />
                <h3>Education</h3>
                <div class="about-box">
                  <p>Master of Software Development</p>
                  <p>Bachelor of Teaching</p>
                </div>  
              </div>
              <div class="details-container">
                <img
                  src="images/work-experience.png"
                  alt="Experience icon"
                  class="icon"
                />
                <h3>Experience</h3>
                <div class="about-box">
                  <p>Teacher</p>
                  <p>Head Teacher</p>
                </div>
              </div>
            </div>
            <div class="text-container">
              <p>
                Over the years of working in the education sector, I have developed a rich 
                set of skills in communication, customer engagement, and report writing. I 
                also have gained the ability to multitask and work under pressure. My 
                passion for identifying opportunities for improvement and my ability to 
                collaborate effectively with diverse stakeholders has allowed me to succeed
                in my previous teaching role. Now, I am excited to adapt my skills into 
                the world of software development and embark on a new career path.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="skills">
        <p class="section-text-p1">Explore My</p>
        <h1 class="title">Skills</h1>
        <div class="about-container">
            <div class="about-details">
                <div class="details-container">
                    <div class="skill-container">
                    <img src="images/css.png" alt="skill icon" class="skill-image"/>
                    </div>
                    <div class="skill-container">
                        <img src="images/cloud.png" alt="skill icon" class="skill-image"/>
                    </div>
                    <div class="skill-container">
                        <img src="images/git.png" alt="skill icon" class="skill-image"/>
                    </div>
                    <div class="skill-container">
                        <img src="images/html.png" alt="skill icon" class="skill-image"/>
                    </div>
                    <div class="skill-container">
                        <img src="images/java.png" alt="skill icon" class="skill-image"/>
                    </div>
                    <div class="skill-container">
                        <img src="images/js.png" alt="skill icon" class="skill-image"/>
                    </div>
                    <div class="skill-container">
                        <img src="images/php.png" alt="skill icon" class="skill-image"/>
                    </div>
                    <div class="skill-container">
                        <img src="images/sql.png" alt="skill icon" class="skill-image"/>
                    </div>
                </div>
            </div>
        </div>     
      </section>
      <section id="projects">
        <p class="section-text-p1">Browse My Recent</p>
        <h1 class="title">Projects</h1>
        <br>
        <br>
        <div class="projects-container">
            <div class="project-details">
                <div class="project-box">
                    <div class="article-container">
                        <img
                        src="images/project1.jpg"
                        alt="Project 1"
                        class="project-image"
                        />
                    </div>
                    <div class="project-label">
                    <h2>Project One</h2>
                    <button
                        class="project-button"
                        onclick="location.href='https://github.com/Shuzzzzzzz/web-project'"
                        >
                        Github
                        </button>
                    </div>
                </div>
                <div class="project-box">
                    <div class="article-container">
                        <img
                        src="images/project2.jpg"
                        alt="Project 2"
                        class="project-image"
                        />
                    </div>
                    <div class="project-label">
                    <h2>Project Two</h2>
                    <button
                        class="project-button"
                        onclick="location.href='https://github.com/Shuzzzzzzz/web-project'"
                        >
                        Github
                        </button>
                    </div>
                </div>
                <div class="project-box">
                    <div class="article-container">
                        <img
                        src="images/project3.jpg"
                        alt="Project 3"
                        class="project-image"
                        />
                    </div>
                    <div class="project-label">
                    <h2>Project Three</h2>
                    <button
                        class="project-button"
                        onclick="location.href='https://github.com/Shuzzzzzzz/web-project'"
                        >
                        Github
                        </button>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section id="contact">
        <p class="section-text-p1">Get in Touch</p>
        <h1 class="title">Contact Me</h1>
        <div class="contact-container">
            <form class="input-container" action="contactform.php" method="post">
                <input name="name" type="text" placeholder="Name">
                <input name="email" type="text" placeholder="Your Email">
                <input name="subject" type="text" placeholder="Subject">

                <!-- <label for="visitor-info">What describes you the best?</label> -->
                <!-- <select name="visitor-info" id="visitor-info">
                    <option value="employer">Employer</option>
                    <option value="friend">Friend</option>
                    <option value="other">Other</option> -->

                <textarea name="message" placeholder="Message(optional)"></textarea>
                <button name="submit" type="submit" class="contact-button">Submit</button>
            </form>       
        </div>
      </section>
      <footer id="footer">
        <nav>
          <div class="nav-links-container">
            <ul class="nav-links">
              <li><a href="#about">About</a></li>
              <li><a href="#skills">Skills</a></li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#introduction">top^</a></li>
            </ul>
          </div>
        </nav>
        <!-- <div class="login">
          <p>Admin Login</p>
          <input class="login-info" name="username" type="text" placeholder="Username">
          <input class="login-info" name="password" type="text" placeholder="Your password">
          <button class="login-button" onclick="location.href='login.php'">Go to admin login page</button>
        </div> -->
        <p>Copyright &#169; 2023 Shu Zhang</p>
      </footer>
      <script src="script.js"></script>      
</body>
</html>