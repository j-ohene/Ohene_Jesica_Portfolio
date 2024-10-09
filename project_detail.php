<!DOCTYPE html>
<?php
require_once('includes/connect.php');
$query = 'SELECT GROUP_CONCAT(file_name) AS image, description, date_created, collaborators, title FROM projects, media WHERE projects.id = work_id AND projects.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$image = explode(",", $row['image']);
$stmt = null;
?>
<html lang="en">
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
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js"></script>
        <script defer src="js/main.js"></script>
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
                <li><a href="projects.html">Projects</a></li>
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
                    <li><a href="projects.html">Projects</a></li>
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
        <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12">
            <h1 class="case-study-title"> <?php echo $row['title']; ?></h1>
        </div>

        <div class="collaborators col-start-3 col-span-2  m-col-span-full l-col-span-full  xl-col-span-full">
        <p>Collaborators:</p>
            <p><?php echo $row['date_created']; ?></p>
            <p><?php echo $row['collaborators']; ?></p>
            <p><?php echo $row['description']; ?></p>
            <section class="gallery">
                <?php 
                for($i = 0; $i < count($image); $i++) {
                    echo '<img src="img/'.$image[$i].'" alt="Project Images">';
                }                
                ?>     
            </section>

        </div>
    </section>
</section>
   
  

    <footer class="grid-con">
        <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 box">
        <footer class="grid-con">
            <div class="col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12 box">
            <ul class="footer-links">
                <li><a href="https://www.linkedin.com/in/jesica-ohene-3770b6243/">Linkedin</a></li>
                <li><a href="https://github.com/j-ohene">GitHub</a></li>
            </ul>
            </div>
    </footer>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js"></script>
        <script src="js/main.js"></script>
    </footer>
    </body>
    </html>
    &copy Jesica Ohene
    </body>
    </html>