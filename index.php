<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
</head>
<body style="background: <?=$_SESSION['color']?>">
    <h1>HOME</h1>
    <form action="changeColor.php" method="post">
        <label for="backColor">Choisissez une couleur de fond : </label>
        <select name="backColor" id="backColor">
            <option value="">choisissez une couleur</option>
            <option value="red">rouge</option>
            <option value="blue">bleu</option>
            <option value="green">vert</option>
            <option value="grey">gris</option>
            <option value="#ff00c8">rose</option>
        </select>
        <input type="submit" name="userColor">
    </form>

    <nav style="background: white">
        <a href="page1.php">page 1</a>
        <a href="page2.php">page 2</a>
        <a href="page3.php">page 3</a>
    </nav>
</body>
</html>