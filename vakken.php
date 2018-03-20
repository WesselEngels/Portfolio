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
      <label class="menu-label">Subjects</label>
      <?php
      require("inc/menu.php");
      require("inc/social.php");
      require("inc/footer.php");
      ?>
     </div>
     <div class="col-ld-9 right-container">
       <label class="subjects-label d-none d-md-block">My School Subjects</label>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script>
       $(document).ready(function(){
           $(".english").click(function(){
               $(".englishdetails").fadeToggle();
           });
       });
       $(document).ready(function(){
           $(".web").click(function(){
               $(".webdetails").fadeToggle();
           });
       });
       $(document).ready(function(){
           $(".csharp").click(function(){
               $(".csharpdetails").fadeToggle();
           });
       });
       </script>
       <div class="row align-items-center">
         <div class="col-md-3 ml-4 subject">
       <button class="english">English</button>
       <div class="englishdetails" style="display:none;">i learn english on my school<label class="dots">.</label> Right now i'm in the master class of english<label class="dots">.</label>
        </div>
      </div>
        <div class="col-md-3 subject">
      <button class="web">Web</button>
      <div class="webdetails" style="display:none;">i learn english on my school<label class="dots">.</label> Right now i'm in the master class of english<label class="dots">.</label></div>
       </div>
       <div class="col-md-3 subject">
     <button class="csharp">C#</button>
     <div class="csharpdetails" style="display:none;">i learn english on my school<label class="dots">.</label> Right now i'm in the master class of english<label class="dots">.</label></div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
