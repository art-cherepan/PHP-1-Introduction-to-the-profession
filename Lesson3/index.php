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
    <!--Задание 1.2-->
    <form action="http://localhost/Lesson3/calculator.php" method="get">
        number1 = <input type="number" name="numb1"><br/>
        number2 = <input type="number" name="numb2"><br/>
        Choose the operation: <select name="operation">
            <option selected value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="Равно">
    </form>

    <!--Задание 1.3-->
    <form method="get" action="">
        number1 = <input type="number" name="numb1" value="<?php if (isset($_GET['numb1'])) {
            echo $_GET['numb1'];
        } ?>"><br/>
        number2 = <input type="number" name="numb2" value="<?php if (isset($_GET['numb2'])) {
            echo $_GET['numb2'];
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
        if ($_GET) {
            switch ($_GET['operation']) {
                case '+':
                    echo $_GET['numb1'].' + '.$_GET['numb2'].' = '.strval((int)$_GET['numb1'] + (int)$_GET['numb2']);
                    break;
                case '-':
                    echo $_GET['numb1'].' - '.$_GET['numb2'].' = '.strval((int)$_GET['numb1'] - (int)$_GET['numb2']);
                    break;
                case '*':
                    echo $_GET['numb1'].' * '.$_GET['numb2'].' = '.strval((int)$_GET['numb1'] * (int)$_GET['numb2']);
                    break;
                case '/':
                    echo $_GET['numb1'].' / '.$_GET['numb2'].' = '.strval((int)$_GET['numb1'] / (int)$_GET['numb2']);
                    break;
                default:
                    echo 'Арифметическая операция не распознана';
            }
        }
    ?>
</body>
</html>