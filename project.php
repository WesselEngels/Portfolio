<?php
require("inc/connection.php");

if (isset($_GET['projectid'])) {
  $id = $_GET['projectid'];

  $sqlhero = "SELECT * FROM projects WHERE id = '". $id. "'";

}
else {
  $sqlhero = "SELECT * FROM projects WHERE id=0";
}

$result1 = $conn->query($sqlhero);
//description bij de hero keuze, de gene die het speelt erbij zetten
?>
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
       <?php
       if ($result1->num_rows > 0) {
           while ($row = $result1->fetch_assoc()) {
             echo "<a href='project.php'><button>Back</button></a>";
             echo $row['name'];
           }
         }
        ?>
       <label class="animated fadeIn d-sm-none d-md-block project-label">My Projects</label>
       <?php
       if (!isset($_GET['projectid'])) {


        ?>
       <h2 class="animated fadeIn web-label">Web Development</h2>
       <div class="animated fadeIn row">

       <div class="col-md-4">
         <div class="card mb-3">
           <div class="card-body box-size">

             <div class="hovereffect">
        <img class="img-responsive" src="img/radiogaga.jpg">
        <div class="overlay">
           <h2>Radio GaGa</h2>
           <a class="info" href="project.php?projectid=1">More Info</a>
        </div>
    </div>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="card mb-3">
           <div class="card-body box-size">
             <div class="hovereffect">
        <img class="img-responsive" src="img/beershop.jpg">
        <div class="overlay">
           <h2>Beer Shop</h2>
           <a class="info" href="project.php?projectid=2">More Info</a>
        </div>
    </div>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="card mb-3">
           <div class="card-body box-size">

             <div class="hovereffect">
        <img class="img-responsive" src="img/serie.jpg">
        <div class="overlay">
           <h2>IMDB 2.0</h2>
           <a class="info" href="project.php?projectid=3">More Info</a>
        </div>
    </div>
    </div>
</div>

     </div>



 </div>
 <h2 class="animated fadeIn sharp-label">C#</h2>
 <div class="animated fadeIn row">
   <div class="col-md-4">
     <div class="card mb-4">
       <div class="card-body box-size">

         <div class="hovereffect">
    <img class="img-responsive" src="img/dragrace.jpg">
    <div class="overlay">
       <h2>Drag Race</h2>
       <a class="info" href="project.php?projectid=4">More Info</a>
    </div>
</div>
</div>
</div>

 </div>
 <div class="col-md-4">
   <div class="card mb-4">
     <div class="card-body box-size">

       <div class="hovereffect">
  <img class="img-responsive" src="img/vault1.jpg">
  <div class="overlay">
     <h2>Vault</h2>
     <a class="info" href="project.php?projectid=5">More Info</a>
  </div>
</div>
</div>
</div>

</div>
    <div class="col-md-4">
      <div class="card mb-4">
        <div class="card-body box-size">

          <div class="hovereffect">
     <img class="img-responsive" src="img/mystery1.jpg">
     <div class="overlay">
        <h2>Mystery Number</h2>
        <a class="info" href="project.php?projectid=6">More Info</a>
     </div>
    </div>
    </div>
    </div>

    </div>
    <?php
  }
  else {
    $id = $_GET['projectid'];

    $sqlhero = "SELECT * FROM projects WHERE id = '". $id. "'";
  }
     ?>
     </div>
           </div>
         </div>
       </div>
     </div>
    </div>

  </body>
</html>
