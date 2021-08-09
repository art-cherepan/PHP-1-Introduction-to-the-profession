<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>

<?php
    foreach ($this->data['products'] as $product) {
?>
<div>
    <p><img src="<?php echo $product->getPath(); ?>" width="200" height="200"></p>
    <p>Название: <?php echo $product->getName(); ?></p>
    <p>Описание: <?php echo $product->getDescription(); ?></p>
    <p>Цена: <?php echo $product->getPrice(); ?></p>
    <?php
    if ($product->setReviews() == true) {
        ?>
    <p>Комментарии:</p>
    <?php
        if (NULL != $product->getReviews()) { foreach ($product->getReviews() as $review) { ?>
        <p><?php echo $review->getText(); ?></p>
        <p><?php echo $review->getDate(); ?></p>
        <p><?php echo $review->getIdUser(); ?></p>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    <?php } ?>
</div>
</body>
</html>