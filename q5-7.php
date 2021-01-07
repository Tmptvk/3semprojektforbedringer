<?php ob_start();
session_start();
?>
<!DOCTYPE html>



<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
        <script src="javascript/validate.js" defer></script>

    <title></title>
        <script defer src="javascript/guruselect.js" charset="utf-8"></script>
          <script src="javascript/updown.js" defer></script>
  </head>
  <body>
    <form name="myForm5" onsubmit="return validateForm5()" method="get">
    <div class="bodywrapper">
      <div class="bgwrapper4">
        <div class="home2">
            <a href="index.php"><img src="media/hjem.png" alt=""></a>
        </div>
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="Cecilia">
            <img id="ceciliaimg" src="media\Guru1.png" alt="">
          </div>
          <div class="Malik">
            <img id="malikimg" src="media\guru-2.png" alt="">
          </div>
          <div class="Sarah">
            <img id="sarahimg" src="media\guru-3.png" alt="">
          </div>
          <div class="validate2">
            <div class="pwrapper">
              <p> Vælg venligst, <br>
                i mellem en af guiderne</p>
            </div>
          </div>
          <div class="paperwrapper4 hej" >
            <div class="counterwrapper">
              <p>5/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Valg af guide</h1>
            </div>
            <div class="arrow-upwrapper">
              <div class="pilop">
                <img id="pilopimg"src="media\Pil-op.png" alt="">

              </div>

            </div>
            <div class="txtwrapperit">
              <p>
                De virtuelle spilguider er til for at hjælpe dig <br> med at finde et mere defineret spil.
              </p>
            </div>

            <div class="selectwrapper mt-10p ">
            <ul>
              <label class="listwrapper3">Cecilia den Trygsomme<input id="q5-1" type ="radio" value="cecilia" name="select-q5[]" ><span class="underline"></span> </label>
              <label class="listwrapper3">Maalik den Modige <input id="q5-2" type ="radio" value="malik" name="select-q5[]" ><span class="underline"></span> </label>
              <label class="listwrapper3">Sarah den Gådefulde<input id="q5-3" type ="radio" value="sarah" name="select-q5[]" ><span class="underline"></span> </label>

            </ul>
            </div>
            <div class="arrow-downwrapper">
              <div class="nedad">
                <img id="pilnedimg"src="media\Pil-ned.png" alt="">
              </div>

            </div>
            <div class="btnwrapper3">
           <a href="q4-6.php"> <button class="tilbage btn-style" type="button" name="btn-start">Tilbage</button> </a>
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

if (isset($_GET['select-q5'])) {
  echo "yay";
$checked = $_GET['select-q5'];

//if surprise me is chosen
if ($checked[0] == "cecilia") {
  $_SESSION['guru'] = "cecilia";
  $_SESSION['guruNum'] = 0;
    echo $_SESSION['guru'];
}


elseif ($checked[0] == "malik") {
    $_SESSION['guru'] = "malik";
    $_SESSION['guruNum'] = 1;
      echo $_SESSION['guru'];
}

elseif ($checked[0] == "sarah") {
    $_SESSION['guru'] = "sarah";
    $_SESSION['guruNum'] = 2;
      echo $_SESSION['guru'];
}

header('Location: q6-8.php');

}
 ?>
