<?php ob_start();
session_start();
$_SESSION['qCheck'] = "set";


//Guru stuff happaning
$guru = $_SESSION['guru'];


if ($guru === "malik") {

$guruImg =' <div class="guruwrapper">
            <div class="Malik2">
            <img src="media\guru-2.png" alt="">
          </div>
          </div> ';


}


elseif ($guru === "cecilia") {

  $guruImg =' <div class="guruwrapper">
              <div class="Cecilia2">
              <img src="media\Guru1.png" alt="">
            </div>
            </div> ';


}

elseif ($guru === "sarah") {

      $guruImg =' <div class="guruwrapper">
              <div class="Sarah2">
              <img src="media\guru-3-small.png" alt="">
            </div>
            </div> ';

}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <title></title>
    <script defer src="javascript/li.js" charset="utf-8"></script>
      <script src="javascript/updown.js" defer></script>
      <script src="javascript/validate.js" defer></script>
  </head>
  <body>
    <form name="myForm6" onsubmit="return validateForm6()" method="get">
    <div class="bodywrapper">
      <div class="bgwrapper4">
         <?php echo $guruImg; ?>

        <div class="home2">
            <a href="index.php"><img src="media/hjem.png" alt=""></a>
        </div>
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="validate2">
            <div class="pwrapper">
              <p> Vælg venligst, <br>
                mindst en genre. <br>
                </p>
            </div>
            </div>


          <div class="paperwrapper4">
            <div class="counterwrapper">
              <p>6/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Valg af genre</h1>
            </div>
            <div class="infowrapper">
            <p>Vælg gerne mere end en</p>
            </div>
            <div class="arrow-upwrapper">
              <div class="pilop">
                <img id="pilopimg"src="media\Pil-op.png" alt="">

              </div>

            </div>
            <div class="txtwrapperit">
              <p>
              </p>
            </div>
            <div class="selectwrapper">
            <ul id="ul-on">
              <!--RETTE UNDERLINE LÆNGDE VIS DET KAN NÅET I RETTE UGERNE-->
              <label id="q6-0" class="listwrapper3">Overrask mig!<input  type ="checkbox" value="not-set" name="select-q6[]" ><span class="underline"></span> </label>
              <label id="q6-1" class="listwrapper3">Fantasy<input  type ="checkbox" value="2" name="select-q6[]" ><span class="underline"></span> </label>
              <label id="q6-2" class="listwrapper3">Horror<input type ="checkbox" value="1" name="select-q6[]" ><span class="underline"></span> </label>
              <label id="q6-3" class="listwrapper3">Sci-fi<input  type ="checkbox" value="6" name="select-q6[]" ><span class="underline"></span> </label>
              <label id="q6-4" class="listwrapper3">Puzzle<input  type ="checkbox" value="5" name="select-q6[]" ><span class="underline"></span> </label>
              <label id="q6-5" class="listwrapper3">Trivia<input  type ="checkbox" value="3" name="select-q6[]" ><span class="underline"></span> </label>
              <label id="q6-6" class="listwrapper3">Kortspil<input type ="checkbox" value="4" name="select-q6[]" ><span class="underline"></span> </label>
              <label id="q6-7" class="listwrapper3">Selskabspil<input type ="checkbox" value="7" name="select-q6[]" ><span class="underline"></span> </label>


            </ul>
            </div>
            <div class="arrow-downwrapper">
              <div class="nedad">
                <img id="pilnedimg"src="media\Pil-ned.png" alt="">
              </div>

            </div>
            <div class="btnwrapper3">
           <a href="q5-7.php"> <button class="tilbage btn-style" type="button" name="btn-start">Tilbage</button> </a>
          </div>
            <div class="btnwrapper2">
             <input type ="submit" class="videre btn-style" name="btn-videre" value="Videre">
          </div>

          </div>
      </div>
    </div>
    </form
  </body>
</html>

<?php





if (isset($_GET['select-q6'])) {
  echo "yay";
$checked = $_GET['select-q6'];

//if surprise me is chosen
if ($checked[0] == "not-set") {
  $_SESSION['genreSelect'] = "";

}

//if more than one option is chosen but not all
elseif (count($checked) > 1 and count($checked) < 7) {
  $first = $checked[0];
  $other ="";

  for($i=1; $i < count($checked); $i++){
      $other = $other . " OR GenreID = " . $checked[$i];
  }

  $_SESSION['genreSelect'] = " AND (GenreID = " . $first . $other . ")";
}

// if only 1 is chosen
elseif (count($checked) == 1) {
  $_SESSION['genreSelect'] = " AND GenreID = " . $checked[0];

}

// if all are chosen
else {
  $_SESSION['genreSelect'] = "";
}
  echo $_SESSION['genreSelect'];
  header('Location: q7-9.php');

}

?>
