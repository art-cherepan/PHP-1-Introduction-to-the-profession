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
    <form method="get" action="/Lesson3/calculator.php">
        number1 = <input type="number" name="number1" value="<?php if (isset($_GET['number1'])) {
            echo $_GET['number1'];
        } ?>"><br/>
        number2 = <input type="number" name="number2" value="<?php if (isset($_GET['number2'])) {
            echo $_GET['number2'];
        } ?>"><br/>
        Choose the operation: <select name="operation">
            <option selected value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="Равно">
    </form>
    <?php
    if (isset($_GET['operation'])) {
        include __DIR__.'/functions.php';
        switch ($_GET['operation']) {
            case '+':
                echo $_GET['number1'].' + '.$_GET['number2'].' = '.strval(add((int)$_GET['number1'], (int)$_GET['number2']));
                break;
            case '-':
                echo $_GET['number1'].' - '.$_GET['number2'].' = '.strval(sub((int)$_GET['number1'], (int)$_GET['number2']));
                break;
            case '*':
                echo $_GET['number1'].' * '.$_GET['number2'].' = '.strval(mult((int)$_GET['number1'], (int)$_GET['number2']));
                break;
            case '/':
                echo $_GET['number1'].' / '.$_GET['number2'].' = '.strval(div((int)$_GET['number1'], (int)$_GET['number2']));
                break;
            default:
                echo 'Арифметическая операция не распознана';
        }
    }
    ?>
</body>
</html>
