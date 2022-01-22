<section class="modal">
    <div class="modal__overlay">
        <div class="modal__window">
            <h2 class="title">Оформление заказа</h2>
            <div class="order-form">
                <div class="order-form__right">
                    <h3 class="title">
                        Ваш заказ
                    </h3>
                    <div class="order-form__list" data-simplebar>
                    </div>
                    <div class="order-form__final-price">
                        Примерная сумма заказа: <span><span class="total-price">0</span> грн</span>
                    </div>
                </div>
                <div class="order-form__left">
                    <form class="order-form__form form" method="POST">
                        <input type="hidden" name="admin_email[]" value="everest-market@ukr.net">
                        <input type="hidden" name="form_subject" value="Заказ с магазина">
                        <h3 class="title">
                            Способ получения заказа
                        </h3>
                        <div class="form__item">
                            <label class="form__radio-item form__item_courier">
                                <input type="radio" name="Тип доставки" value="Курьер">
                                <span>Курьером</span>
                            </label>
                            <label class="form__radio-item form__item_self">
                                <input type="radio" name="Тип доставки" value="Самовывоз">
                                <span>Самовывоз</span>
                            </label>
                        </div>
                        <h3 class="title">
                            Данные покупателя
                        </h3>
                        <div class="form__item">
                            <div class="form__row">
                                <input type="text" name="Имя" placeholder="Имя" required aria-label="Введите имя">
                                <input type="text" name="Фамилия" placeholder="Фамилия" required aria-label="Введите фамилию">
                            </div>
                            <div class="form__row">
                                <input type="tel" name="Телефон" placeholder="Телефон" required aria-label="Введите телефон в формате +38 и ваш номер телефона">
                                <input class="additional" type="text" name="Адрес" placeholder="Адрес доставки" aria-label="Введите адрес для доставки">
                            </div>
                        </div>
                        <h3 class="title">
                            Способ оплаты
                        </h3>
                        <div class="form__item">
                            <label class="form__radio-item form__item_cash">
                                <input type="radio" name="Способ оплаты" value="Наличными">
                                <span>Наличными при получении</span>
                            </label>
                            <label class="form__radio-item form__item_card">
                                <input type="radio" name="Способ оплаты" value="Картой">
                                <span>Картой при получении</span>
                            </label>
                        </div>
                        <div class="btn">
                            <button type="submit" aria-label="Оформить заказ, Вам перезвонят через 15 мин для уточнения заказа">Оформить заказ</button>
                        </div>
                    </form>
                    <div class="order-form__policy">
                        Нажимая кнопку "Оформить заказ", Вы соглашаетесь с <a href="#">политикой конфиденциальности</a>
                        нашей компании.
                    </div>
                    <div class="order-form__tip">
                        Поля обязательны для заполнения
                    </div>
                </div>
            </div>
            <button class="modal__close" aria-label="Закрыть модальное окно с вашим заказом"></button>
        </div>
    </div>
</section>