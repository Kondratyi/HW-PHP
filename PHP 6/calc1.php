<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post" action="calc1.php">
        <input type="number" name="firstOperand">
        <input type="number" name="secondOperand">
        <select name="operation">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="submit" name="send">
    </form>

    <p>
        <?php
        if ($_POST["operation"] == "plus") {
            echo (int)$_POST["firstOperand"] + (int)$_POST["secondOperand"];
        } else if ($_POST["operation"] == "minus") {
            echo (int)$_POST["firstOperand"] - (int)$_POST["secondOperand"];
        } else if ($_POST["operation"] == "multiplication") {
            echo (int)$_POST["firstOperand"] * (int)$_POST["secondOperand"];
        } else if ($_POST["operation"] == "division" && (int)$_POST["secondOperand"] != 0) {
            echo (int)$_POST["firstOperand"] * (int)$_POST["secondOperand"];
        }
        ?>
    </p>

</body>
</html>