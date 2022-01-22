<?php 
    $page_title = "Правила доставки и условия оплаты товара в магазине 'Everest' в Славянске - Страница доставки и оплаты";
    $isCatalog = 0;
    $additional_class = "header__page";
    include('./templates/_head.php');
    require('./config.php');
    include('./templates/_header.php');
?>
        <main>
            <section class="delivery">
                <div class="container">
                    <h1 class="title">
                        Условия доставки и оплаты
                    </h1>
                    <ul class="delivery__list">
                        <li class="delivery__item">Заявки принимаются <span>с 7:30 до 18:30.</span></li>
                        <li class="delivery__item">
                            Весь заказанный товар доставляется в течении 60 минут после заказа
                            согласно графику
                        </li>
                        <li class="delivery__item">
                            Минимальная сумма заказа <span>по городу</span> составляет - 200 грн.
                        </li>
                        <li class="delivery__item">
                            Минимальная сумма заказа <span>по району</span> составляет 300грн.
                        </li>
                        <li class="delivery__item">
                            Вы можете лично забрать свой заказ в нашем магазине по адресу: <span>ул.Банковская 95 б</span>
                        </li>
                    </ul>
                </div>
            </section>
            <?php include('./templates/_contacts.php'); ?>
            <?php include('./templates/_cart.php'); ?>
            <?php include('./templates/_modal-order.php'); ?>
        </main>
<?php include('./templates/_footer.php'); ?>