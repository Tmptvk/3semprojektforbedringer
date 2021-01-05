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
    <form name="myForm" onsubmit="return validateForm()" method="get">
    <div class="bodywrapper">
      <div class="bgwrapper3">
        <div class="validate">
          <div class="pwrapper">
            <p> Vælg venligst, <br>
              hvor mange spillere. </p>
          </div>
        </div>
        <div class="home">
          <a href="index.php"><img src="media/hjem.png" alt=""></a>
        </div>
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="paperwrapper2">
            <div class="counterwrapper">
              <p>1/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Velkommen, <br>
              hvor mange bliver I?</h1>
            </div>
            <div class="arrow-upwrapper">
              <div class="pilop">
                <img id="pilopimg"src="media\Pil-op.png" alt="">

              </div>

            </div>
            <div class="selectwrapper">
            <ul>
            <label class="listwrapper">1<input id="q1-1" type ="radio" value="1" name="select-q1[]" ><span class="underline"></span> </label>
            <label class="listwrapper">2<input id="q1-2" type ="radio" value="2" name="select-q1[]" ><span class="underline"></span> </label>
            <label class="listwrapper">3<input id="q1-3" type ="radio" value="3" name="select-q1[]" ><span class="underline"></span> </label>
            <label class="listwrapper">4<input id="q1-4" type ="radio" value="4" name="select-q1[]" ><span class="underline"></span> </label>
            <label class="listwrapper">5<input id="q1-5" type ="radio" value="5" name="select-q1[]" ><span class="underline"></span> </label>
            <label class="listwrapper">6<input id="q1-6" type ="radio" value="6" name="select-q1[]" ><span class="underline"></span> </label>
            <label class="listwrapper">7<input id="q1-7" type ="radio" value="7" name="select-q1[]" ><span class="underline"></span> </label>
            <label class="listwrapper">8<input id="q1-8" type ="radio" value="8" name="select-q1[]" ><span class="underline"></span> </label>
            </ul>
            </div>
            <div class="arrow-downwrapper">
              <div class="nedad">
                <img id="pilnedimg"src="media\Pil-ned.png" alt="">
              </div>

            </div>
            <div class="btnwrapper3">
           <a href="house2.php"> <button type="button" class="tilbage btn-style" name="btn-tilbage">Tilbage</button> </a>
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
//check if array exists then run
if (isset($_GET['select-q1'])) {
$checked = $_GET['select-q1'];

// if only 1 is chosen
if (count($checked) == 1) {
  //saves value in session to be used for sql query
  $_SESSION['numPlayersSelect'] = $checked[0];

}

// none are chosen
else {
  //empty session to avoid undefined variable later
  $_SESSION['numPlayersSelect'] = "";
}
  echo $_SESSION['numPlayersSelect'];
  header('Location: q2-4.php');

}
?>
