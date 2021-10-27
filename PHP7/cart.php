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
    <h2>Корзина</h2>
</body>
</html>
<?php
if ($_COOKIE['add_product_1']) {
    echo    '<p>Продукт 1</p>
            <img src="https://via.placeholder.com/50" alt="">
            <form action="cart.php" method="post">
            <input type="submit" name="del_product_1" value="Удалить из корзины">
            </form>';
}

if ($_COOKIE['add_product_2']) {
    echo '<p>Продукт 2</p>
          <img src="https://via.placeholder.com/50" alt="">
          <form action="cart.php" method="post">
          <input type="submit" name="del_product_2" value="Удалить из корзины">
          </form>';
}

if ($_POST['del_product_1']) {
    setcookie('add_product_1', 0);
}

if ($_POST['del_product_2']) {
    setcookie('add_product_2', 0);
}