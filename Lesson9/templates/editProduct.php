<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование товара</title>
</head>
<body>
<h1>Редактирование товара <?php echo $this->data['productFields'][1]; ?></h1>
<form action="/Lesson9/services/changeProduct.php" method="post" enctype="multipart/form-data">
    <p>Идентификатор товара: <input type="text" name="id" value="<?php echo $this->data['productFields'][0]; ?>"/></p>
    <p>Наименование товара: <input type="text" name="name" value="<?php echo $this->data['productFields'][1]; ?>"/></p>
    <p>Описание товара: <textarea name="description"><?php echo $this->data['productFields'][3]; ?></textarea></p>
    <p>Цена товара: <input type="number" min="1" step="any" name="price" value="<?php echo $this->data['productFields'][2]; ?>"/></p>
    <input type="file" name="img"/>
    <button type="submit">Изменить товар</button>
</form>
</body>
</html>