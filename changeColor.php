<?php
session_start();
if(isset($_POST['userColor'])){
    $_SESSION['color'] = $_POST['backColor'];
    header('Location: /index.php');
}