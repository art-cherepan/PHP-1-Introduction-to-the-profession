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
    <!--собственные стили-->
    <link rel="stylesheet" href="/Lesson9/css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap JS + Popper JS -->
    <script defer src="js/bootstrap.bundle.min.js"></script>
    <title>Главная страница</title>
</head>

<body class="body-color">

<div class="nav">
    <div class="container">
        <div class="row">
            <div class="col-4 div-left">
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
</div>

<div class="content">
    <div class="container">
        <?php
        $index = 0;
        foreach ($this->data['products'] as $product) {
            if ($index % 3 == 0) { ?>
                <div class="row">
                <?php
                $index++;
            }
            ?>

            <div class="col-6 card-view">
                <p class="product-header-name"><?php
                    echo $product->getName(); ?></p>
                <p class="product-header-price">Цена: <?php
                    echo $product->getPrice(); ?></p>

                <a href="/Lesson9/productInfo.php?id=<?php
                echo $product->getId(); ?>"><img width="100%" height="100%"
                                                 src="<?php
                                                 echo $product->getPath(); ?>"></a>
                <?php
                if (true == $product->setReviews()) {
                    if (null != $product->getReviews()) { ?> <p class="comments-view">Комментарии:</p> <?php
                        $index = 1;
                        foreach ($product->getReviews() as $review) {
                            $review->setUser(); ?>
                            <p><span class="comment-nav"><?php
                                    echo '#' . $index . ' ' . $review->getUser()
                                        ->getUserName(); ?></span> <span
                                        class="comment-nav"><?php
                                    echo $review->getDate(); $index++; ?></span></p>
                            <p><span class="comment-text"><?php
                                    echo $review->getText(); ?></span></p>
                            <?php
                        }
                    }
                }
                if (!empty($_SESSION['userName'])) {
                    ?>
                    <hr/>
                    <form method="post"
                          action="/Lesson9/services/addComment.php">
                    <p class="comments-add">Оставьте комментарий: </p>
                        <p><textarea
                                name="commentText" rows="5" cols="75"></textarea>
                    </p>
                    <input type="hidden" name="idProduct" value="<?php
                    echo $product->getId(); ?>">
                    <p>
                        <button type="submit">Ok</button>
                    </p>
                    </form><?php
                } ?>

            </div>

            <?php
            if ($index % 3 == 0) { ?> </div> <?php
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

</body>
</html>