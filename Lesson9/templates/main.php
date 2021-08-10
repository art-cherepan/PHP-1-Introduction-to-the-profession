<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        if (NULL != $product->getReviews()) { foreach ($product->getReviews() as $review) { $review->setUser(); ?>
            <p><?php echo $review->getText(); ?></p>
            <p><?php echo $review->getDate(); ?></p>
            <p><?php echo $review->getUser()->getFirstName() . ' ' . $review->getUser()->getSecondName() . ' ' . $review->getUser()->getPatronymic(); ?></p>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    <?php } ?>
</div>
</body>
</html>