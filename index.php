<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Oleksandra PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/muusikaStyle.css">
    <script src="js/jsMuusika.js"></script>

</head>
<body>
<?php
//päis
    include("header.php");
?>
<?php
//navigeerimismenüü
include("nav.php");
?>
<div class = "flex-container">
    <div>
        <?php
        if(isset($_GET["link"])){
            include('content/'.$_GET["link"]);
        } else{
            include('content/avaleht.php');
        }
        ?>
    </div>
    <div>
        <img src="image/tthk_logo.png" alt="pilt vabal valikul">
    </div>
</div>

<?php
//jalus
include("footer.php");
?>
</body>
</html>
