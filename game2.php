<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Steen Papier Schaar</h1>
<?php

if (isset($_GET['Save'])) {
    echo 'Speler 1 heeft een keuze gemaakt <br>';
    echo 'Speler 2 is aan de beurt';
    echo '<form action="game3.php" method="GET">';
    echo '<input type="hidden" name="Player1" value=' . $_GET['Player1'] . '>';
    echo '<select name="Player2" id="Player2">';
    echo '<option value="rock">steen</option>';
    echo '<option value="paper">papier</option>';
    echo '<option value="scissors">schaar</option>';
    echo '</select>';
    echo '<button type="submit" name="Save2">opslaan</button>';
    echo '</form>';
}
?>
</body>
</html>