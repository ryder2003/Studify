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
            $lien="https://www.youtube.com/embed/ntLJmHOJ0ME";
            $nom_vid="Introduction To Java and Installing IDE + JDK";
            $chapitre="0";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/zIdg7hkqNE0";
            $nom_vid="Basic Structure of JAVA Program";
            $chapitre="0";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/X0zdAG7gfgs";
            $nom_vid="Variables and Data Types in JAVA";
            $chapitre="0";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/b2VJmyarV3I";
            $nom_vid="Literals in JAVA";
            $chapitre="1";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/HRfmLqqvzUs";
            $nom_vid="Getting user input in JAVA";
            $chapitre="1";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/pnn2VTSr1Ko";
            $nom_vid="Operators, Types of Operators and Expressions in JAVA";
            $chapitre="1";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/vh16INx13h4";
            $nom_vid="Associavity of Operators in JAVA";
            $chapitre="1";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/xGsUs3XQ0t0";
            $nom_vid="Data Type of Expressions and Increment/Decrement Operators";
            $chapitre="1";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/tem1bKt2Osc";
            $nom_vid=" Strings";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/YPK6NYMJt_A";
            $nom_vid="Conditionals: If-else Statement";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/XHgC6Md8L9o";
            $nom_vid="For Loop";
            $chapitre="2";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/GE5C_So1y00";
            $nom_vid=" While Loop";
            $chapitre="2";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/qMePCtjeqB4";
            $nom_vid="Introduction to Arrays";
            $chapitre="3";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/CfqjAKN-AwI";
            $nom_vid="Multidimensional Arrays";
            $chapitre="3";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/d4HQdkuC65I";
            $nom_vid="Les instructions de boucles";
            $chapitre="4";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/t6e5AyYWLFw";
            $nom_vid="Introduction to Methods in JAVA";
            $chapitre="4";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/pFaB68naMiU";
            $nom_vid="Advance Overloading";
            $chapitre="4";
            break;
          case '32':
            $lien="https://www.youtube.com/embed/5OrZpBbGKgc";
            $nom_vid="Introduction to Object oriented programming in JAVA";
            $chapitre="5";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/0NKxgvStdCM";
            $nom_vid="Mise en oeuvre du concept d'héritage.";
            $chapitre="5";
            break;
          case '34':
            $lien="https://www.youtube.com/embed/rIuQHKjIjt4";
            $nom_vid="Méthodes abstraites, classes abstraites et interfaces";
            $chapitre="5";
            break;
          case '35':
            $lien="https://www.youtube.com/embed/xG7Oq5Zk2Ak";
            $nom_vid="Implémentations d'interfaces";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_java_dominique.php" style="color:white;"> Learn programming with JAVA

</a></li>
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
                        <a href="actualvideocontent_dominique.php?video=1">&#10170  Introduction To Java and Installing IDE + JDK</a><br>
                        <a href="actualvideocontent_dominique.php?video=2">&#10170  Basic Structure of JAVA Program</a><br>
                        <a href="actualvideocontent_dominique.php?video=3">&#10170  Variables and Data Types in JAVA</a><br>
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
                          Chapter 1 : Understanding Basic concepts of JAVA
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=4">&#10170  Literals in JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=8">&#10170  Getting user input in JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=9">&#10170  Operators, Types of Operators and Expressions in JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=10">&#10170  Associavity of Operators in JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=13">&#10170  Data Type of Expressions and Increment/Decrement Operators</a><br>
                        <a href="actualvideocontent_dominique.php?video=14">&#10170  Strings</a><br>
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
                          Chapter 2 : Control Statements and Looping
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=5">&#10170  Conditionals: If-else Statement</a><br>
                        <a href="actualvideocontent_dominique.php?video=6">&#10170  For Loop</a><br>
                        <a href="actualvideocontent_dominique.php?video=16">&#10170  While Loop</a><br>

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
                           Chapter 3 : Arrays
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=18">&#10170  Introduction to Arrays</a><br>
                        <a href="actualvideocontent_dominique.php?video=19">&#10170  Multidimensional Arrays</a><br>
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
                           Chapter 4 : Method Overloading in JAVA
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=21">&#10170  Introduction to Methods in JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=22">&#10170  Advance Overloading</a><br>
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
                            Chapter 5 : Concepts of Object Oriented Programming
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=32">&#10170 Introduction to Object oriented programming in JAVA</a><br>
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
