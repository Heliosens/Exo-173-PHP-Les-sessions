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
    <title>page 1</title>
</head>
<body style="background: <?=$_SESSION['color']?>">
    <h1>PAGE 1</h1>
    <nav style="background: white">
        <a href="index.php">home</a>
        <a href="page2.php">page 2</a>
        <a href="page3.php">page 3</a>
    </nav>
</body>
</html>
<?php