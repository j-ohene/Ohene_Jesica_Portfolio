<!DOCTYPE html>
<html lang="en">
  require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT * FROM projects ORDER BY title ASC');
$stmt->execute();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>About me</title>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header class="grid-con">
    <div class="mobile col-span-1 box">
        <nav>
            <div id="menuToggle">
              <input type="checkbox" />
         
              <span></span>
              <span></span>
              <span></span>
              
              <ul class="mobile col-span-4 box" id="menu-mobile">
                <li><a href="gallery.html">About</a></li>
                <li><a href="about.html" target="_blank">Gallery</a></li>
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
                  
                  <ul class="tablet l-col-span-12 box" id="menu-tablet">
                    <li><a href="gallery.html">About</a></li>
                    <li><a href="about.html" target="_blank">Gallery</a></li>
                  </ul>
                </div>
              </nav>
              </div>

            <div class="desktop l-col-span-3 box">
              <a href="index.html"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
            </div>
            <div class="xldesktop xl-col-span-3 box">
              <a href="index.html"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
            </div>
<nav class= "desktop l-col-start-5 l-col-span-6 box" >
    <ul>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
    </nav>
  <nav class="xldesktop xl-col-start-5 xl-col-span-6 box">
<ul>
  <li><a href="projects.html">Projects</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="about.html">About</a></li>>
</ul>
</nav>
<div class="mobile col-start-3 col-span-2 m-col-start-5 m-col-span-3 box">
  <a href="index.html"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
</div>
<div class="tablet m-col-start-5 m-col-span-3 box">
  <a href="index.html"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
</div>
  </header>
  <section class="grid-con">
    <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 title box">
    <h1>About Me</h1>
  </div>
    <div class="col-span-4 m-col-span-3 l-col-span-3 xl-col-span-3">
      <img id="portrait "src="img/portait.jpg" alt="portrait">
    </div>
    <div class="col-span-4 m-col-span-6 m-col-start-6 l-col-span-6 l-col-start-5 xl-col-span-6 xl-col-start-5 about box">  

          <div class="about-me">
              <p>I'm Jesica Ohene, I am a front end developer with a love for designing web interfaces. I am based in Mississauga, ontario</p>

              <h2>Education</h2>
              <p>Fanshawe College-Interactive Media Design Diploma 2023-2024</p>
              <p>York University-Bachelor of Science-2022</p>
              <h2>My Skills</h2>
              <br>
              <ul>
                  <li>HTML5</li>
                  <li>CSS3 / Sass</li>
                  <li>JavaScript (ES6+)</li>
                  <li>Responsive Web Design</li>
              </ul>
              <br><br>
              
              <h2>Software Proficiencies</h2>
              <h3>Adobe Creative Suite</h3>
              <li>Photoshop</li>
              <li>Illustrator</li>
              <li>After Effects</li>
              <li>InDesign</li>
              <li>Premiere Pro</li>
              <li>XD</li>
              <br>
              <li>Figma</li>
              <li>Maxon Cinema 4D</li>

             <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12">
              <h2>My Projects</h2>
              <p>Here are a few projects I've worked on:</p>

              <div class="mobile col-span-full box">
                <div class="gallery">
                    <img src="img/quatro-home-mobile.jpg" alt="quatro homepage">
                        <img src="img/swapi-thumb-mobile.png" alt="quatro homepage">
                      </div>
                  </div>
                  <div class="tablet m-col-span-12">
                  <div class="gallery">
              <div class= "m-col-span-6 left-side box">
                <img src="img/quatro-home-desktop.jpg" alt="quatro homepage">
                </div>
                <div class="m-col-start-6 m-col-span-6 right-side box ">
                    <img src="img/swapi-thumb.png" alt="Star Wars API">
                  </div>
                </div>
              </div>
              <div class="desktop l-col-span-full box">
                <div class="gallery">
              <div class= "l-col-span-6 left-side box">
                <img src="img/quatro-home-desktop.jpg" alt="quatro homepage">
                </div>
                <div class="l-col-start-6 l-col-span-6 right-side box ">
                    <img src="img/swapi-thumb.png" alt="Star Wars API">
                  </div>
                </div>
                </div>
              <div class="xldesktop xl-col-span-full box">
                <div class="gallery">
              <div class= "xl-col-span-6 left-side box">
                <img src="img/quatro-home-desktop.jpg" alt="quatro homepage">
                </div>
              </div>
                <div class="xl-col-start-6 xl-col-span-6 right-side box">
                    <img src="img/swapi-thumb.png" alt="Star Wars API">
                  </div>
                </div>
              <p>Interested? You can check out even more of them!</p>
              <a href="gallery.html" class="carousel-button">View more</a>
              <h2>Contact Me</h2>
              <p>If you would like to get in touch you can reach me on <a href="https://linkedin.com/jesica-ohene-3770b6243" target="_blank">LinkedIn</a>.
             or fill out this contact form and I will get back to you with in the next two business days </p>
          </div>
        </div>
        </div>
          <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 box form-con" >
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
              <section id="feedback"><p>Please fill out all sections</p></section>
            </form>
            </div>
      
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

