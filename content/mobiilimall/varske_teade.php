<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Värske teade</title>
    <link rel="stylesheet" href="style_mob/kujundus.css">
</head>
<body>
<h1>Värske teade!</h1>
<p id = osa1>
<?php
require("varske_teade.txt");
?></p>
</body>
<footer>
    <?php
    include("jalus_varske_teade.php");
    ?>
</footer>
</html>