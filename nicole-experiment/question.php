<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
        <input type="checkbox" name="options[]" value="1"/> Horror<br/>
        <input type="checkbox" name="options[]" value="2"/> Fantasy<br/>
        <input type="checkbox" name="options[]" value="3"/> Trivia<br/>
        <input type="checkbox" name="options[]" value="4"/> Cardgame<br/>
        <input type="checkbox" name="options[]" value="5"/> Puzzle<br/>
        <input type="checkbox" name="options[]" value="6"/> Sci-fi<br/>
        <input type="checkbox" name="options[]" value="7"/> Selskabspil<br/>
        <input type="submit" value="Go!" />
    </form>
    <a href="results.php">results</a>
  </body>
</html>


<?php


if (isset($_GET['options'])) {
  echo "yay";
$checked = $_GET['options'];

//if more than one option is chosen but not all
if (count($checked) > 1 and count($checked) < 7) {
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

// if all or none are chosen
else {
  $_SESSION['genreSelect'] = "";
}
  echo $_SESSION['genreSelect'];

}
echo "<br>";
?>
