<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="accordionstyle.css">
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
            $lien="https://www.youtube.com/embed/pXaaacSkPqc";
            $nom_vid="Préparation de votre environnement de développement Java";
            $chapitre="0";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/lO_n1bFXOdQ";
            $nom_vid="Votre première application Java (Hello World)";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/xiikhWw3814";
            $nom_vid="Compilation et portabilité des codes JAVA";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/aCZ9U-L8luQ";
            $nom_vid="Manipulation des types entiers en Java";
            $chapitre="2";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/WGykke4np-0";
            $nom_vid="Le type boolean (booléen)";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/nz_642sr8uM";
            $nom_vid="Manipulation de caractères en Java.";
            $chapitre="2";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/DMPKKw7X3lg";
            $nom_vid="Utilisation de chaînes de caractères en Java";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/BhNj3KqOpLI";
            $nom_vid="Les tableaux Java";
            $chapitre="3";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/zvMAMrkMjME";
            $nom_vid="Définition d'un type énuméré.";
            $chapitre="3";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/udV9ugHKglA";
            $nom_vid="Opérateurs ++ (incrément) et -- (décrément)";
            $chapitre="3";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/T2-eYxx0QRw";
            $nom_vid="Utilisation des opérateurs binaires";
            $chapitre="4";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/Lne5VEBYZZ0";
            $nom_vid="La table de précédence des opérateurs Java";
            $chapitre="4";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/rE4eNfEgIx4";
            $nom_vid="Les instructions conditionnelles";
            $chapitre="5";
            break;
          default:
            # code...
            break;
        }
      }
   ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_java.php" style="color:white;">Java</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_java_dominique.php" style="color:white;">Apprendre la programmation avec JAVA</a></li>
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
                case '0':
                  echo '<div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapter 0 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=1">&#10170  Introduction to JAVA language</a>
                      </div>
                    </div>
                  </div>';
                  break;
                case '1':
                  echo '<!-- Chapter 1 Details-->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapter 1 : Manipulation of types of variables and conditionals
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=2">&#10170  Variables in JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=3">&#10170  Conditional Statements (if else, switch break)</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '2':
                  echo '<!-- Chapter 2 Details-->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapter 2 : Functions and Arrays in JAVA
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=4">&#10170  Functions and Methods</a><br>
                        <a href="actualvideocontent_dominique.php?video=5">&#10170  Functions in JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=6">&#10170  Introduction to Arrays</a><br>
                        <a href="actualvideocontent_dominique.php?video=7">&#10170  2D Arrays</a><br>

                      </div>
                    </div>
                  </div>';
                  break ;
                case '3':
                  echo '<!-- Chapter 3 Details-->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 3 : Sorting
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=8">&#10170  Bubble Sort, selection Sort, Insertion Sort</a><br>
                        <a href="actualvideocontent_dominique.php?video=9">&#10170  Merge Sort</a><br>
                        <a href="actualvideocontent_dominique.php?video=10">&#10170  Quick Sort</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
                case '4':
                  echo '<!-- Chapter 4 Details-->
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           Chapter 4 : Recursion
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=11">&#10170  Recursion in JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=12">&#10170  Questions on Recursion in JAVA</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
                case '5':
                  echo ' <!-- Chapter 5 Details-->
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Chapter 5 : Object Oriented Programming
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=13">&#10170  Introduction to OOP in JAVA</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
                }
            }
          ?>
        </div>
    </div>
</div>


<?php require "../../../footer.php" ?>
