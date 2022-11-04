<!DOCTYPE html>
<html>
<head>
    <?php
        $title = 'MILLIY TAOMLAR';
        require 'qismlar/tepasi.php';
    ?>
</head>
<body>
    <?php require_once 'qismlar/menyu.php'?>
    
    <div class="taom_div">
        <a id="Tovuqli" class="taomlar">
            <img src="img/1.jpg" alt="taom" class="taomlar_images">
            <div class="btn btn-danger">Tovuqli pasta</div>
        </a>

        <a href="./html/kokatli.html" class="taomlar">
            <img src="img/2.jpg" alt="taom" id="kokatli"  class="taomlar_images">
            <div class="btn btn-danger">Ko&#8216;katli qatlama</div>
        </a>

        <a href="./html/osh.html" class="taomlar">
            <img src="img/3.jpg" alt="taom" id="osh"  class="taomlar_images">
            <div class="btn btn-danger">Bayramona osh</div>
        </a>

        <a href="./html/somsa.html" class="taomlar">
            <img src="img/4.jpg" alt="rasm" id="somsa"  class="taomlar_images">
            <div class="btn btn-danger">Somsa-sho&#8216;rva</div>
        </a>
    </div>

    <?php include_once 'qismlar/quyi.php'?>
</body>
</html>