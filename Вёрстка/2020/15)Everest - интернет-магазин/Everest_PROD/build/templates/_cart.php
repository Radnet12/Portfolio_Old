<section class="cart">
    <h3 class="cart__title">
        Корзина
    </h3>
    <div class="cart__inner">
        <div class="cart__empty">
            <div class="cart__content">
                <svg>
                    <use xlink:href='img/svg/sprite.svg#cart'></use>
                </svg>
                <div>Корзина пустая</div>
            </div>
            <div class="btn">
                <button aria-label="Корзина пустая, вернуться к покупкам">
                    Вернуться к покупкам
                </button>
            </div>
        </div>
        <div class="cart__full">
            <div class="cart__content" data-simplebar>
            </div>
            <div class="cart__purchase">
                <div class="cart__final-price">
                    Сумма заказа: <span><span class="total-price">0</span> грн</span>
                </div>
                <div class="btn">
                    <button aria-label="Вызвать модальное окно с оформлением Вашего заказа">
                        Оформить заказ
                    </button>
                </div>
            </div>
        </div>
    </div>
    <button class="cart__close" aria-label="Закрыть корзину"></button>
</section>