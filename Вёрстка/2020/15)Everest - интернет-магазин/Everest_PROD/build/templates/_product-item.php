<?php 
    if (($product["showProduct"]) == 1) {?>
        <article class="product-card" data-id="<?php echo($product["id"]); ?>">
            <div class="product-card__inner">
                <div class="product-card__offer">
                    <?php if ($product["isAvailable"] == 1) { ?>
                        <div class="product-card__available ">
                            В наличии
                        </div>
                    <?php } else { ?>
                        <div class="product-card__available product-card__not-available">
                            Нет в наличии
                        </div>
                    <?php } ?>
                    <div class="product-card__image">
                        <img src="<?php echo($product["imgPath"]); ?>"  alt="<?php echo($product["imgDescr"]);?>" title="<?php echo($product["title"]); ?>" width="195" height="195">
                    </div>
                </div>
                <div class="product-card__info info-card">
                    <span class="info-card__title <?php if ($product["isDescription"] == 0) echo('info-card__title_margin'); ?>">
                        <?php echo($product["title"]); ?>
                    </span>
                    <?php if ($product["isDescription"] == 1) { ?>
                        <div class="info-card__descr">
                            Описание
                            <div class="info-card__descr-body" data-simplebar>
                                <?php if ($product["descrName"] !== NULL) { ?>
                                    <p><span>Название:</span> <?php echo($product["descrName"]); ?></p>
                                <?php } ?>
                                <?php if ($product["descrWeight"] !== NULL) { ?>
                                    <p><span>Масса нетто:</span> <?php if ($product["descrWeight"] !== 0) {echo($product["descrWeight"]);}?></p>
                                <?php } ?>
                                <?php if ($product["descrProducer"] !== NULL) { ?>
                                    <p><span>Производитель:</span> <?php echo($product["descrProducer"]); ?></p>
                                <?php } ?>
                                <?php if ($product["descrConsist"] !== NULL) { ?>
                                    <p><span>Состав:</span> <?php echo($product["descrConsist"]); ?></p>
                                <?php } ?>
                                <?php if ($product["descrPackage"] !== NULL) { ?>
                                    <p><span>Вид упаковки:</span> <?php echo($product["descrPackage"]); ?></p>
                                <?php } ?>
                                <?php if ($product["descrDate"] !== NULL) { ?>
                                    <p><span>Срок годности:</span> <?php echo($product["descrDate"]); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($product["isKilogram"] == 1) { ?>
                        <span class="info-card__price">
                            <?php echo($product["price"]);?> грн/кг
                        </span>
                        <span class="info-card__weight">
                            (от <span><?php echo($product["minweight"]);?></span> грамм)
                        </span>
                        <div class="info-card__calc calc">
                            <button class="calc__minus" data-control="minus" aria-label="Уменьшить вес товара на 100 грамм">-</button>
                            <input class="calc__input" value="<?php echo($product["mininputvalue"]); ?>" type="text" data-counter data-min-value="<?php echo($product["mininputvalue"]); ?>" aria-label="Поле для ввода нужного количества товаров в килограммах">
                            <button class="calc__plus" data-control="plus" aria-label="Увеличить вес товара на 100 грамм">+</button>
                            <span class="calc__weight">
                                кг
                            </span>
                        </div>
                    <?php } else { ?>
                        <span class="info-card__price">
                            <?php echo($product["price"]);?> грн/шт
                        </span>
                        <span class="info-card__weight">
                            (от 1 штуки)
                        </span>
                        <div class="info-card__calc calc calc-in-pieces">
                            <button class="calc__minus" data-control="minus" aria-label="Уменьшить количество товара на одну штуку">-</button>
                            <input class="calc__input" value="1" type="text" data-counter data-min-value="1" aria-label="Поле для ввода нужного количества товара в штуках">
                            <button class="calc__plus" data-control="plus" aria-label="Увеличить количество товара на одну штуку">+</button>
                            <span class="calc__weight">
                                шт
                            </span>
                        </div>
                    <?php } ?>
                    <?php if ($product["isAvailable"] == 1) { ?>
                        <button class="info-card__btn" data-add-to-cart aria-label="Добавить товар в корзину">
                            В корзину
                        </button>
                    <?php } else { ?>
                        <button class="info-card__btn info-card__btn_disabled" data-add-to-cart disabled aria-label="Добавить товар в корзину невозможно, товара нет в наличии">
                            В корзину
                        </button>
                    <?php } ?>
                </div>
            </div>
        </article>
    <?php }
?>