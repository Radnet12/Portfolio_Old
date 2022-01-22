<?php
    $page_title = "Разнообразный каталог продуктов в магазине 'Everest' с доставкой по Славянску - Страница каталога";
    $additional_class = "header__page";
    $isCatalog = 1;
    include('./templates/_head.php');
    require('./config.php');
    include('./templates/_header.php');
?>
        <main>
            <section class="catalog">
                <div class="container">
                    <h1 class="title">
                        Каталог
                    </h1>
                    <div class="catalog__content content">
                        <?php
                            $per_page  = 28;
                            $limit= 2;

                            if(!is_numeric($page)) $page=1;
                            if ($page<1) $page=1;
                            if (isset($_GET['page']) && $_GET['page'] > 0) {
                                $page = $_GET['page'];
                            }
                            if (!isset($list)) $list=0;
                            $list= --$page * $per_page;

                            if (isset($_GET['category'])) {
                                $category = $_GET['category'];
                                if (isset($_GET['subcategory'])) {
                                    $subcategory = $_GET['subcategory'];
                                    $sql = "SELECT COUNT(*) FROM products WHERE category = '$category' AND subcategory = '$subcategory'";
                                    $result = $db->query($sql);
                                    $num = $result->fetchColumn();
                                    $pages = $num/$per_page;
                                    $pages = ceil($pages);
                                    $pages++;

                                    $sql = "SELECT * FROM products WHERE category = '$category' AND subcategory = '$subcategory' LIMIT $per_page OFFSET $list";
                                    $result = $db->query($sql);
                                    $products = $result->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($products as $product) {
                                        include('./templates/_product-item.php');
                                    }
                                } else {
                                    $sql = "SELECT COUNT(*) FROM products WHERE category = '$category'";
                                    $result = $db->query($sql);
                                    $num = $result->fetchColumn();
                                    $pages = $num/$per_page;
                                    $pages = ceil($pages);
                                    $pages++;

                                    $sql = "SELECT * FROM products WHERE category = '$category' LIMIT $per_page OFFSET $list";
                                    $result = $db->query($sql);
                                    $products = $result->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($products as $product) {
                                        include('./templates/_product-item.php');
                                    }
                                }
                            }  else {
                                $sql = "SELECT COUNT(*) FROM products";
                                $result = $db->query($sql);
                                $num = $result->fetchColumn();
                                $pages = $num/$per_page;
                                $pages = ceil($pages);
                                $pages++;

                                $sql = "SELECT * FROM products LIMIT $per_page OFFSET $list";
                                $result = $db->query($sql);
                                $products = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach($products as $product) {
                                    include('./templates/_product-item.php');
                                }
                            }
                        ?>
                    </div>
                    <ul class="catalog__pagination">
                        <?php 
                            if (isset($_GET['category'])) {
                                if (isset($_GET['subcategory'])) {
                                    if ($page>=1) {
                                        echo '<li class="catalog__pagination-item">
                                                    <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&subcategory='.$subcategory.'&page=1" aria-label="Вернуться на первую страницу с товарами">
                                                        <svg>
                                                            <use xlink:href="img/svg/sprite.svg#double-left-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </li>';
                                        echo '<li class="catalog__pagination-item ">
                                                    <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&subcategory='.$subcategory.'&page=' . $page . '" aria-label="Вернуться на предыдущую страницу с товарами">
                                                        <svg>
                                                            <use xlink:href="img/svg/sprite.svg#left-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </li>';
                                    }
                                    $now = $page+1;
                                    $start = $now-$limit;
                                    $end = $now+$limit;
                                    for ($j = 1; $j<$pages; $j++) {
                                        if ($j>=$start && $j<=$end) {
                                            if ($j==($page+1)) echo '<li class="catalog__pagination-item catalog__pagination-item--active">
                                                                        <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&subcategory='.$subcategory.'&page=' . $j . '">' . $j . '</a>
                                                                    </li>';
                                            else echo '<li class="catalog__pagination-item"><a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&subcategory='.$subcategory.'&page=' . $j . '">' . $j . '</a></li>';
                                        }
                                        
                                    }
                                    if ($j>$page && ($page+2)<$j) {
                                        echo '<li class="catalog__pagination-item ">
                                                    <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&subcategory='.$subcategory.'&page=' . ($page+2) . '" aria-label="Перейти на следующую страницу с товарами">
                                                        <svg>
                                                            <use xlink:href="img/svg/sprite.svg#right-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </li>';
                                        echo '<li class="catalog__pagination-item ">
                                                    <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&subcategory='.$subcategory.'&page=' . ($j-1) . '" aria-label="Перейти на последнюю страницу с товарами">
                                                        <svg>
                                                            <use xlink:href="img/svg/sprite.svg#double-right-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </li>';
                                    }
                                } else { 
                                    if ($page>=1) {
                                        echo '<li class="catalog__pagination-item">
                                                    <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&page=1" aria-label="Вернуться на первую страницу с товарами">
                                                        <svg>
                                                            <use xlink:href="img/svg/sprite.svg#double-left-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </li>';
                                        echo '<li class="catalog__pagination-item ">
                                                    <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&page=' . $page . '" aria-label="Вернуться на предыдущую страницу с товарами">
                                                        <svg>
                                                            <use xlink:href="img/svg/sprite.svg#left-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </li>';
                                    }
                                    $now = $page+1;
                                    $start = $now-$limit;
                                    $end = $now+$limit;
                                    for ($j = 1; $j<$pages; $j++) {
                                        if ($j>=$start && $j<=$end) {
                                            if ($j==($page+1)) echo '<li class="catalog__pagination-item catalog__pagination-item--active">
                                                                        <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&page=' . $j . '">' . $j . '</a>
                                                                    </li>';
                                            else echo '<li class="catalog__pagination-item"><a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&page=' . $j . '">' . $j . '</a></li>';
                                        }
                                        
                                    }
                                    if ($j>$page && ($page+2)<$j) {
                                        echo '<li class="catalog__pagination-item ">
                                                    <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&page=' . ($page+2) . '" aria-label="Перейти на следующую страницу с товарами">
                                                        <svg>
                                                            <use xlink:href="img/svg/sprite.svg#right-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </li>';
                                        echo '<li class="catalog__pagination-item ">
                                                    <a href="' . $_SERVER['SCRIPT_NAME'] . '?category='.$category.'&page=' . ($j-1) . '" aria-label="Перейти на последнюю страницу с товарами">
                                                        <svg>
                                                            <use xlink:href="img/svg/sprite.svg#double-right-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </li>';
                                    }
                                }
                            } else {
                                if ($page>=1) {
                                    echo '<li class="catalog__pagination-item">
                                                <a href="' . $_SERVER['SCRIPT_NAME'] . '?page=1" aria-label="Вернуться на первую страницу с товарами">
                                                    <svg>
                                                        <use xlink:href="img/svg/sprite.svg#double-left-arrow"></use>
                                                    </svg>
                                                </a>
                                            </li>';
                                    echo '<li class="catalog__pagination-item ">
                                                <a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . $page . '" aria-label="Вернуться на предыдущую страницу с товарами">
                                                    <svg>
                                                        <use xlink:href="img/svg/sprite.svg#left-arrow"></use>
                                                    </svg>
                                                </a>
                                            </li>';
                                }

                                $now = $page+1;
                                $start = $now-$limit;
                                $end = $now+$limit;
                                for ($j = 1; $j<$pages; $j++) {
                                    if ($j>=$start && $j<=$end) {
                                        if ($j==($page+1)) echo '<li class="catalog__pagination-item catalog__pagination-item--active">
                                                                    <a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . $j . '">' . $j . '</a>
                                                                </li>';
                                        else echo '<li class="catalog__pagination-item"><a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . $j . '">' . $j . '</a></li>';
                                    }
                                    
                                }
                                if ($j>$page && ($page+2)<$j) {
                                    echo '<li class="catalog__pagination-item ">
                                                <a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . ($page+2) . '" aria-label="Перейти на следующую страницу с товарами">
                                                    <svg>
                                                        <use xlink:href="img/svg/sprite.svg#right-arrow"></use>
                                                    </svg>
                                                </a>
                                            </li>';
                                    echo '<li class="catalog__pagination-item ">
                                                <a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . ($j-1) . '" aria-label="Перейти на последнюю страницу с товарами">
                                                    <svg>
                                                        <use xlink:href="img/svg/sprite.svg#double-right-arrow"></use>
                                                    </svg>
                                                </a>
                                            </li>';
                                }
                            }
                        ?>
                    </ul>
                </div>
            </section>
            <?php include('./templates/_cart.php'); ?>
            <?php include('./templates/_modal-order.php'); ?>
            <?php include('./templates/_floating-cart.php'); ?>
        </main>
<?php include('./templates/_footer.php'); ?>