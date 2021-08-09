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
<form action="/Lesson9/addProduct.php" method="post" enctype="multipart/form-data">
    <p>Введите наименование товара: <input type="text" name="name"></p>
    <p>Введите описание товара: <textarea name="description"></textarea></p>
    <p>Укажите цену товара: <input type="number" min="1" step="any" name="price"/></p>
    <input type="file" name="img">
    <button type="submit">Отправить файл</button>
</form>
<h1>Редактирование товара</h1>
<form action="/Lesson9/editProduct.php" name="edit_product" method="post">
    <select name="products">
        <?php foreach ($this->data['products'] as $product) { ?>
            <option value="<?php echo '{"id: ' . $product->getId() . '","name": "' . $product->getName() . '","description": "' . $product->getDescription() . '","path": "' . $product->getPath() . '"}'; ?>"><?php echo $product->getName(); ?></option>
        <?php } ?>
    </select>
    <button type="submit">Ок</button>
</form>
</body>
</html>