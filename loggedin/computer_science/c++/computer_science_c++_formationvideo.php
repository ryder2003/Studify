<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../java/accordionstyle.css">
<link rel="stylesheet" href="../../../style.css">
<title>Studify</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../../../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="../../profile.php" name="profile">Profile</a>
               <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;font-size:bold;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Course C++</li>

  </ol>
</nav>
<!-- the actual content of this course ( Cours C++ )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 : Introduction
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/S3nx34WFXjI?si=ShPCrAzUEUuIG_Te">&#10170  C++ tutorial for Beginners</a><br>
        <a href="https://youtu.be/4psGUiKacPQ?si=OA_960MhSD722Pq4">&#10170  Variables and Basic data types</a><br>
        <a href="https://youtu.be/MwQEaCsS6UM?si=PHIlal9BXKEU0qGA">&#10170  What is a const</a><br>
        <a href="https://youtu.be/2lcIKzFHjSM?si=BBepxFWiNjp4FdkL">&#10170  What are namespaces</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 : Control Statements
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/kO3eEn_hgQc?si=e0jm9UU8Um0KrKA7">&#10170  If-else statements</a><br>
        <a href="https://youtu.be/Bx9b12FCF5o?si=nQDU3BT7QCZPdSBy">&#10170  Switch statements</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : Loop Statements
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/gP22X_ykkxI?si=nx1eoeCa-NJR-HAP">&#10170  For loops</a><br>
        <a href="https://youtu.be/XCxHhfJq1LU?si=VLH5mP0eUF2BJt0e">&#10170  While loops</a><br>
        <a href="https://youtu.be/3xcXse7DK5s?si=Pez5CPr39DXlJbYQ">&#10170  do while loops</a><br>
        <a href="https://youtu.be/TdtFtPHeyZE?si=VQLSpYkp698comTm">&#10170  Nested loops</a><br>
        </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Arrays
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/QFrJQq6Iox8?si=wOgWvrI3rxIBJ1Y9">&#10170  Intro to Arrays</a><br>
        <a href="https://youtu.be/a6V4QQs5m3E?si=2cKBMGDjEQAE_yt8">&#10170  Searching array element</a><br>
        <a href="https://youtu.be/kOEOqehNCQg?si=kPRKQlAjKkIEX18r">&#10170  Sorting an Array</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
