<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT * FROM projects ORDER BY title ASC');
$stmt->execute();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Jesica Ohene</title>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
    <script defer type="module" src="js/main.js"></script>
</head>
<body data-page="gallery">
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
                <li><a href="about.html">About</a></li>
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
                  
                  <ul class="tablet m-col-span-12 box" id="menu-tablet">
                    <li><a href="gallery.html">Projects</a></li>
                    <li><a href="about.html">About</a></li>
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
      <li><a href="gallery.html">Projects</a></li>
      <li><a href="projects.html">Gallery</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
    </nav>
  <nav class="xldesktop xl-col-start-5 xl-col-span-6 box">
<ul>
  <li><a href="gallery.html">Projects</a></li>
  <li><a href="projects.html">Gallery</a></li>
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
  <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      ?>
  <section class="grid-con">
    <div class="col-span-full m-col-span-full l-col-span-full xl-col-span-full box">
      <div class="front-end-background" id="front-end">
        <img src="img/gear.svg" alt="gear" class="gear" id="gear1">
        <h2> Front End Development</h2>
        <img src="img/gear.svg" alt="gear" class="gear" id="gear2">
      </div>
        </div>

        <div class="mobile col-span-full box">
           <div class="gallery">
           <div class="textcont">
            <?php
           echo '<img src="img/'.$row['image']'" alt="quatro homepage">'
              echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
            </div>
            echo '<div class="textcont">'
            echo '<img src="img/'.$row['image']'" alt="alto earbuds thumbnail">'
            echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
            </div>
      </div>
      </div>
      <div class="tablet m-col-span-full box">
      
      <div class="gallery">
        <div class="textcont">
           echo '<img src="img/'.$row['image']'" alt="quatro homepage">'
              echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
            </div>
            <div class="textcont">
            echo '<img src="img/'.$row['image']'" alt="alto earbuds thumbnail">'
            echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
    </div>
    <div class="textcont">
    echo '<img src="img/'.$row['image']'" alt="music mixer">'
    echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
    </div>
    <div class="textcont">
    echo '<img src="img/'.$row['image']'" alt="SWAPI Movie Lookup">'
    echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
    </div>
      </div>
      </div>
      
      <div class="desktop l-col-span-full box">
        <div class="gallery">
      <div class= "l-col-span-6 left-side box">
        <div class="textcont">
        echo '<img src="img/'.$row['image']'" alt="quatro homepage">'
        echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
        </div>
        <div class="textcont">
        echo '<img src="img/'.$row['image']'" alt="music mixer">'
    echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
      </div>
      </div>
        <div class="l-col-start-6 l-col-span-6 right-side box ">
          <div class="textcont">
          echo '<img src="img/'.$row['image']'" alt="alto earbuds thumbnail">'
          echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
          </div>
          <div class="textcont">
          echo '<img src="img/'.$row['image']'" alt="SWAPI Movie Lookup">'
          echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
          </div>
        </div>
      </div>
      </div>
      
      <div class="xldesktop xl-col-span-full box">
        <div class="gallery">
      <div class= "xl-col-span-6 left-side box">
        <div class="textcont">
        echo '<img src="img/'.$row['image']'" alt="quatro homepage">'
        echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
        </div>
        <div class="textcont">
        echo '<img src="img/'.$row['image']'" alt="music mixer">'
    echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
      </div>
      </div>
        <div class="xl-col-start-6 xl-col-span-6 right-side box ">
          <div class="textcont">
          echo '<img src="img/'.$row['image']'" alt="alto earbuds thumbnail">'
          echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
          </div>
          <div class="textcont">
          echo '<img src="img/'.$row['image']'" alt="SWAPI Movie Lookup">'
          echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
          </div>
        </div>
      </div>
      </div>
<div class="col-span-full m-col-span-full l-col-span-full xl-col-span-full box">

 
          <div class="mobile col-span-full box">
            <div class="gallery">
              <div class="textcont">
              echo '<img src="img/'.$row['image']'" alt="Health Canada mini ad campaign (print)">'
              echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
            </div>
            <div class="textcont">
            echo '<img src="img/'.$row['image']'" alt="elin cosmetics print ad">'
            echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
          </div>
          </div>
          </div>
          
          <div class="tablet m-col-span-full box">

            <div class="gallery">
              <div class="textcont">
              echo '<img src="img/'.$row['image']'" alt="Health Canada mini ad Campaign (print) ">'
              echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
            </div>
            <div class="textcont">
            echo '<img src="img/'.$row['image']'" alt="elin cosmetics print ad">'
            echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
            </div>
          
            </div>
            </div>

            <div class="desktop l-col-span-full box">
              <div class="gallery">
              <div class= "l-col-span-6 left-side box">
                <div class="textcont">
                echo '<img src="img/'.$row['image']'" alt="Health Canada mini ad Campaign (print) ">'
                echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
              </div>
              </div>
              <div class="l-col-start-6 l-col-span-6 right-side box">
                <div class="textcont">
                echo '<img src="img/'.$row['image']'" alt="elin cosmetics print ad">'
            echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
              </div>
              </div>
              
              </div>
              </div>

              <div class="xldesktop xl-col-span-full box">
                <div class="gallery">
                <div class= "xl-col-span-6 left-side box">
                  <div class="textcont">
                  echo '<img src="img/'.$row['image']'" alt="Health Canada mini ad Campaign (print) ">'
                  echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
                </div>
                </div>
                <div class="xl-col-start-6 xl-col-span-6 right-side box">
                  <div class="textcont">
                  echo '<img src="img/'.$row['image']'" alt="elin cosmetics print ad">'
              echo'<h3 class="thumb-text"'.$row['title']'.</h3>'
                </div>
                </div>
                
                </div>
                </div>

</section>

    }
    $stmt = null;
    ?>
    <footer class="grid-con">
            <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 box">
            <ul class="footer-links">
                <li><a href="https://www.linkedin.com/in/jesica-ohene-3770b6243/">Linkedin</a></li>
                <li><a href="https://github.com/j-ohene">GitHub</a></li>
            </ul>
            </div>
    </footer>

&copy Jesica Ohene
</body>
</html>