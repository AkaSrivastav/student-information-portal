<?php
session_start();
?>

<html>
<head>
  <title>SIP - Gallery</title>
  <link rel = "stylesheet"
  type = "text/css"
  href = "/css/gallery.css" />
  <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
</head>
<body>
  <header>
    <ul>
      <?php

      if(isset($_SESSION['email']))
      {
        echo "<li><a href='home.php'><i class='fa fa-home'></i> Home</a></li>";        

      }
      ?>
      <li>
        <a href='about.php'><i class="fa fa-info"></i> About Us</a>
      </li>
      <li>
        <a class='active' href='gallery.php'><i class="fa fa-picture-o"></i> Gallery</a>
      </li>
      <li>
        <a href='notice.php'><i class="fa fa-sticky-note"></i> Notice Board</a>
      </li>
      <li>
        <a href='contact.php'><i class="fa fa-phone"></i> Contact Us</a>
      </li>

      <?php

      if(!isset($_SESSION['email']))
      {
        echo "<li style='float: right;'><a href='index.php'><i class='fa fa-sign-in'></i> Sign In / Sign Up</a></li>";        

      }
      else
      {
        echo "<li style='float: right;'><a href='logout.php'><i class='fa fa-sign-in'></i> Sign Out</a></li><li style='float: right;'><a href='profile.php'><i class='fa fa-user'></i> My Profile</a></li>";
      }  
      ?>
    </ul>
  </header>
  <!--  <h2 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px; margin-bottom: 100px">Gallery Page</h2> -->

  <div class="m-p-g">
    <div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
      <img src="/images/1.jpg" data-full="/images/1.jpg" class="m-p-g__thumbs-img" />
      <img src="/images/2.jpg" data-full="/images/2.jpg" class="m-p-g__thumbs-img" />
      <img src="/images/3.jpg" data-full="/images/3.jpg" class="m-p-g__thumbs-img" />
      <img src="/images/5.png" data-full="/images/5.png" class="m-p-g__thumbs-img" />
      <img src="http://unsplash.it/600/350?image=815" data-full="http://unsplash.it/1200/700?image=815" class="m-p-g__thumbs-img" />
      <img src="http://unsplash.it/560/500?image=677" data-full="http://unsplash.it/1120/1000?image=677" class="m-p-g__thumbs-img" />
      <img src="http://unsplash.it/670/410?image=401" data-full="http://unsplash.it/1340/820?image=401" class="m-p-g__thumbs-img" />
      <img src="http://unsplash.it/620/340?image=623" data-full="http://unsplash.it/1240/680?image=623" class="m-p-g__thumbs-img" />
      <img src="http://unsplash.it/790/390?image=339" data-full="http://unsplash.it/1580/780?image=339" class="m-p-g__thumbs-img" />
    </div>

    <div class="m-p-g__fullscreen"></div>
  </div>

  <script>
    var elem = document.querySelector('.m-p-g');

    document.addEventListener('DOMContentLoaded', function() {
      var gallery = new MaterialPhotoGallery(elem);
    });
  </script>

  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>