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
    echo '<input type="hidden" name="Player1" value=' . $_GET['Save'] . '>';
    echo '<button type="submit" name="Save2" value="rock"><img src="steen.jpg"></button>';
    echo '<button type="submit" name="Save2" value="paper"><img src="papier.png"></button>';
    echo '<button type="submit" name="Save2" value="scissors"><img src="schaar.png"></button>';
    echo '</form>';
}
?>
</body>
</html>