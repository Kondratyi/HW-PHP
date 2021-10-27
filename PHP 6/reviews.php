<?php
    $link = mysqli_connect('localhost', 'root', '123', 'php-hw');

    if (isset($_POST['user_name']) && isset($_POST['text'])) {

        if(!$link) {
            echo'Error' . mysqli_connect_error();
        }

        $user = mysqli_real_escape_string($link, $_POST['user_name']);
        $text = mysqli_real_escape_string($link, $_POST['text']);

        $addToDb = "INSERT INTO reviews (user_name, text) VALUES ('$user', '$text')";

        if (!mysqli_query($link, $addToDb)) {
            echo 'Error' . mysqli_error($link);
        }
    }

    $result = mysqli_query($link,"SELECT user_name, text FROM reviews");
    while($review = mysqli_fetch_assoc($result)) {
        echo '<p>Имя пользователя:' . $review['user_name'].'</p>';
        echo '<p>'.$review['text'].'</p>';
    }
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
<form action="reviews.php" method="post">
    <input type="text" name="user_name" placeholder="Имя пользователя">
    <input type="text" name="text" placeholder="Отзыв">
    <input type="submit" value="Опубликовать">
</form>
</body>
</html>
