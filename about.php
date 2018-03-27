<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/favicon.ico" type="img/favicon.ico">
    <meta charset="utf-8">
    <title>Portfolio</title>
  </head>


  <body>

    <div class="container">
      <div class="col-ld-3 left-container">
      <label class="menu-label">Home</label>
      <?php
      require("inc/menu.php");
      require("inc/social.php");
      require("inc/footer.php");
      ?>
     </div>
     <div class="col-ld-9 right-container">
       <label class="animated fadeIn label-name">My name is Wessel Engels</label>
       <label class="animated fadeIn undertitle">Web Developer</label>
       <img class="animated fadeIn profilepicture" src="img/picture.jpg">
       <p class="animated fadeIn first-paragraph">My name is Wessel Engels and i live in a small village called Oploo<label style="color:white;margin-bottom:0;">. </label> I'm currently studying Application Designer in Helmond<label style="color:white;margin-bottom:0;">. </label></p>
          <p class="animated fadeIn second-paragraph">I'm learning to become a proffesionel web developer<label class="dots">.</label></p>
     </div>
   </div>

     </body>
   </html>
