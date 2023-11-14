<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="views/styles/home.css">
        <link rel="icon" type="image/*" href="views/assets/images/map.png">
        <script src="https://aframe.io/releases/1.4.0/aframe.min.js"></script>
    </head>
<body>

<?php
//si controller pas objet
//  header('Location: controller/controller.php');

//si controller objet

//chargement config
require_once(__DIR__.'/config/config.php');

//chargement autoloader pour autochargement des classes
require_once(__DIR__.'/config/Autoload.php');
Autoload::load();

?>

<div class="menu">
    <h1>Panorama Generator</h1>
    <nav>
            <li>
                <form method="post">
                    <input type="submit" value="Home">
                    <input type="hidden" name="action">
                </form>
            </li>
            <li>
                <form method="post">
                    <input type="submit" value="New project">
                    <input type="hidden" name="action" value="goToLoadImages">
                </form>
            </li>
            <li>
                <form method="post">
                    <input type="submit" value="Tutorial">
                    <input type="hidden" name="action" value="goToTutorial">
                </form>
            </li>
            <li>
                <form method="post">
                    <input type="submit" value="About">
                    <input type="hidden" name="action" value="goToAbout">
                </form>
            </li>
    </nav>
</div>

<?php

$cont = new Controller();

?>
</body>
</html>