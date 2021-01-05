<?php ob_start();
session_start();

$guru = $_SESSION['guru'];

$template="noo";

//Guru stuff happaning
$guru = $_SESSION['guru'];


if ($guru === "malik") {

$guruImg =' <div class="Malik3">
            <img src="media\guru-2.png" alt=""> </div>';

}


elseif ($guru === "cecilia") {

  $guruImg = '<div class="Cecilia3"> <img src="media\Guru1.png" alt=""></div>';


}

elseif ($guru === "sarah") {

  $guruImg = '<div class="Sarah3">
            <img src="media\guru-3.png" alt="">
          </div>';

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <script defer src="javascript/li2.js" charset="utf-8"></script>
      <script src="javascript/updown.js" defer></script>
      <script src="javascript/validate.js" defer></script>



    <title></title>
  </head>
  <body>
    <form name="myForm7" onsubmit="return validateForm7()" method="get">
    <div class="bodywrapper">
      <div class="bgwrapper4">
        <div class="home2">
            <a href="index.php"><img src="media/hjem.png" alt=""></a>
        </div>
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="validate2">
            <div class="pwrapper">
              <p> Vælg venligst, <br>
                mindst et udfordringsniveau. <br>
                </p>
            </div>
            </div>
        <?php echo $guruImg; ?>
          <div class="paperwrapper5">
            <div class="counterwrapper">
              <p>7/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Valg af udfordrings niveau</h1>
            </div>

            <div class="txtwrapperit">
              <!--Udskriftlig tekst-->
              <p id="template">

              </p>
            </div>

            <div class="arrow-upwrapper">
              <div class="pilop">
                <img id="pilopimg"src="media\Pil-op.png" alt="">

              </div>

            </div>

            <div class="selectwrapper">
            <ul>
              <label id="q7-0" class="q1 listwrapper3">Overrask mig!<input class="q1"  type ="checkbox" value="not-set" name="select-q7[]" ><span class="underline"></span> </label>
              <label id="q7-1" class="q2 listwrapper3">Lige ud af vejen<input  type ="checkbox" value="1" name="select-q7[]" ><span class="underline"></span> </label>
              <label id="q7-2" class="q3 listwrapper3">Lidt op af bakke<input  type ="checkbox" value="2" name="select-q7[]" ><span class="underline"></span> </label>
              <label id="q7-3" class="q4 listwrapper3">Helt op af bakke<input type ="checkbox" value="3" name="select-q7[]" ><span class="underline"></span> </label>



            </ul>
          </div>

          <div class="arrow-downwrapper">
            <div class="nedad">
              <img id="pilnedimg"src="media\Pil-ned.png" alt="">
            </div>

          </div>


            <div class="btnwrapper3">
           <a href="q6-8.php"> <button class="tilbage btn-style" type="button" name="btn-start">Tilbage</button> </a>
          </div>
            <div class="btnwrapper2">
              <input type ="submit" class="videre btn-style" name="btn-videre" value="Videre">
          </div>

          </div>
      </div>
    </div>
  </body>
</html>
    <?php include 'psecs/li2.php'; ?>


<?php


if (isset($_GET['select-q7'])) {
  echo "yay";
$checked = $_GET['select-q7'];

//if surprise me is chosen
if ($checked[0] == "not-set") {
  $_SESSION['challengeSelect'] = "";

}


//if more than one option is chosen but not all
elseif (count($checked) > 1 and count($checked) < 3) {
  $first = $checked[0];
  $other ="";

  for($i=1; $i < count($checked); $i++){
      $other = $other . " OR ga.GameChallengeID = " . $checked[$i];
  }

  $_SESSION['challengeSelect'] = " AND (ga.GameChallengeID = " . $first . $other . ")";
}

// if only 1 is chosen
elseif (count($checked) == 1) {
  $_SESSION['challengeSelect'] = " AND ga.GameChallengeID = " . $checked[0];

}

// if all or none are chosen
else {
  $_SESSION['challengeSelect'] = "";
}
  echo $_SESSION['challengeSelect'];
  header('Location: final-10.php');

}

?>
