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
