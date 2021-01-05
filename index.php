<?php session_start();
session_destroy();
$_SESSION['numPlayersSelect'] = "";
$_SESSION['pTimeSelect'] = "";
$_SESSION['pStyleSelect'] = "";
$_SESSION['genreSelect'] = "";
$_SESSION['challengeSelect'] = "AND (GameChallengeID = 1 OR GameChallengeID = 2)";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <title></title>
  </head>
  <body>
    <div class="bodywrapper">
      <div class="bgwrapper">
        <div class="logowrapper">
          <img class="papalogo" src="media/logo.PNG" alt="Papas Papbar Logo">
        </div>
        <div class="headingwrapper">
          <h1>En guidet brætspilsvælger</h1>
        </div>
        <div class="btnwrapper">
       <a href="house2.php"> <button class="btn-style" type="button" name="btn-start">Start</button> </a>
      </div>
      </div>
    </div>
  </body>
</html>
