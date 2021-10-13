<?php

//Задание 1
$headTaskOne = 'Задание 1';

$a = 0;

function divisionOnThree($num) {

    while($num <= 100) {
        if($num % 3 === 0){
            echo "$num ";
        }
        $num++;
    }
}

//Задание 2
$headTaskTwo = 'Задание 2';

function evenAndOdd($num) {

    do {
        if($num === 0) {
            echo "Это 0<br>";
        } else if($num % 2 === 0) {
            echo "$num - четное число <br>";
        } else {
            echo "$num - нечетное число <br>";
        }
        $num++;
    } while($num <= 10);
}

//Задание 3
$headTaskThree = 'Задание 3';

$arrOfCities = [
    "Приморский край" => [
        "Артём",
        "Владивосток",
        "Находка",
        "Уссурийск",
    ],
    "Хабаровский край" => [
        "Хабаровск",
        "Комсомольск-на-Амуре",
        "Николаевск-на-Амуре",
        "Советская Гавань",
    ],
    "Амурская область" => [
        "Благовещенск",
        "Зея",
        "Райчихинск",
        "Свободный",
    ],
];

function showCities($cities) {

    $length = count($cities);

    for($i = 0; $i < $length; $i++) {
        if($i === ($length - 1)) {
            echo "$cities[$i].<br>";
        } else {
            echo "$cities[$i], ";
        }
    }
}

function showRegions($arr) {

    foreach ($arr as $region => $cities) {
        echo "$region:<br>";
        showCities($cities);
    }
}

//Задание 4
$headTaskFour = 'Задание 4';

$traslitLetters = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'jo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'c',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shh',
    'ъ' => '#',
    'ы' => 'y',
    'ь' => '\'',
    'э' => 'je',
    'ю' => 'ju',
    'я' => 'ja',
];

$wordNeedToTraslit = 'переводчик';

function traslit($word, $arr) {

    $wordToArr = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);

    $newWord = [];

    foreach($wordToArr as $key => $val) {
        if(array_key_exists($val, $arr)) {
            $newWord[] = $arr[$val];
        }
    }

    echo implode('', $newWord);
}

//Задание 5
$headTaskFive = 'Задание 5';

$stringWithSpaces = "H e l l o";

function changeDelimiters($string) {
    $string = implode("_", explode(" ", $string));
    echo $string;
}


//Задание 6
$headTaskSix = 'Задание 6';

$listTags = [
    "ul" => [
        "<ul type=\"disc\">",
        "</ul>"
    ],
    "li" => [
        "<li>",
        "</li>"
    ],
];

function addList($arr, $quantityElements) {
    $returnList = '';
    for($i = 1; $i <= $quantityElements; $i++) {
        if($quantityElements === 1) {
            echo $arr["ul"][0], $arr["li"][0], $i, $arr["li"][1], $arr["ul"][1];
        } else if($quantityElements != 1 && $i === 1) {
            echo $arr["ul"][0], $arr["li"][0], $i, $arr["li"][1];
        } else if($quantityElements != 1 && $i === $quantityElements) {
            echo $arr["li"][0], $i, $arr["li"][1], $arr["ul"][1];
        } else {
            echo $arr["li"][0], $i,$arr["li"][1];
        }
    }
}



//Задание 7
$headTaskSeven = 'Задание 7';

function taskSeven() {
    for($i = 0; $i <= 10; print $i++);
}

//Задание 8
$headTaskEight = 'Задание 8';

function findCities($cities, $letter) {

    foreach($cities as $key => $value) {
        $newArr = preg_split('//u', $value, -1, PREG_SPLIT_NO_EMPTY);
        if($newArr[0] == $letter) {
            echo $value;
        }
    }

}

function citiesFirstLetter($arr, $letter){
    foreach ($arr as $region => $cities) {
        findCities($cities, $letter);
    }
}

//Задание 9
$headTaskNine = 'Задание 9';

$string = 'раз два три четыре';

function stringToArr($string, &$words) {
    $words = explode(' ', $string);
}

function wordsToArr(&$words) {

    foreach ($words as $key => $value) {
        $value = preg_split('//u', $value, -1, PREG_SPLIT_NO_EMPTY);
        $words[$key] = $value;
    }
}

function wordsTranslit(&$words, $arr) {

    foreach ($words as $key => $value){
        foreach ($value as $position => $element){
            if(array_key_exists($element, $arr)) {
                $words[$key][$position] = $arr[$element];
            }
        }
    }
}

function arrToWords(&$words) {
    
    foreach ($words as $key => $value){
        $words[$key] = implode('', $value);
    }
    $words = implode('_', $words);
}

function traslitAndDelimit($string, $arr) {
    $words = [];

    stringToArr($string, $words);
    wordsToArr($words);
    wordsTranslit($words, $arr);
    arrToWords($words);
    echo $words;
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
        <h3><?php echo $headTaskOne; ?></h3>
        <p><?php echo divisionOnThree($a); ?></p>
        <h3><?php echo $headTaskTwo; ?></h3>
        <p><?php echo evenAndOdd($a); ?></p>
        <h3><?php echo $headTaskThree; ?></h3>
        <p><?php showRegions($arrOfCities); ?></p>
        <h3><?php echo $headTaskFour; ?></h3>
        <p><?php traslit($wordNeedToTraslit, $traslitLetters); ?></p>
        <h3><?php echo $headTaskFive; ?></h3>
        <p><?php changeDelimiters($stringWithSpaces); ?></p>
        <h3><?php echo $headTaskSix; ?></h3>
        <p><?php echo addList($listTags, 7) ?></p>
        <h3><?php echo $headTaskSeven; ?></h3>
        <p><?php echo taskSeven(); ?></p>
        <h3><?php echo $headTaskEight; ?></h3>
        <p><?php echo citiesFirstLetter($arrOfCities, 'В'); ?></p>
        <h3><?php echo $headTaskNine; ?></h3>
        <p><?php traslitAndDelimit($string, $traslitLetters); ?></p>
    </section>
    <footer></footer>
</body>
</html>