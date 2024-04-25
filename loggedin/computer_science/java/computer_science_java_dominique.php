<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../../../style.css">
<link rel="stylesheet" href="accordionstyle.css">

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
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_java.php" style="color:white;">Java</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Learning programming using JAVA</li>

  </ol>
</nav>

  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 0 : Introduction
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/yRpLlJmRo2w?si=ZVl4SV3DZXgD0Cm0">&#10170  Introduction to JAVA language</a><br>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 1 : Manipulation of types of variables and conditionals
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/LusTv0RlnSU?si=jdEvVAX_vNgUg8EX">&#10170  Variables in JAVA</a><br>
        <a href="https://youtu.be/I5srDu75h_M?si=RHxsW-NcVCsIwsN8">&#10170  Conditional Satements (if else, switch break)</a><br>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 2 : Functions and Arrays in JAVA
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/qcSz4ef9UHA?si=SQ2GhvhppToYLVLA">&#10170  Functions and Methods</a><br>
        <a href="https://youtu.be/pFPZ83mgH00?si=yaJHAdySVbihyFSz">&#10170  Functions in JAVA</a><br>
        <a href="https://youtu.be/NTHVTY6w2Co?si=Cb22TKf6p0SJhdSU">&#10170  Arrays Introduction</a><br>
        <a href="https://youtu.be/18Zt5I4S45o?si=_CAVS4qIIKl8Q-Yw">&#10170  2D Arrays</a><br>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 3 : Sorting
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/PkJIc5tBRUE?si=3qVph9TSvYS451cN">&#10170  Bubble Sort, Selection Sort, and Insertion Sort</a><br>
        <a href="https://youtu.be/unxAnJBy12Q?si=zmAU5rD1qWzqPj4P">&#10170  Merge Sort</a><br>
        <a href="https://youtu.be/QXum8HQd_l4?si=hzNqQPv6oQBTX2cs">&#10170  Quick Sort</a><br>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
           Chapter 4 : Recursion
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/u-HgzgYe8KA?si=r1525fEfCrJj0vAe">&#10170  Recursion in JAVA</a><br>
        <a href="https://youtu.be/xZykmhcWGuY?si=sdkwYHNjSizwTXQk">&#10170  Questions on Recursion in JAVA</a><br>
      </div>
    </div>
  </div>
   <!-- Détails chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Chapter 5 : Object Oriented Programming
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://youtu.be/bSrm9RXwBaI?si=DRO37r-8USvaMdSF">&#10170  Introduction to OOP in JAVA</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
