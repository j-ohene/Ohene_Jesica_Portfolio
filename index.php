<!DOCTYPE html>
<html lang="en">
require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT * FROM projects ORDER BY title ASC');
$stmt->execute();
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Jesica Ohene</title>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li><a href="gallery.html">Projects</a></li>
                <li><a href="about.html" target="_blank">About</a></li>
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
                    <li><a href="gallery.html">Projects</a></li>
                    <li><a href="about.html" target="_blank">About</a></li>
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
<nav class= "desktop l-col-start-9 l-col-span-4 box" >
    <ul>
      <li><a href="gallery.html">Projects</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
    </nav>
  <nav class="xldesktop xl-col-start-9 xl-col-span-4 box">
<ul>
  <li><a href="gallery.html">Projects</a></li>
  <li><a href="about.html">About</a></li>
</ul>
</nav>
<div class="mobile col-start-3 col-span-2 m-col-start-5 m-col-span-3 box">
  <a href="index.html"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
</div>
<div class="tablet m-col-start-5 m-col-span-3 box">
  <a href="index.html"><img src="img/logo-full.svg" alt="logo" class="logo"></a>
</div>
  </header>
    <section class="grid-con hero">
      <div class="col-start-1 col-span-4 m-col-start-1 m-col-span-7 l-col-start-1 l-col-span-7 xl-col-start-1 xl-col-span-7 box">
    <h1 id="intro"> Hello my name is Jesica </h1>
    <p> I am a front end developer with a background in art and design</p>
  </div>
  <div class ="col-span-4 m-col-span-4 m-col-start-8 l-col-span-4 l-col-start-8 xl-col-span-4 xl-col-start-8 box">
    <img src="img/portrait.png">
<div class="col-start-2 col-span-1 m-col-start-5 m-col-span-3 l-col-start-5 l-col-span-3 xl-col-start-5 xl-col-span-3 button box" >
    <a href="#"> A bit more about me</a>
  </div>
  </div>
</section>

<section  class="grid-con">
  <h2 class="hidden">Video</h2>
  <div class="col-span-4 m-col-span-10 m-col-start-2 l-col-span-10 l-col-start-2 xl-col-span-10 xl-col-start-2 box" id="player-container">
    <video controls poster="img/video-thumbnail.png">
      <source src="video/Ohene_JDemoReel.mp4" type="video/mp4">
      <p>It seems you are using a browser that no longer supports video playback. Please use a different browser.</p>
  </video>
  <div class="video-controls hidden" id="video-controls">
      <button id="play-button">
          <i class="fa fa-play-circle-o"></i>
      </button>
      <button id="pause-button">
          <i class="fa fa-pause-circle-o"></i>
      </button>
      <button id="stop-button">
          <i class="fa fa-stop-circle-o"></i>
      </button>
      <i class="fa fa-volume-up"></i>
      <input type="range" id="change-vol" step="0.05" min="0" max="1" value="1">
      <button id="full-screen">
          <i class="fa fa-arrows-alt"></i>
      </button>
    </div>
    </div>
    </section>

