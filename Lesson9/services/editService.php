<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php
require_once __DIR__ . '/../classes/View.php';

if (!empty($_POST['edit_service_select'])) {
    $serviceFields = explode('&&&', $_POST['edit_service_select']);
    $view = new View();
    $view->assign('serviceFields', $serviceFields);
    $view->display(__DIR__ . '/../templates/editService.php');
} else {
    echo 'Данные об услуге не переданы';
}
?>
</body>
</html>

