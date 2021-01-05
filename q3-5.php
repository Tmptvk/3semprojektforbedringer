<?php ob_start();
session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <script src="javascript/validate.js" defer></script>
    <title></title>
  </head>
  <body>
  <form name="myForm3" onsubmit="return validateForm3()" method="get">
    <div class="bodywrapper">
      <div class="bgwrapper3">
        <div class="home">
            <a href="index.php"><img src="media/hjem.png" alt=""></a>
        </div>
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="validate">
            <div class="pwrapper">
              <p> Vælg venligst, <br>
                mindst en spillestil. <br>
                </p>
            </div>
          </div>
          <div class="paperwrapper2">
            <div class="counterwrapper">
              <p>3/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Hvilken spillestil?</h1>
            </div>

            <div class="arrow-upwrapper">
              <div class="pilop">
                <img id="pilopimg"src="media\Pil-op.png" alt="">

              </div>

            </div>
            <div id="alittleup" class="selectwrapper">
            <ul>
              <label class="listwrapper3">Overrask mig!<input id="q3-0" type ="checkbox" value="not-set" name="select-q3[]" ><span class="underline"></span> </label>
              <label class="listwrapper3">Alle imod alle<input id="q3-1" type ="checkbox" value="1" name="select-q3[]" ><span class="underline"></span> </label>
              <label class="listwrapper3">Hold imod hold<input id="q3-2" type ="checkbox" value="2" name="select-q3[]" ><span class="underline"></span> </label>
              <label class="listwrapper3">Alle imod spillet<input id="q3-3" type ="checkbox" value="3" name="select-q3[]" ><span class="underline"></span> </label>

            </ul>
            </div>

            <div class="arrow-downwrapper">
              <div class="nedad">
                <img id="pilnedimg"src="media\Pil-ned.png" alt="">
              </div>

            </div>

            <div class="btnwrapper3">
           <a href="q2-4.php"> <button type="button" class="tilbage btn-style" name="btn-start">Tilbage</button> </a>
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

if (isset($_GET['select-q3'])) {
  echo "yay";
$checked = $_GET['select-q3'];

//if surprise me is chosen
if ($checked[0] == "not-set") {
  $_SESSION['pStyleSelect'] = "";

}

//if more than one option is chosen but not all
elseif (count($checked) > 1 and count($checked) < 3) {
  $first = $checked[0];
  $other ="";

  for($i=1; $i < count($checked); $i++){
      $other = $other . " OR PStyleID = " . $checked[$i];
  }

  $_SESSION['pStyleSelect'] = " AND (PStyleID = " . $first . $other . ")";
}

// if only 1 is chosen
elseif (count($checked) == 1) {
  $_SESSION['pStyleSelect'] = " AND PStyleID = " . $checked[0];

}

// if all or none are chosen
else {
  $_SESSION['pStyleSelect'] = "";
}
  echo $_SESSION['pStyleSelect'];
  header('Location: q4-6.php');

}
?>
