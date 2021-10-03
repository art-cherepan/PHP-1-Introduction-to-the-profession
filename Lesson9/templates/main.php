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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Lesson9/css/bootstrap.min.css">
    <!--собственные стили-->
    <link rel="stylesheet" href="/Lesson9/css/styles.css">
    <!-- Bootstrap JS + Popper JS -->
    <script defer src="/Lesson9/js/bootstrap.bundle.min.js"></script>
    <title>Главная страница</title>
</head>

<body class="body-color">

<div class="wrapper">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-4 col-md-3 header-username-style">
                    <?php if (!empty($_SESSION['userName'])) { ?>
                        <div class="d-flex justify-content-end">Вы вошли как
                            <strong>&nbsp;
                                <?php echo $_SESSION['userName']; ?>
                            </strong>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <a href="/Lesson9/contacts.php">Связаться с нами</a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <a href="/Lesson9/registration.php">Регистрация</a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <a href="/Lesson9/authorization.php">Войти</a>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <h1>Товары</h1>
                    </div>
                </div>
            </div>
            <div id="carouselProducts" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-between">
                            <?php foreach ($this->data['products'] as $product) { ?>
                                <div class="col">
                                    <div class="card w-100">
                                        <img src="<?php echo $product->getPath(); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up
                                                the bulk
                                                of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-between">
                            <?php foreach ($this->data['products'] as $product) { ?>
                                <div class="col">
                                    <div class="card w-100">
                                        <img src="<?php echo $product->getPath(); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up
                                                the bulk
                                                of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselProducts"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselProducts"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <h1>Услуги</h1>
                    </div>
                </div>
            </div>
            <div id="carouselServices" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-between">
                            <?php foreach ($this->data['services'] as $service) { ?>
                                <div class="col">
                                    <div class="card w-100">
                                        <img src="<?php echo $service->getPath(); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up
                                                the bulk
                                                of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-between">
                            <?php foreach ($this->data['services'] as $service) { ?>
                                <div class="col">
                                    <div class="card w-100">
                                        <img src="<?php echo $service->getPath(); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up
                                                the bulk
                                                of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselServices"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselServices"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <img src="/Lesson9/media/vk.png" width="30px" height="30px">
                    <img src="/Lesson9/media/instagram.png" width="30px"
                         height="30px">
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>