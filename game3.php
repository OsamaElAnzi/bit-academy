<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Steen Papier scissors</h1> <br>
    <?php
    if (isset($_GET['Save2'])) {
        if ($_GET['Player1'] == 'rock' && $_GET['Player2'] == 'rock') {
            echo "Gelijk spel";
        } elseif ($_GET['Player1'] == 'rock' && $_GET['Player2'] == 'paper') {
            echo "Speler 2 Wint";
        } elseif ($_GET['Player1'] == 'rock' && $_GET['Player2'] == 'scissors') {
            echo "Speler 1 Wint";
        } elseif ($_GET['Player1'] == 'paper' && $_GET['Player2'] == 'paper') {
            echo 'Gelijk spel';
        } elseif ($_GET['Player1'] == 'paper' && $_GET['Player2'] == 'rock') {
            echo 'Speler 1 wint';
        } elseif ($_GET['Player1'] == 'paper' && $_GET['Player2'] == 'scissors') {
            echo 'Speler 2 wint';
        } elseif ($_GET['Player1'] == 'scissors' && $_GET['Player2'] == 'rock') {
            echo "Speler 1 Wint";
        } elseif ($_GET['Player1'] == 'scissors' && $_GET['Player2'] == 'scissors') {
            echo "Gelijk Spel";
        } elseif ($_GET['Player1'] == 'scissors' && $_GET['Player2'] == 'paper') {
            echo "Speler 1 Wint";
        }
    }
    ?>
</body>
</html>