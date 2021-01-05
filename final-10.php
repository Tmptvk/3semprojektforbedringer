<?php session_start();
$servername = "mysql76.unoeuro.com:3306";
$username = "nicolebuys_com";
$password = "55721nbU";
$db = "nicolebuys_com_db_boardgamequiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$numPlayersSelect = $_SESSION['numPlayersSelect'];
$pTimeSelect = $_SESSION['pTimeSelect'];
$pStyleSelect = $_SESSION['pStyleSelect'];

// checks if user has chosen to speak with a guru
if (isset($_SESSION['qCheck'])) {
  $genreSelect = $_SESSION['genreSelect'];
  $challengeSelect = $_SESSION['challengeSelect'];

  //checks if a genre is chosen. If so adds an inner join for genre table and $genreSelect
  if ($_SESSION['genreSelect'] === "") {
    $sql = "SELECT ga.GameID, ga.Name, gc.GameChaName, ga.MaxPlayers, ga.MinPlayers FROM games AS ga INNER JOIN gamechallenge AS gc ON ga.GameChallengeID = gc.GameChallengeID WHERE MinPlayers <= $numPlayersSelect AND MaxPlayers >= $numPlayersSelect $pTimeSelect $pStyleSelect $challengeSelect ORDER BY AvgRating DESC LIMIT 3;";

  }
  else {

    $sql = "SELECT ga.GameID, ga.Name, gc.GameChaName, ga.MaxPlayers, ga.MinPlayers FROM games AS ga INNER JOIN gamegenre AS gg ON ga.GameID = gg.GameID INNER JOIN gamechallenge AS gc ON ga.GameChallengeID = gc.GameChallengeID WHERE MinPlayers <= $numPlayersSelect AND MaxPlayers >= $numPlayersSelect $pTimeSelect $pStyleSelect $genreSelect $challengeSelect ORDER BY AvgRating DESC LIMIT 3;";

  }
}

else {
$sql = "SELECT ga.GameID, ga.Name, gc.GameChaName, ga.MaxPlayers, ga.MinPlayers FROM games AS ga INNER JOIN gamechallenge AS gc ON ga.GameChallengeID = gc.GameChallengeID WHERE MinPlayers <= $numPlayersSelect AND MaxPlayers >= $numPlayersSelect $pTimeSelect $pStyleSelect  AND (ga.GameChallengeID = 1 OR ga.GameChallengeID = 2) ORDER BY AvgRating DESC LIMIT 3;";


}

//sends query to database and gets results
// echo $sql;
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);



$conn->close();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <title></title>
  </head>
  <body>
    <div class="bodywrapper">
      <div class="bgwrapper6">
        <div class="home2">
          <a href="index.php"><img src="media/hjem.png" alt=""></a>
        </div>
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="paperwrapper6">
            <div class="headingwrapper">
              <h1>Pappa anbefaler</h1>
            </div>
            <div class="txtwrapperit">
              <!--Udskriftlig tekst-->
              <p>
                Et par spil er nu valgt helt specielt til jer!
              </p>

            </div>
            <div class="displaywrapper">
              <?php
              //here results of Mysql query is displayed
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div class=\"gameresultwrapper\"><div class=\"gameresultimg\"><img src=\"media/game-photos/" . $row['GameID'] . ".png\" alt=\"Billede af ". $row['Name'] . ", resultat fra Papas Brætspilsanbefaler\"></div> <br>";
                  echo "<h2>" . $row['Name'] . "</h2><br><p>" . "Spillere: " . $row['MinPlayers'] . " - " . $row['MaxPlayers'] . "<br>";
                  echo "Udfordringsniveau: " . $row['GameChaName'] . "<br>" . "</p></div>";
                }

              }
              //in case of 0 results
              else {

                echo "<div class=\"noResult\">  Der er ingen resultater fra din søgning. <br> <br> Ud fra jeres registrede ønsker <br> kunne Papa desværre ikke mønstre <br> et par spændende spil til jer <br> men I kan starte søgningen på ny <br> og vælge lidt mer' </div> ";
              }
              ?>
            </div>
            <div class="buttonswrapper">
              <div class="btnwrapper">
             <a href="q7-9.php"> <button  class="tilbage btn-style" type="button" name="btn-start">Tilbage</button> </a>
            </div>
              <div class="btnwrapper2">
             <a href="index.php"> <button type="button" class="tilbage-til-start btn-style2 "name="btn-start">Til start</button> </a>
            </div>
            </div>

          </div>
      </div>
    </div>
  </body>
</html>
