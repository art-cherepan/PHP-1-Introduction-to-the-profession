<!doctype html>
<htmd lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unit #1</title>
</head>
<body>
<?php
	var_dump(3 / 1); //деление целого числа на целое число. Результат - целое число
	var_dump(1 / 3); //деление целого числа на целое число. Результат - вещественное число.
	var_dump('20cats' + 40); //строка '20cats' преобразуется в целое число 20. Результат - целое число
	var_dump(18 % 4); //целочисленный остаток от деления 18 на 4. Результат - целое чило
	echo ($a = 2); //вместо переменной $a подставится значение 2. После этого оно выведется на экран
	$x = ($y = 12) - 8; //вместо переменной $y подставится значение 12, затем от этого значения отнимется 8, после этого это значение подставится в переменную $x, которая станет равной 4
	echo $x;
	var_dump(1==1.0); //true, т.к. сравнение с приведением типов
	var_dump(1===1.0); //false, т.к. строгое сравнение (сравниваются значения и типы операндов)
	var_dump('02'==2); //true, т.к. строка приведется к целому числу 2
	var_dump('02'===2); //false, т.к. строгое сравнение
	var_dump('02'=='2'); //true, т.к. обе строки приведутся к числу 2
?>
</html>