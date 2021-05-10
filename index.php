<!--Задание 1-->
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
    <table cellspacing="2" border="1" cellpadding="5">
        <tr>
            <td align="center">
                <?php echo 'A' ?>
            </td>
            <td align="center">
                <?php echo 'B' ?>
            </td>
            <td align="center">
                <?php echo 'A AND B' ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo (int)(0 && 0) ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo (int)(0 && 1) ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo (int)(1 && 0) ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo (int)(1 && 1) ?>
            </td>
        </tr>
    </table>
    <br/>
    <table cellspacing="2" border="1" cellpadding="5">
        <tr>
            <td align="center">
                <?php echo 'A' ?>
            </td>
            <td align="center">
                <?php echo 'B' ?>
            </td>
            <td align="center">
                <?php echo 'A OR B' ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo (int)(0 || 0) ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo (int)(0 || 1) ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo (int)(1 || 0) ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo (int)(1 || 1) ?>
            </td>
        </tr>
    </table>
    <br/>
    <table cellspacing="2" border="1" cellpadding="5">
        <tr>
            <td align="center">
                <?php echo 'A' ?>
            </td>
            <td align="center">
                <?php echo 'B' ?>
            </td>
            <td align="center">
                <?php echo 'A XOR B' ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo (int)(0 xor 0) ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo (int)(0 xor 1) ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo 0 ?>
            </td>
            <td align="center">
                <?php echo (int)(1 xor 0) ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo 1 ?>
            </td>
            <td align="center">
                <?php echo (int)(1 xor 1) ?>
            </td>
        </tr>
    </table>
</body>
</html>

<!--Задание 2-->
<?php
include __DIR__ . '/functions.php';

    $a = 1;
    $b = 5;
    $c = 3;
    $res = diskriminant($a, $b, $c);
    if ($res < 0) {
        echo 'Уравнение не имеет корней';
    }
    elseif ($res == 0) {
        echo 'Уравнение имеет единственный корень: '. -$b / 2 * $a;
    }
    else {
        echo 'Уравнение имеет два корня: '. (-$b - sqrt($res)) / 2 * $a . ' и '. (-$b + sqrt($res)) / 2 * $a;
    }

    //Задание 3
    //если include использовать в качестве функции, то результатом будет то, что идет после return в подключаемом файле, либо 1, если return отсутсвует-->
    $foo = include(__DIR__ . '/return.php'); //результат include - 'Hello!'
    $bar = include(__DIR__ . '/non_return.php'); //результат include - 1, т.к. в подключаемом файле отсутсвует return
    echo $foo;
    echo $bar;

    //Задание 4
    $name = 'Алина';
    $res = get_sex_by_name($name);
    if ($res === 'male') {
        echo 'Мужчина';
    }
    elseif (res === 'female') {
        echo 'Женщина';
    }
    else {
        echo 'Пол не определен';
    }
?>