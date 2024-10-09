<!DOCTYPE html>
<?php
require_once('includes/connect.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Jesica Ohene</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script defer type="module" src="js/main.js"></script>
</head>
<body data-page="home">
  <header class="grid-con">
    <div class="mobile col-span-1 box">
        <nav>
            <div id="menuToggle">
              <input type="checkbox" />
         
              <span></span>
              <span></span>
              <span></span>
              
              <ul class="mobile col-span-4 box" id="menu-mobile">
                <li><a href="gallery.php">Projects</a></li>
                <li><a href="about.php" target="_blank">About</a></li>
              </ul>
            </div>
          </nav>
          </div>
        <div class="tablet m-col-span-2 m-col-start-1 box">
            <nav>
                <div id="t-menuToggle">
                  <input type="checkbox"/>
             
                  <span></span>
                  <span></span>
                  <span></span>
                  
                  <ul class="tablet m-col-span-12 box" id="menu-tablet">
                    <li><a href="gallery.php">Projects</a></li>
                    <li><a href="about.php" target="_blank">About</a></li>
                  </ul>
                </div>
              </nav>
              </div>

            <div class="desktop l-col-span-3 box">
              <a href="index.php"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
            </div>
            <div class="xldesktop xl-col-span-3 box">
              <a href="index.php"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
            </div>
<nav class= "desktop l-col-start-9 l-col-span-4 box" >
    <ul>
      <li><a href="gallery.php">Projects</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    </nav>
  <nav class="xldesktop xl-col-start-9 xl-col-span-4 box">
<ul>
  <li><a href="gallery.php">Projects</a></li>
  <li><a href="about.php">About</a></li>
</ul>
</nav>
<div class="mobile col-start-3 col-span-2 m-col-start-5 m-col-span-3 box">
  <a href="index.php"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
</div>
<div class="tablet m-col-start-5 m-col-span-3 box">
  <a href="index.php"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
</div>
  </header>
  <section class="grid-con">
    <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 title box">
    <h1>About Me</h1>
  </div>
    <div class="col-span-4 m-col-span-12  l-col-span-3 xl-col-span-3">
      <img id="portrait" src="img/OheneJ-2.jpg" alt="portrait">
      <div class="col-span-4 m-col-span-12  l-col-span-3 xl-col-span-3">
      <a class="resume-button" href="assets/Ohene_Jesica-Resume.pdf" download>Download Resume</a>
      </div>

    </div>
    <div class="col-span-4 m-col-span-12 l-col-span-6 l-col-start-6 xl-col-span-6 xl-col-start-5 about box">  

          <div class="about-me">
              <p>I'm Jesica Ohene, I am a front end developer with a love for designing web interfaces. I am based in Mississauga, Ontario.</p>
              <p>Beyond my passion for front-end development and UI design, I find joy in painting, crochet,  baking, and craftung in general. These hobbies not only fuel my creativity but also instill in me a deep appreciation for attention to detail and the satisfaction of bringing ideas to life. If you're interested in collaborating on a project or simply want to chat about design, development, or anything under the sun, I'd love to hear from you. Feel free to reach out and let's create something amazing together!</p>
              <br><br>
              <h2>Education</h2>
              <h3>Fanshawe College - Interactive Media Design - Diploma 2024</h3>
              <h3>York University - Kinesiology and Health Science Hons. Bsc - 2022</h3>
              <br><br>
              <h2>My Skills</h2>
              <br>
              <ul>
                  <li><img src="img/icons8-html5.svg" alt="html5" ></li>
                  <li><img src="img/icons8-css3.svg" alt="css3" ></li>
                  <li><img src="img/icons8-javascript.svg" alt="JavaScript" ></li>
                  <li><img src="img/icons8-react-js.svg" alt="React" ></li>
                  <li><img src="img/icons8-sass.svg" alt="Sass/scss" ></li>
                  <li><img src="img/icons8-vuejs-48.png" alt="Vue.js" ></li>
               
              </ul>

              <br><br>
              
              <h2>Software Proficiencies</h2>
              <h3>Adobe Creative Suite</h3>

              <ul>
              <li>Photoshop</li>
              <li>Illustrator</li>
              <li>After Effects</li>
              <li>InDesign</li>
              <li>Adobe XD</li>
              <li>Figma</li>
</ul>
          </div>
          
        
      <br><br>
        <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 title box">
          <br><br>
              <h2>Contact Me</h2>
              <p>If you would like to get in touch, you can reach me on <a href="https://linkedin.com/jesica-ohene-3770b6243" target="_blank">LinkedIn</a>.
             or fill out this contact form and I will get back to you with in the next two business days </p>
          </div>
    
          <div class="col-span-4 m-col-span-12 l-col-start-4 l-col-end-10 xl-col-span-12 box form-con" >
            <form id="contact-form">
              <label for="fname">First Name</label>
              <input type="text" placeholder="First Name" id="fname">
              <br>
              <label for="lname">Last Name</label>
              <input type="text" placeholder="Last Name" id="lname">
              <br>
              <label for="email">Email Address</label>
              <input type="email" placeholder="example@email.com" id="email">
              <br>
              <input type="text" placeholder="Type your message" id="message">
              <input id="submit" type="submit" value="Send">
            </form>
            </div>
            </div>
      </section>
      <footer class="grid-con">
        <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 box">
        <ul class="footer-links">
            <li><a href="https://www.linkedin.com/in/jesica-ohene-3770b6243/">Linkedin</a></li>
            <li><a href="https://github.com/j-ohene">GitHub</a></li>
        </ul>
        </div>
</footer>
</body>
</html>

