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
      <label class="menu-label">Projects</label>
      <?php
      require("inc/menu.php");
      require("inc/social.php");
      require("inc/footer.php");
      ?>
     </div>
     <div class="col-ld-9 right-container">
       <label class="project-label">My Projects</label>
       <h2 class="web-label">Web Development</h2>
       <div class="row">

       <div class="col-md-4">
         <div class="card mb-3">
           <div class="card-body box-size">

             <div class="hovereffect">
        <img class="img-responsive" src="img/radiogaga.jpg" alt="">
        <div class="overlay">
           <h2>Radio GaGa</h2>
           <a class="info" href="#">More Info</a>
        </div>
    </div>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="card mb-3">
           <div class="card-body box-size">
             <div class="hovereffect">
        <img class="img-responsive" src="img/beershop.jpg" alt="">
        <div class="overlay">
           <h2>Beer Shop</h2>
           <a class="info" href="#">More Info</a>
        </div>
    </div>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="card mb-3">
           <div class="card-body box-size">

             <div class="hovereffect">
        <img class="img-responsive" src="img/serie.jpg" alt="">
        <div class="overlay">
           <h2>IMDB 2.0</h2>
           <a class="info" href="#">More Info</a>
        </div>
    </div>
    </div>
</div>

     </div>
 </div>
 <h2 class="sharp-label">C#</h2>
 <div class="row">
   <div class="col-md-4">
     <div class="card mb-4">
       <div class="card-body box-size">

         <div class="hovereffect">
    <img class="img-responsive" src="img/dragrace.jpg" alt="">
    <div class="overlay">
       <h2>Drag Race</h2>
       <a class="info" href="#">More Info</a>
    </div>
</div>
</div>
</div>

 </div>
 <div class="col-md-4">
   <div class="card mb-4">
     <div class="card-body box-size">

       <div class="hovereffect">
  <img class="img-responsive" src="img/vault1.jpg" alt="">
  <div class="overlay">
     <h2>Vault</h2>
     <a class="info" href="#">More Info</a>
  </div>
</div>
</div>
</div>

</div>
    <div class="col-md-4">
      <div class="card mb-4">
        <div class="card-body box-size">

          <div class="hovereffect">
     <img class="img-responsive" src="img/mystery1.jpg" alt="">
     <div class="overlay">
        <h2>Mystery Number</h2>
        <a class="info" href="#">More Info</a>
     </div>
    </div>
    </div>
    </div>

    </div>
     </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </body>
</html>
