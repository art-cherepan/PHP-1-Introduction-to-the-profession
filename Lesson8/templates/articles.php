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
<?php foreach ($this->data['articles'] as $article) { ?>
<h2><?php echo $article->getHeading() ?></h2>
<article><?php echo $article->getText() ?></article>
<p><?php echo $article->getAuthor() ?></p>
<?php } ?>
</body>
</html>