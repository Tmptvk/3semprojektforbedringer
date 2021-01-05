<?php ob_start();
session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
      <script src="javascript/updown.js" defer></script>
      <script src="javascript/validate.js" defer></script>
    <title></title>
  </head>
  <body>
    <form name="myForm2" onsubmit="return validateForm2()" method="get">


    <div class="bodywrapper">
      <div class="bgwrapper3">
        <div class="home">
            <a href="index.php"><img src="media/hjem.png" alt=""></a>
        </div>
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="validate">
            <div class="pwrapper">
              <p> Vælg venligst, <br>
                hvor lang tid <br>
                I kan spille. <br>
                </p>
            </div>
            </div>

          <div class="paperwrapper2">
            <div class="counterwrapper">
              <p>2/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Hvor lang tid må spillet tage?</h1>
            </div>
            <div class="arrow-upwrapper">
              <div class="pilop">
                <img id="pilopimg"src="media\Pil-op.png" alt="">

              </div>

            </div>
            <div class="selectwrapper">
            <ul>
              <label class="listwrapper2">Overrask mig!<input id="q2-0" type ="checkbox" value="not-set" name="select-q2[]" ><span class="underline"></span> </label>
              <label class="listwrapper2">Under 30 min.<input id="q2-1" type ="checkbox" value="1" name="select-q2[]" ><span class="underline"></span> </label>
              <label class="listwrapper2">30 - 60 min.<input id="q2-2" type ="checkbox" value="2" name="select-q2[]" ><span class="underline"></span> </label>
              <label class="listwrapper2">60 -120 min.<input id="q2-3" type ="checkbox" value="3" name="select-q2[]" ><span class="underline"></span> </label>
              <label class="listwrapper2">Over 120 min.<input id="q2-4" type ="checkbox" value="4" name="select-q2[]" ><span class="underline"></span> </label>
            </ul>
            </div>
            <div class="arrow-downwrapper">
              <div class="nedad">
                <img id="pilnedimg"src="media\Pil-ned.png" alt="">
              </div>

            </div>
            <div class="btnwrapper3">
           <a href="q1-3.php"> <button type="button"  class="tilbage btn-style" name="btn-videre">Tilbage</button> </a>


          </div>
            <div class="btnwrapper2">
             <input type ="submit" class="videre btn-style" name="btn-videre" value="Videre">
          </div>
          </div>
      </div>
    </div>
    </form>
  </body>
</html>
<?php
//checks if the array exists
if (isset($_GET['select-q2'])) {
$checked = $_GET['select-q2'];

//if surprise me is chosen
if ($checked[0] == "not-set") {
  $_SESSION['pTimeSelect'] = "";

}

//if more than one option is chosen but not all
elseif (count($checked) > 1 and count($checked) < 4) {
  $first = $checked[0];
  $other ="";

  for($i=1; $i < count($checked); $i++){
      $other = $other . " OR PTimeID = " . $checked[$i];
  }

  $_SESSION['pTimeSelect'] = " AND (PTimeID = " . $first . $other . ")";
}

// if only 1 is chosen
elseif (count($checked) == 1) {
  $_SESSION['pTimeSelect'] = " AND PTimeID = " . $checked[0];

}

// if all or none are chosen
else {
  $_SESSION['pTimeSelect'] = "";
}
  echo $_SESSION['pTimeSelect'];
  header('Location: q3-5.php');


}

?>
