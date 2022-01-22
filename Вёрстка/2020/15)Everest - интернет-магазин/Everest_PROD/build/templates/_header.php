<header class="header <?php if ($additional_class) {echo ($additional_class);}?>">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__mobile-btns">
                <button class="header__burger" aria-label="Открыть или закрыть навигационное меню по сайту ">
                    <span></span>
                </button>
                <div class="header__mobile mobile">
                    <svg>
                        <use xlink:href='img/svg/sprite.svg#mobile'></use>
                    </svg>
                    <div class="mobile__dropdown">
                        <a href="tel:+380958045102">+38 (095) - 80 - 45 - 102</a>
                        <a href="tel:+380682204208">+38 (068) - 22 - 04 - 208</a>
                    </div>
                </div>
            </div>
            <div class="logo">
                <a href="/">
                <?php 
                    if ($additional_class) {
                        echo ('<img src="img/decorations/logo-black.png" alt="Logo" width="116" height="45">');
                    } else {
                        echo ('<img src="img/decorations/logo-white.png" alt="Logo" width="116" height="45">');
                    }
                ?>
                </a>
            </div> 
            <nav class="header__nav <?php if ($isCatalog == 0) echo('header__nav_centered'); ?>">
                <ul class="header__list">
                    <?php if ($isCatalog == 1) { ?>
                        <li class="header__item header__item_drop">
                            <a class="header__link" href="catalog.php">Каталог</a>
                            <ul class="catalog-drop">
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=vegetables">
                                        Овощи, зелень
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=vegetables">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=vegetables&subcategory=vegetable">Овощи</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=vegetables&subcategory=green">Зелень</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fruits-nuts">
                                        Фрукты, орехи
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fruits-nuts">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fruits-nuts&subcategory=fruits">Фрукты</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fruits-nuts&subcategory=berries">Ягоды</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fruits-nuts&subcategory=dried">Сухофрукты</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fruits-nuts&subcategory=nuts">Орехи</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="catalog-drop__item">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=bread">Хлеб</a>
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery">
                                        Бакалея и крупы
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery&subcategory=flour">Мука</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery&subcategory=pasta">Макароны </a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery&subcategory=flake">Хлопья</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery&subcategory=flake800">Хлопья 800 гр</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link"  href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery&subcategory=cropsweight">Весовая бакалея</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link"  href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery&subcategory=bulgur">Булгур</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link"  href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery&subcategory=buckwheat">Гречневая и гороховая</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link"  href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery&subcategory=rice">Рисовая</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link"  href="<?php $_SERVER['SCRIPT_NAME']?>?category=grocery&subcategory=cropsanother">Крупа остальная</a>
                                        </li>
                                    </ul>       
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat">
                                        Мясо и колбаса
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat&subcategory=fresh">Свежина</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat&subcategory=meatfrozen">Мясо свежеморожённое</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat&subcategory=meatall">Мясные изделия</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat&subcategory=sausage">Сосиски и сардельки</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat&subcategory=sausageboiled">Колбаса варёная</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat&subcategory=sausagesmoked">Колбаса полукопчёная</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat&subcategory=sausageuncooked">Колбаса сырокопчёная</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=meat&subcategory=pate">Паштеты</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy">
                                        Молочные продукты
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy&subcategory=milk">Молоко</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy&subcategory=cream">Сливки</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy&subcategory=butter">Масла сливочные</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy&subcategory=sourcream">Cметана</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy&subcategory=kefir">Кефир</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy&subcategory=yoghurtdrink">Йогурт питьевой</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy&subcategory=yoghurt">Йогурт густой</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy&subcategory=curd">Творог</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=dairy&subcategory=ferment">Ряженка</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=cheese">
                                        Сыры и яйца
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=cheese">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=cheese&subcategory=solid">Сыр твёрдый</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=cheese&subcategory=fused">Сыр плавленый</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=cheese&subcategory=packaging">Сыры в упаковке</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=cheese&subcategory=eggs">Яйца</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=oil">
                                        Масла растительные
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=oil">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=oil&subcategory=refined">Подсолнечное рафинированое</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=oil&subcategory=unrefined">Подсолнечное нерафинированое</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=oil&subcategory=olive">Оливковое</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=oil&subcategory=pumpkin">Тыквенное</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=oil&subcategory=linen">Льняное</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=oil&subcategory=corn">Кукурузное</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces">
                                        Соусы,заправки
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces&subcategory=sauce">Соусы</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces&subcategory=ketchup">Кетчупы</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces&subcategory=mayo">Майонез</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces&subcategory=mustard">Горчица</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces&subcategory=tomato">Томатная паста</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces&subcategory=marinade">Маринады</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces&subcategory=fill">Заправки</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces&subcategory=soy">Соевые соусы</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=sauces&subcategory=radish">Хрен</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=conservation">
                                        Консервация
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=conservation">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=conservation&subcategory=adjika">Аджика</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=conservation&subcategory=peas">Горошек и кукуруза</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=conservation&subcategory=mushroom">Грибы</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=conservation&subcategory=olives">Оливки и маслины</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=conservation&subcategory=squash">Икра кабачковая и фасоль</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=conservation&subcategory=tomato">Огурцы и томаты</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=conservation&subcategory=pickles">Соления</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fish">
                                        Рыба и рыбные изделия
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fish">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fish&subcategory=smoked">Рыба копчёная</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fish&subcategory=fresh">Рыба свежемороженая</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fish&subcategory=canned">Рыбные консервы</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fish&subcategory=preserve">Рыбные пресервы</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=fish&subcategory=roe">Икра</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=hotdrinks">
                                        Кофе, Чай
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=hotdrinks">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=hotdrinks&subcategory=coffee">Кофе</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=hotdrinks&subcategory=tea">Чай</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=hotdrinks&subcategory=another">Остальные напитки</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=drinks">
                                        Вода,напитки,соки
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=drinks">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=drinks&subcategory=water">Вода</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=drinks&subcategory=drink">Напитки</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=drinks&subcategory=juice">Соки</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=spice">
                                        Специи,приправы
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=spice">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=spice&subcategory=pepper">Перцы</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=spice&subcategory=green">Зелень и травы</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=spice&subcategory=spices">Специи</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=spice&subcategory=condiment">Приправы</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=spice&subcategory=salt">Приправы без соли</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="catalog-drop__item">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=culinary">
                                        Кулинарные добавки
                                    </a>
                                </li>
                                <li class="catalog-drop__item catalog-drop__item_hovered">
                                    <a class="catalog-drop__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=bakery">
                                        Кондитерские изделия
                                        <svg>
                                            <use xlink:href='img/svg/sprite.svg#right-arrow'></use>
                                        </svg>
                                    </a>
                                    <ul class="catalog-drop__drop-list drop-list">
                                        <li class="drop-list__item drop-list__item_all">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=bakery">Показать все товары</a>
                                        </li>
                                        <li class="drop-list__item">
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=bakery&subcategory=сandy">Конфеты</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=bakery&subcategory=biscuit">Печенье</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=bakery&subcategory=chocolate">Шоколад</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=bakery&subcategory=condensed">Сгущённое молоко</a>
                                        </li>
                                        <li class="drop-list__item" >
                                            <a class="drop-list__link" href="<?php $_SERVER['SCRIPT_NAME']?>?category=bakery&subcategory=another">Остальное</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <li class="header__item"><a href="catalog.php" class="header__link">Каталог</a></li>
                    <?php } ?>
                    <li class="header__item"><a href="#contacts" class="header__link">Контакты</a></li>
                    <li class="header__item"><a href="delivery.php" class="header__link">Доставка и оплата</a></li>
                </ul>
            </nav>
            <div class="header__phones">
                <div class="header__phone">
                    <a href="tel:+380958045102">+38 (095) - 80 - 45 - 102</a>
                </div>
                <div class="header__phone-dropdown">
                    <a href="tel:+380682204208">+38 (068) - 22 - 04 - 208</a>
                </div>
            </div>
            <div class="header__icons">
                <div class="header__mobile mobile">
                    <svg>
                        <use xlink:href='img/svg/sprite.svg#mobile'></use>
                    </svg>
                    <div class="mobile__dropdown">
                        <a href="tel:+380958045102">+38 (095) - 80 - 45 - 102</a>
                        <a href="tel:+380682204208">+38 (068) - 22 - 04 - 208</a>
                    </div>
                </div>
                <form class="header__search">
                    <input class="header__input" type="text" name="search" placeholder="Поиск..." aria-label="Поле поиска товара">
                    <svg>
                        <use xlink:href='img/svg/sprite.svg#search'></use>
                    </svg>
                </form>
                <div class="header__cart">
                    <svg>
                        <use xlink:href='img/svg/sprite.svg#cart'></use>
                    </svg>
                    <span class="header__cart-counter">0</span>
                </div>
            </div>
        </div>
    </div>
</header>