


<?php include "head.php";?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Doctor Portal
	</title>
</head>
<body>






    <div>
        <?php echo 'Doctor Name : ' ?>


    </div>




	<div class="container">







  <div class="row">


    <form name="controls" action="docPortal.php" method="GET">



 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  

   <a class="navbar-brand" href="#">Menu</a>

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav modifiedBar">

        <button type="submit" class="dropdown-item" name="newPatient">New</button>

        <button type="submit" class="dropdown-item" name="profile">My Profile</button>
        <button type="submit" class="dropdown-item" name="search">Search</button>

        <button type="submit" name="drugs" class="dropdown-item">Drugs</button>

        <button type="button" class="dropdown-item">Diagnose</button>

         <button type="button" class="dropdown-item">Prescribe</button>









    </div>
  </div>
</nav>








</form>



    <div class="col-xl-">
      

      <?php

      if(isset($_GET['newPatient']))
      {
        echo "<h1> New Patient : </h1";

        include 'newPatient.php';


      }
      elseif (isset($_GET['profile']))
     {
        echo "<h1>Profile</h1>";
          include 'docProfile.php';
      }
      elseif(isset($_GET['drugs']))
      {

        echo "<br>";

        echo "<br>";
        echo "<h1>All Drugs Taken by Patient</h1>";

        echo "<br>";

        include 'drugs.php';
        listAllDrugs('dId0000000');


      }

      elseif(isset($_GET['search']))
      {

        include 'search.php';


      }



       ?>




    </div>




  </div>

</div>






</body>
</html>



















<?php include "foot.php";?>