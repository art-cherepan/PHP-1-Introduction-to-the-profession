<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница администрирования</title>
</head>
<body>
<h1>Добавление товара</h1>
<form action="/Lesson9/services/addProduct.php" method="post" name="add_product" enctype="multipart/form-data">
    <p>Введите наименование товара: <input type="text" name="name"></p>
    <p>Введите описание товара: <textarea name="description"></textarea></p>
    <p>Укажите цену товара: <input type="number" min="1" step="any" name="price"/></p>
    <input type="file" name="img">
    <button type="submit">Отправить файл</button>
</form>
<h1>Редактирование товара</h1>
<form action="/Lesson9/services/editProduct.php" name="edit_product_form" method="post">
    <select name="edit_product_select">
        <?php foreach ($this->data['products'] as $product) { ?>
            <option value="<?php echo $product->getId() . '&&&' . $product->getName() . '&&&' . $product->getPrice() . '&&&' . $product->getDescription() . '&&&' . $product->getPath(); ?>"><?php echo $product->getName(); ?></option>
        <?php } ?>
    </select>
    <button type="submit">Ок</button>
</form>
<h1>Удаление товара</h1>
<form action="/Lesson9/services/deleteProduct.php" name="delete_product_form" method="post">
    <select name="delete_product_select">
        <?php foreach ($this->data['products'] as $product) { ?>
            <option value="<?php echo $product->getId() . '&&&' . $product->getName() . '&&&' . $product->getPrice() . '&&&' . $product->getDescription() . '&&&' . $product->getPath(); ?>"><?php echo $product->getName(); ?></option>
        <?php } ?>
    </select>
    <button type="submit">Удалить</button>
</form>
</body>
</html>