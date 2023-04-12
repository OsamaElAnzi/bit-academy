<?php
// Array met de mogelijke keuzes
$choices = array("steen", "papier", "schaar");

// Genereer een willekeurige keuze voor de computer
$computer_choice = $choices[array_rand($choices)];

// Controleer of de speler een keuze heeft gemaakt en sla deze op
if (isset($_POST["player_choice"])) {
    $player_choice = $_POST["player_choice"];

  // Controleer wie er wint
    if ($player_choice == $computer_choice) {
        $result = "Gelijkspel!";
    } elseif ($player_choice == "steen" && $computer_choice == "schaar") {
        $result = "Gefeliciteerd, je hebt gewonnen!";
    } elseif ($player_choice == "papier" && $computer_choice == "steen") {
        $result = "Gefeliciteerd, je hebt gewonnen!";
    } elseif ($player_choice == "schaar" && $computer_choice == "papier") {
        $result = "Gefeliciteerd, je hebt gewonnen!";
    } else {
        $result = "Helaas, de computer heeft gewonnen.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Steen Papier Schaar</title>
</head>

<body>
  <h1>Steen Papier Schaar</h1>
  <form action="VScomputer.php" method="post">
    <label>
      <button type="submit" name="player_choice" value="steen"><img src="steen.jpg"></button>
    </label>
    <label>
      <button type="submit" name="player_choice" value="papier"><img src="papier.png"></button>
    </label>
    <label>
      <button type="submit" name="player_choice" value="schaar"><img src="schaar.png"></button>
    </label>
  </form> <br>
  <?php if (isset($result)) : ?>
    <h1><?php echo $result; ?></h1>
  <?php endif; ?>
</body>

</html>