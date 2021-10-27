<?php
    function calculate($data){
      $a = (int)$data["firstOperand"];
      $b = (int)$data["secondOperand"];
      $op = $data["operation"];
      switch($op) {
        case ($op == '+'):
            echo $a + $b;
            break;
        case ($op == '-'):
            echo $a - $b;
            break;
        case ($op == '*'):
            echo $a * $b;
            break;
        case (($op == '/' && $b != 0)):
            echo $a / $b;
            break;
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
    <form enctype="multipart/form-data" method="post" action="calc2.php">
        <input type="number" name="firstOperand">
        <input type="number" name="secondOperand">
        <input type="submit" name="operation" value="+">
        <input type="submit" name="operation" value="-">
        <input type="submit" name="operation" value="*">
        <input type="submit" name="operation" value="/">
    </form>

    <p>
        <?php calculate($_POST); ?>
    </p>

</body>
</html>