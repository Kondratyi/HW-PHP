<?php
// Задание 1
$taskOneHead = 'Задание 1';

$brunchArg1 = 15;

$brunchArg2 = -3;

function branching($a, $b) {
    if ($a > 0 && $b > 0) {
        return $a - $b;
    } else if ($a < 0 && $b < 0) {
        return $a * $b;
    } else {
        return $a + $b;
    }
}

// Задание 2
$taskTwoHead = 'Задание 2';

$varToSwitch = 8;

function switchTask($a) {
    switch($a) {
        case 0:
            echo 'Ноль <br>';
        case 1:
            echo 'Один <br>';
        case 2:
            echo 'Два <br>';
        case 3:
            echo 'Три <br>';
        case 4:
            echo 'Четыре <br>';
        case 5:
            echo 'Пять <br>';
        case 6:
            echo 'Шесть <br>';
        case 7:
            echo 'Семь <br>';
        case 8:
            echo 'Восемь <br>';
        case 9:
            echo 'Девять <br>';
        case 10:
            echo 'Десять <br>';
        case 11:
            echo 'Одинадцать <br>';
        case 12:
            echo 'Двенадцать <br>';
        case 13:
            echo 'Тринадцать <br>';
        case 14:
            echo 'Четырнадцать <br>';
        case 15:
            echo 'Пятнадцать';
    }
}

// Задание 3
$taskThreeHead = 'Задание 3';

$mathVar1 = 2;

$mathVar2 = 9;

function summation($a, $b) {
    return $a + $b . "<br>";
}

function subtraction($a, $b) {
    return $a - $b . "<br>";
}

function multiplication($a, $b) {
    return $a * $b . "<br>";
}

function division($a, $b) {
    return round(($a / $b), 3);
}

// Задание 4
$taskFourHead = 'Задание 4';

$calcVar1 = 6;

$calcVar2 = 17;

$operation = '-';

function calculator($a, $b, $opr) {
    switch($opr) {
        case '+':
            return $a + $b;
            break;
        case '-':
            return $a - $b;
            break;
        case '*':
            return $a * $b;
            break;
        case '/':
            return round(($a / $b), 3);
            break;
    }
}

// Задание 5
$currentYear = date('Y');

// Задание 6
$taskSixHead = 'Задание 6';

$val = 5;
$pow = 5;

function power($val,$pow) {
	if ($pow == 1) {
		return $val;
	} else {
		return $val * power ($val, --$pow);
    }
}

// Задание 6
$taskSevenHead = 'Задание 7';

function signHour($hour) {
    switch ($hour) {
        case 0:
            return "$hour часов";
            break;
        case (($hour == 1) || ($hour == 21)):
            return "$hour час";
            break;
        case (($hour >= 2 && $hour <= 4) || ($hour >= 22 && $hour <= 24)):
            return "$hour часа";
            break;
        case ($hour >= 5 && $hour <= 20):
            return "$hour часов";
            break;
    }
}

function signMinuts($minute){
    switch($minute) {
        case 0:
            return "$minute минут";
            break;
        case (($minute == 1) || ($minute == 21) || ($minute == 31) || ($minute == 41) || ($minute == 51)):
            return "$minute минута";
            break;
        case (($minute >= 5 && $minute <= 20) || ($minute >= 25 && $minute <= 30) || ($minute >= 35 && $minute <= 40) || ($minute >= 45 && $minute <= 50) || ($minute >= 55 && $minute <= 60)):
            return "$minute минут";
            break;
        case (($minute >= 2 && $minute >= 4) || ($minute >= 22 && $minute >= 24) || ($minute >= 32 && $minute >= 34) || ($minute >= 42 && $minute >= 44) || ($minute >= 52 && $minute >= 54)):
            return "$minute минуты";
            break;
    }
}

function showTime() {

    $hour = date('G');
    $minute = date('i');

    $stringHour = signHour($hour);
    $stringMinute = signMinuts($minute);

    return "$stringHour $stringMinute";
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
        <h3><?php echo $taskOneHead; ?></h3>
        <p><?php echo branching($brunchArg1, $brunchArg2); ?></p>
        <h3><?php echo $taskTwoHead; ?></h3>
        <p><?php echo switchTask($varToSwitch); ?></p>
        <h3><?php echo $taskThreeHead; ?></h3>
        <p><?php
            echo summation($mathVar1, $mathVar2);
            echo subtraction($mathVar1, $mathVar2);
            echo multiplication($mathVar1, $mathVar2);
            echo division($mathVar1, $mathVar2);
            ?>
        </p>
        <h3><?php echo $taskFourHead; ?></h3>
        <p><?php echo calculator($calcVar1, $calcVar2, $operation); ?></p>
        <h3><?php echo $taskSixHead; ?></h3>
        <p><?php echo power($val, $pow); ?></p>
        <h3><?php echo $taskSevenHead; ?></h3>
        <p><?php echo showTime(); ?></p>
    </section>
    <hr>
    <footer><?php echo $currentYear; ?></footer>
</body>
</html>