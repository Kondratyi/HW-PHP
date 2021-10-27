<?php
if($_POST['add_product_1']){
    setcookie('add_product_1', 1);
} else if ($_POST['add_product_2']){
    setcookie('add_product_2', 1);
};
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h2>Каталог</h2>
    <p>Продукт 1</p>
    <img src="https://via.placeholder.com/150" alt="">
    <form action="index.php" method="post">
        <input type="submit" name="add_product_1" value="Добавить в корзину">
    </form>
    <p>Продукт 2</p>
    <img src="https://via.placeholder.com/150" alt="">
    <form action="index.php" method="post">
        <input type="submit" name="add_product_2" value="Добавить в корзину">
    </form>
</div>
</body>
</html>

