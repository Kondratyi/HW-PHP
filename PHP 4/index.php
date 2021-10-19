<?php

//Задание 1

function renderGallery($imagesQuantity) {
    for($i = 1; $i <= $imagesQuantity; $i++) {
        echo "<a href=\"img/img-$i.jpg\" target=\"_blank\"><img src=\"img/img-$i.jpg\" alt=\"\" style=\"width: 300px; height: 200px\"></a>";
    }
}
$imagesQuantity = 8;

//Задание 2

$images = scandir("img/");

function renderAnotherGalery($images) {
    foreach($images as $image) {
        if(is_file("img/".$image)) {
            echo "<a href=\"img\\$image\" target=\"_blank\"><img src=\"img\\$image\" alt=\"\" style=\"width: 300px; height: 200px\"></a>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <section>
    <?php renderGallery($imagesQuantity); ?>
    <?php renderAnotherGalery($images); ?>
    </section>
    <footer></footer>
</body>
</html>