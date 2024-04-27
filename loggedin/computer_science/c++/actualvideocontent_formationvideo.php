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

  <?php
      $lien="";
      $nom_vid="";
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube.com/embed/j8nAHeVKL08";
            $nom_vid="Introduction to C++";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/oW2r0r_i5Ps";
            $nom_vid="Basic Structure of C++ Program";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/jigb6W35zHc";
            $nom_vid="Variables and Comments";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/JrnQ-915czY";
            $nom_vid="Variable Scope and Data Types";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed//AY96XFqb934";
            $nom_vid="If-else Conditionals";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/a7dfSBrTZtE";
            $nom_vid="For, While and Do-While Loop";
            $chapitre="2";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/DJh5NfK7h-U";
            $nom_vid="Break and Continue Statements";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/EvYmTCx9BFs";
            $nom_vid="Pointers in C++";
            $chapitre="2";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/ePJxpxsnkGw";
            $nom_vid="Arrays and Pointers Arithmetic in C++";
            $chapitre="3";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/RFLFX1boGwo";
            $nom_vid="Functions and Function Prototypes";
            $chapitre="4";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/oQbyN-vDghA";
            $nom_vid="Call by Value and Call by Reference ";
            $chapitre="4";
            break;
          case '12':
            $lien="https://www.youtube.com/embed//oVvvwEx-gBw";
            $nom_vid="Inline Functions";
            $chapitre="4";
            break;
          default:
            
            break;
        }
      }
   ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_c++_formationvideo.php" style="color:white;">Course C++</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"><?php echo $nom_vid ?></li>
  </ol>
</nav>


<div class="video_accordian_container">
    <div class="row">
        <div class="col-md-8">
          <!-- The actual video content -->
          <div class="iframe-container">
            <iframe width="950" height="550" src="<?php echo isset($lien)?$lien:''; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <!-- The lessons within the same chapter  -->
          <?php
            if (isset($chapitre)){
              switch ($chapitre) {
                case '1':
                  echo '<div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapter 1 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">


                        <a href="actualvideocontent_formationvideo.php?video=1">&#10170  Introduction to C++</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=2">&#10170  Basic Structure of C++</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=3">&#10170  Variables and Comments in C++</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=4">&#10170  Variable Scope and Data Types</a><br>

                      </div>
                    </div>
                  </div>';
                  break;
                case '2':
                  echo '<!-- Chapter 2 Details-->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapter 2 : Control Statements and Looping
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=5">&#10170  If-else Conditionals</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=6">&#10170  For, While and Do-While Loop</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=7">&#10170 Break and Continue Statements</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=8">&#10170  Pointers in C++</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '3':
                  echo '<!-- Chapter 3 Details-->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapter 3 : Introduction to Arrays
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=9">&#10170  Arrays and Pointers Arithmetic in C++++</a><br>
                        </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Chapter 4 Details-->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Functions in C++
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=10">&#10170  Functions nad Function Prototypes</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=11">&#10170  Call by Value and Call by Reference</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=12">&#10170  Inline Functions</a><br>
                      </div>
                    </div>
                  </div>';
                  break;

              }
            }
           ?>
        </div>
    </div>
</div>

<?php require "../../../footer.php" ?>
