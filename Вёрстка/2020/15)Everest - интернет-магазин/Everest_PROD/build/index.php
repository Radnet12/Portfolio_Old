<?php 
    $page_title = "Продуктовый маркет 'Everest' в Славянске с доставкой на дом - Главная страница";
    $isCatalog = 0;
    include('./templates/_head.php');
    require('./config.php');
    include('./templates/_header.php');
?>
        <main>
            <section class="main">
                <div class="container">
                    <div class="main__offer">
                        <h1 class="main__title">
                            Продуктовый маркет "Everest"
                        </h1>
                        <div class="main__subtitle">
                            Доставка Ваших желаний
                        </div>
                    </div>
                    <div class="btn">
                        <a href="catalog.php">
                            Перейти в каталог
                        </a>
                    </div>
                </div>
            </section>
            <section class="catalog">
                <div class="container">
                    <h2 class="title">
                        Наши товары
                    </h2>
                    <div class="catalog__content content">
                        <?php
                            $sql = "SELECT * FROM products LIMIT 12";
                            $result = $db->query($sql);
                            $products = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach($products as $product) {
                                include('./templates/_product-item.php');
                            }
                        ?>
                    </div>
                    <div class="catalog__link">
                        <a href="catalog.php">
                            Смотреть весь каталог
                        </a>
                    </div>
                </div>
            </section>
            <section class="advantage">
                <div class="container">
                    <h2 class="title">
                        Наши преимущества
                    </h2>
                    <div class="advantage__column">
                        <ul class="advantage__row">
                            <li class="advantage__item">
                                <svg>
                                    <use xlink:href='img/svg/sprite.svg#clock'></use>
                                </svg>
                                У нас собственный склад, это позволяет сократить время доставки и собрать Ваш заказ быстрее
                            </li>
                            <li class="advantage__item">
                                <svg>
                                    <use xlink:href='img/svg/sprite.svg#warranty'></use>
                                </svg>
                                Мы гарантируем качество товара и контролируем срок годности
                            </li>
                        </ul>
                        <ul class="advantage__row">
                            <li class="advantage__item">
                                <svg>
                                    <use xlink:href='img/svg/sprite.svg#car'></use>
                                </svg>
                                Доставляем на машинах, исключительно в защитных масках и перчатках.
                            </li>
                            <li class="advantage__item">
                                <svg>
                                    <use xlink:href='img/svg/sprite.svg#24-7'></use>
                                </svg>
                                Доставляем без выходных по г. Славянск и в его районы
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <?php include('./templates/_contacts.php'); ?>
            <?php include('./templates/_cart.php'); ?>
            <?php include('./templates/_modal-order.php'); ?>
            <?php include('./templates/_floating-cart.php'); ?>
        </main>
<?php include('./templates/_footer.php'); ?>