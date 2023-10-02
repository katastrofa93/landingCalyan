<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/requre/requre.css">
    <title>Landing</title>
</head>
<body>
    <div class="message">
        <div class="message__block">
            <div class="message__text">
                <h3 class="text">Ошибка</h3>
            </div>
            <div class="message__close">
                <div class="close">
                Закрыть
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="smoke"></div>
        <div class="container">
            <section class="section-header">
                <address class="section-header__adress">
                    <span>г. Энск ул. Энская д. 10</span>
                    <span>тел.: 8(999)-888-77-55</span>
                </address>
                <article class="section-header__text">
                    <h2>
                    MYSTYHOUSE
                    </h2>
                    <div class="description-head">
                        <h3>
                        Welcom to MistyHOUSE
                        </h3>
                        <p>
                        Вы здесь, значит нашли, что искали! Именно у нас вы получите незабываемые ощущения отдыха. Умиротварение и наслождение в каждой чаше.
                        </p>
                    </div>
                </article>
                <div class="section-header__button">
                    <button id="button">
                    Забронировать стол
                    </button>
                </div>
            </section>
        </div>
    </header>
    <section class="offer">
        <div class="container">
            <section class="section-offer">
                <article class="section-offer__article">
                    <h2>
                    Relax
                    </h2>
                    <div class="section-offer__text">
                        <p>
                        Мы те, кто может дать вам одну из возможностей насладиться с самим собой наедине, со своими мыслями в прекрасной атмосфере дыма и музыки.
                        </p>
                        <p>
                        Здесь ты можешь почувствовать умиротворение и спокойствие, потягивая кальян со своими любимыми вкусами. У нас в наличии только качественные, проверенные гадами марки табака, подходящий для новичков и истинных ценителей крепких ароматов.
                        </p>
                    </div>
                </article>
                <section class="section-offer__cart">
                    <div class="cart">
                        <h3>
                        DARKSIDE
                        tabacco
                        </h3>
                        <p>
                        DARKSIDE настоящий мастодонт
                            кальянный индустрии. Отменное
                            качество, отличный бленд табачного
                            сырья.
                        </p>
                    </div>
                    <div class="cart">
                        <h3>
                        Daily Hookah
                        </h3>
                        <p>
                        Daily Hookah популярный легкий табак из России
                        от команды D-tobacco, для тех, кто просто хочет насладиться вкусом.
                        </p>
                    </div>
                    <div class="cart">
                        <h3>
                        MUSTHAVE
                        </h3>
                        <p>
                        Табак из России. Сырье, используемое для производства, — бленд разных сортов табачного листа Берли. Для ценителей крепкости и ярких ощущений.
                        </p>
                    </div>
                </section>
            </section>
        </div>
    </section>
    <section class="team">
        <div class="container">
            <section class="section-team">
                <article class="section-team__face">
                    <div class="section-team__cyrcl">
                        <img src="images/face1.jpg" alt="image">
                    </div> 
                    <p>
                        Привет, я Иван. Я профессионал в своём деле. У меня большой опыт в кальянной индустрии.
                    </p>
                </article>
                <article class="section-team__face">
                    <div class="section-team__cyrcl">
                        <img src="images/face2.jpg" alt="image">
                    </div> 
                    <p>
                    Хай я Инга! Я непосредственно буду обслуживать ваш столик. И сделаю всё, что бы вы были довольны.
                    </p>
                </article>
                <article class="section-team__face">
                    <div class="section-team__cyrcl">
                        <img src="images/face3.jpg" alt="image">
                    </div> 
                    <p>
                    Привет! Я Александр. Я тот, кто сделает твой кальян неповторимым.
                    </p>
                </article>
            </section>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <section class="section-feedback">
                <div class="section-feedback__description">
                    <h3>
                    Погрузись в атмосферу!
                    </h3>
                    <p>
                    Наши специалисты помогут тебе выбрать твой вкус и крепкость.
                        Наш приём и умиротворяющая музыка будет удерживать тебя до последнего.
                        Всего один звонок отделяет тебя от незабываемого вечера.
                    </p>
                </div>
                <div class="section-feedback__feedback">
                    
                    <form action="" method="" class="form-feedback">
                        <input type="text" placeholder="Ваше имя" class="form-feedback__name" title="Разрешено использовать только русские буквы больше двух"
                        pattern="^[А-Яа-яЁё\s]{2,}" name="name" autocomplete="off">
                        <input type="tel"  placeholder="Ваш телефон" class="form-feedback__phone" title="Введите номер в формате 89998887766" 
                        pattern='^[8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]' maxlength="11" name="phone" autocomplete="off">
                        <div class="form-feedback__checkbox">
                            <input type="checkbox" name="check" id="check" class="check" value = "check">
                            <label for="check" class="label">
                            
                            </label>
                            <span>Подтверждаю обработку данных</span>
                        </div>
                        <div class="form-feedback__send">
                            <button type="submit" class="send" name="send">Отправить</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
    <footer>
        <div class="smoke"></div>
        <div class="container">
            <section class="section-footer">
                <div class="footer__addres">
                    <h3>Наши контакты:</h3>
                    <ul class="footer__ul-addres">
                        <li class="footer__li-addres">
                            <address>
                            г. Энск ул. Энская д. 10
                            </address> 
                        </li>
                        <li class="footer__li-addres">
                            <address>
                            Мы работаем: с 10:00 до 00:00
                            </address> 
                        </li class="footer__li-addres">
                        <li class="footer__li-addres">
                            <address>
                            тел.: 8(999)-888-77-55
                            </address> 
                        </li>
                    </ul>
                </div>
                <div class="footer__dev">
                    <span class="low">Все права защищены 2023</span>
                    <span class="dev">Страницу разработал Редькин И.В.</span>
                </div>
                <article class="footer__subscribe">
                    <h3>Подпишись на нас:</h3>
                    <ul class="footer__ul-social">
                        <li >
                            <a href="#" class="icon-instagram"></a>
                        </li>
                        <li ><a href="#" class="icon-telegram"></a></li>
                        <li ><a href="#" class="icon-vk"></a></li>
                    </ul>
                </article>
                <div class="footer__warning">
                    <span class="warning">Минздрав предупреждает: “Курение вредит вашему здоровью”</span>
                </div>
            </section>
        </div>
    </footer>

    <script src="scriptsJS/smoothScroll.js"></script>
    <script src="scriptsJS/message.js"></script>

</body>
</html>


        