<section class="grid-con cards">
  <h2 class="hidden">cards/carousel</h2>
  <div  class="col-span-4 m-col-span-10 m-col-start-2 l-col-span-10 l-col-start-2 xl-col-span-10 xl-col-start-2 box">
    
        <h2 class="heading">I like to dabble in a few things</h2>
        <div>
          <div class="mobile col-span-4 box">
              <!--!Front end--->
              <div class="carousel-item front-end">
                <div class="carousel-content">
                  <h3 class="carousel-subtitle">Front end Development
                  </h3>
                  <h2 class="carousel-title">Quatro Website</h2>
                  <p class="carousel-paragraph">Tasked with the role of rebranding a now-defunct brand by designing and creating a dynamic webpage.</p>
                  <img src="img/hero-shop-mobile.png" alt="quatro shop hero">
                  <a href="gallery.html#front-end" class="carousel-button">See more</a>
                </div>
                
              </div>
              
              <!-- motion -->
              <div class="carousel-item motion">
                <div class="carousel-content">
                  <h3 class="carousel-subtitle">Motion Design</h3>
                  <h2 class="carousel-title">Introducing Alto earbuds</h2>
                  <p class="carousel-paragraph">Wireless earbuds with a long battery life. Users can control how they listen to music without their device in their hands </p>
                  <img src="img/altoearbuds.gif" alt="earbud gif">
                  <a href="gallery.html#motion" class="carousel-button">See more</a>
                </div>
              </div>
              
               <!-- Graphic -->
               <div class="carousel-item graphic">
                <div class="carousel-content">
                  <h3 class="carousel-subtitle">Graphic Design</h3>
                  <h2 class="carousel-title">Elin Cosmetics</h2>
                  <p class="carousel-paragraph">Created the branding for a cosmetics brand</p>
                  <img src="img/magazinne-pic-moblie.jpg" alt="elin ad">
                  <a href="gallery.html#graphic" class="carousel-button">View more</a>
                </div>
              </div>
            </div>
          </div>
         <!--tablet-->
                <div class="tablet m-col-span-12 box">
                  <div class="carousel">
                    <!--!Front end--->
                    
                    <div class="carousel-item front-end">
                      <div class="carousel-content">
                        <h3 class="carousel-subtitle">Front end Development
                        </h3>
                        <h2 class="carousel-title">Quatro Website</h2>
                        <p class="carousel-paragraph">Tasked with the role of rebranding a now-defunct brand by designing and creating a dynamic webpage.</p>
                        <img src="img/hero-shop-desktop.png" alt="quatro shop hero">
                        <a href="gallery.html#front-end" class="carousel-button">See more</a>
                      </div>
                    </div>
                    
                    <!-- motion -->
                    <div class="carousel-item motion">
                      <div class="carousel-content">
                        <h3 class="carousel-subtitle">Motion Design</h3>
                        <h2 class="carousel-title">Introducing Alto earbuds</h2>
                        <p class="carousel-paragraph">Wireless earbuds with a long battery life. Users can control how they listen to music without their device in their hands </p>
                        <a href="gallery.html#motion" class="carousel-button">See more</a>
                      </div>
                      <img src="img/altoearbuds.gif" alt="earbud gif">
                    </div>
                    
                     <!-- Graphic -->
                     <div class="carousel-item graphic">
                      <div class="carousel-content">
                        <h3 class="carousel-subtitle">Graphic Design</h3>
                        <h2 class="carousel-title">Elin Cosmetics</h2>
                        <p class="carousel-paragraph">Created the branding for a cosmetics brand</p>
                        <a href="projects.html/#graphic" class="carousel-button">View more</a>
                      </div>
                      <img src="img/magazinne-pic-copy.jpg" alt="elin ad">
                    </div>
                   
                  </div>
                </div>

                <!--desktop-->
                
                        <div class="desktop l-col-span-12 box">
                          <div class="carousel">
                            <!--Front end-->
                            
                            <div class="carousel-item front-end">
                              <div class="carousel-content">
                                <h3 class="carousel-subtitle">Front end Development
                                </h3>
                                <h2 class="carousel-title">Quatro Website</h2>
                                <p class="carousel-paragraph">Tasked with the role of rebranding a now-defunct brand by designing and creating a dynamic webpage.</p>
                                <a href="gallery.html#front-end" class="carousel-button">See more</a>
                              
                              <img src="img/hero-shop-desktop.png" alt="quatro shop hero">
                            </div>
                            
                            </div>
                            
                            <!-- motion -->
                            <div class="carousel-item motion">
                              <div class="carousel-content">
                                <h3 class="carousel-subtitle">Motion Design</h3>
                                <h2 class="carousel-title">Introducing Alto earbuds</h2>
                                <p class="carousel-paragraph">Wireless earbuds with a long battery life. Users can control how they listen to music without their device in their hands </p>
                                <a href="gallery.html#motion" class="carousel-button">See more</a>
                             
                              <img src="img/altoearbuds.gif" alt="earbud gif">
                            </div>
                            </div>
                            
                             <!-- Graphic -->
                             <div class="carousel-item graphic">
                              <div class="carousel-content">
                                <h3 class="carousel-subtitle">Graphic Design</h3>
                                <h2 class="carousel-title">Elin Cosmetics</h2>
                                <p class="carousel-paragraph">Created the branding for a cosmetics brand</p>
                                <a href="gallery.html#graphic" class="carousel-button">View more</a>
                              <img src="img/magazinne-pic-copy.jpg" alt="elin ad">
                            </div>
                            </div>
                            
                          </div>
                        </div>
                        <!--xldesktop-->
          <div class="xldesktop xl-col-span-12 box">
            <div class="carousel">
              <!--!Front end--->
              
              <div class="carousel-item front-end">
                <div class="carousel-content">
                  <h3 class="carousel-subtitle">Front end Development
                  </h3>
                  <h2 class="carousel-title">Quatro Website</h2>
                  <p class="carousel-paragraph">Tasked with the role of rebranding a now-defunct brand by designing and creating a dynamic webpage.</p>
                  <a class="carousel-button" href="gallery.html#front-end" >See more</a>
                <img src="img/hero-shop-desktop.png" alt="quatro shop hero">
              </div>
              </div>
              
              <!-- motion -->
              <div class="carousel-item motion">
                <div class="carousel-content">
                  <h3 class="carousel-subtitle">Motion Design</h3>
                  <h2 class="carousel-title">Introducing Alto earbuds</h2>
                  <p class="carousel-paragraph">Wireless earbuds with a long battery life. Users can control how they listen to music without their device in their hands </p>
                  <a href="gallery.html#motion" class="carousel-button">See more</a>
                
                <img src="img/altoearbuds.gif" alt="earbud gif">
                </div>
              </div>
              
               <!-- Graphic -->
               <div class="carousel-item graphic">
                <div class="carousel-content">
                  <h3 class="carousel-subtitle">Graphic Design</h3>
                  <h2 class="carousel-title">Elin Cosmetics</h2>
                  <p class="carousel-paragraph">Created the branding for a cosmetics brand</p>
                  <a href="gallery.html#graphic" class="carousel-button">View more</a>
                
                <img src="/img/magazinne-pic-copy.jpg" alt="elin ad">
                </div>
              </div>
            </div>
          </div>
</div>


 <div class="button col-start-2 col-span-2 m-col-start-5 m-col-span-4 l-col-start-6 l-col-span-3 xl-col-start-6 xl-col-span-2 box">
 <a href="gallery.html"> See more projects</a></div>
</section>

 <section class="grid-con">
  <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 form-intro box">
  <h2>This can be the beginning of something amazing </h2>
  <p>If you would like to get in touch please fill out the form below </p>
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
			</section>	
        <footer class="grid-con">
            <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 box">
            <ul class="footer-links">
                <li><a href="https://www.linkedin.com/in/jesica-ohene-3770b6243/">Linkedin</a></li>
                <li><a href="https://github.com/j-ohene">GitHub</a></li>
            </ul>
            </div>
            
   
            <script src="js/main.js"></script>
    </footer>
</body>
</html>