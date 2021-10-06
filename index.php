<?php

//Задание 3

$a = 5;
$b = '05';

var_dump($a == $b); // Почему true? - т.к. сравнение проводится с помощью оператора ==, то строка '05' неявно приводится к числовому значению

var_dump((int)'012345'); // Почему 12345? - с помощью (int) строка '012345' приводится к числовому значению

var_dump((float)123.0 === (int)123.0); // Почему false? - из-за неточности чисел с плавающей точкой

var_dump((int)0 === (int)'hello, world'); // Почему true? - Строка, не содержащая число, преобразуется в 0

//Задание 5*

$a = 1;
$b = 2;

$b = $b - $a;
$a = $a + $b;

echo "$a $b";

//Задание 4
$title = 'Документ';
$date = date("d.m.Y");
$subtitle = 'Заголовок'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <header><h1><?php echo $subtitle ?></h1></header>
    <footer><?php echo $date ?></footer>
</body>
</html>














