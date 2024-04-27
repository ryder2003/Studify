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
<<<<<<< Updated upstream
<!-- the actual content of this course (C++ Programming)
     List of Chapters-->

  <div class="accordion" id="accordionExample">
	
=======

  <div class="accordion" id="accordionExample">

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        <a href="actualvideocontent_formationvideo?video=1">&#10170  C++ tutorial for Beginners</a><br>
        <a href="actualvideocontent_formationvideo?video=2">&#10170  Variables and Basic data types</a><br>
        <a href="actualvideocontent_formationvideo?video=3">&#10170  What is a const</a><br>
        <a href="actualvideocontent_formationvideo?video=4">&#10170  What are namespaces</a><br>
      </div>
    </div>
  </div>
  
=======
        <a href="actualvideocontent_formationvideo?video=">&#10170  Introduction to C++</a><br>
        <a href="actualvideocontent_formationvideo?video=">&#10170  Basic Structure of C++</a><br>
        <a href="actualvideocontent_formationvideo?video=">&#10170  Variables and Comments</a><br>
        <a href="actualvideocontent_formationvideo?video=">&#10170  Variable Scope and Data Types</a><br>
      </div>
    </div>
  </div>

>>>>>>> Stashed changes
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<<<<<<< Updated upstream
          Chapter 2 : Loop Statements
=======
          Chapter 2 : Operators, Loops and more
>>>>>>> Stashed changes
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_formationvideo?video=5">&#10170  For Loops</a><br>
        <a href="actualvideocontent_formationvideo?video=6">&#10170  While Loops</a><br>
        <a href="actualvideocontent_formationvideo?video=7">&#10170  do while loops</a><br>
        <a href="actualvideocontent_formationvideo?video=8">&#10170  Nested loops</a><br>
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
<<<<<<< Updated upstream
          Chapter 3 : Conditional Statements
=======
          Chapter 3 : Pointers
>>>>>>> Stashed changes
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
<<<<<<< Updated upstream
        
      <a href="actualvideocontent_formationvideo?video=9">&#10170  Conditional Statements</a><br>
        </div>
    </div>
  </div>

=======
        <a href="actualvideocontent_formationvideo?video=">&#10170  Pointers in C++</a><br>
        </div>
    </div>
  </div>
  
>>>>>>> Stashed changes
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Functions in C++
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
<<<<<<< Updated upstream
        <a href="actualvideocontent_formationvideo?video=10">&#10170  Intro to Arrays</a><br>
        <a href="actualvideocontent_formationvideo?video=11">&#10170  Searching array element</a><br>
        <a href="actualvideocontent_formationvideo?video=12">&#10170  Sorting an Array</a><br>
=======
        <a href="actualvideocontent_formationvideo?video=">&#10170  Functions and Function Prototypes</a><br>
        <a href="actualvideocontent_formationvideo?video=">&#10170  Call by Value and Call by Reference</a><br>
        <a href="actualvideocontent_formationvideo?video=">&#10170  Inline Functions</a><br>
>>>>>>> Stashed changes
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
