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
<?php
foreach ($this->data['articles'] as $article) { ?>
    <a href="<?php echo '/Lesson7/article.php?id='.$article->getId(); ?>"><?php echo $article->getHeading(); ?></a>
    <article><?php echo $article->getShortText(); ?></article>
    <?php
}
?>
</body>
</html>