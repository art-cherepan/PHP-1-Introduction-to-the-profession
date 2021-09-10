<?php

session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Главная страница</title>
</head>

<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                if (!empty($_SESSION['userName'])) { ?> Вы вошли как
                <strong><?php
                    echo $_SESSION['userName'];
                    } ?></strong>
            </div>
            <div class="col-8">
                <a href="/Lesson9/authorization.php">Войти</a>
                <a href="/Lesson9/registration.php">Регистрация</a>
                <a href="/Lesson9/contacts.php">Связаться с нами</a>

            </div>
        </div>
    </div>
</header>

<div class="wrapper">
    <div class="container">
        <?php
        $index = 0;
        foreach ($this->data['products'] as $product) {
            if ($index % 2 == 0) { ?>
                <div class="row">
                <?php
                $index++;
            }
            ?>
            <div class="div-offset"></div>
            <div class="col-6 product-wrapper">

                <p class="product-header-name"><?php
                    echo $product->getName(); ?></p>
                <p class="product-header-price">Цена: <?php
                    echo $product->getPrice(); ?></p>

                <a href="/Lesson9/productInfo.php?id=<?php
                echo $product->getId(); ?>"><img width="400" height="450"
                                                 src="<?php
                                                 echo $product->getPath(); ?>"></a>
                <?php
                if (true == $product->setReviews()) { ?>
                    <?php
                    if (null != $product->getReviews()) {
                        foreach ($product->getReviews() as $review) {
                            $review->setUser(); ?>
                            <p><span class="comment-nav"><?php
                                    echo $review->getUser()
                                        ->getUserName(); ?></span> <span
                                        class="comment-nav"><?php
                                    echo $review->getDate(); ?></span></p>
                            <p><?php
                                echo $review->getText(); ?></p>
                            <?php
                        }
                    }
                }
                if (!empty($_SESSION['userName'])) {
                    ?>
                    <hr>
                    <form method="post"
                          action="/Lesson9/services/addComment.php">
                    <p>Оставьте ваш комментарий:</p>
                    <p>
                        <textarea class="textarea-size"
                                        name="comment"></textarea>
                    </p>
                    <p>
                        <button class="button1" type="submit">Ok</button>
                    </p>
                    <input type="hidden" name="idProduct" value="<?php
                    echo $product->getId(); ?>">
                    </form><?php
                } ?>

            </div>
            <?php
            if ($index % 2 == 0) { ?> </div> <?php
            } ?>
            <?php
        } ?>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <img src="/Lesson9/media/vk.png" width="30px" height="30px">
                <img src="/Lesson9/media/instagram.png" width="30px"
                     height="30px">
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>