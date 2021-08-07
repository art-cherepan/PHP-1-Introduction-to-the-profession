<form action="/Lesson9/addProduct.php" method="post"
      enctype="multipart/form-data">
    <p>Введите наименование товара: <input type="text" name="name"></p>
    <p>Введите описание товара: <textarea name="description"></textarea></p>
    <p>Укажите цену товара: <input type="number" min="1" step="any" name="price"/></p>
    <input type="file" name="img">
    <button type="submit">Отправить файл</button>
</form>

