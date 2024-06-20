<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZavodInfo</title>
    <link href="sass/style.css" rel="stylesheet">
</head>
<body>

    <?php require_once"blocks/header.php" ?>

    <section class="zavodInfo">

        <div class="zavodInfo__top">
            <div class="zavodInfo__top-wrap">
                <img class="zavodInfo__top-img" src="assets/others/zavod-1882_0.jpg">
                <div class="zavodInfo__top-info">
                    <div class="zavodInfo__top-title"> Завод детского питания Нутриция </div>
                    <div class="zavodInfo__top-addres"> Истра, ул. Московская, 48 </div>
                    <a class="zavodInfo__top-phone" href="tel:84957394809"> 8(495)739-48-09 </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="zavodInfo__about">
                <div class="zavodInfo__about-title"> <b>О компании</b> </div>
                <div class="zavodInfo__about-text">
                    Завод «Истра – Нутриция» передовое российское предприятие по производству детского питания, оснащенное новейшим оборудованием
                    и работающее по высочайшим европейским стандартам качества и безопасности. 
                    Завод выпускает молочные смеси и каши Nutrilon, молочные смеси и каши «Малютка», молочные смеси «Малыш». 
                    С 2021 года завод выпускает воздушные злаки под брендом «Малютка». 
                    Завод производит нашу продукцию только из качественных ингредиентов c соблюдением стандартов качества РФ, а также
                    требований Европейского союза. Если стандарты различаются, компания выбирает наиболее строгие из них. 
                    При производстве продукции используется сырье, которое поступает на завод Nutricia из Ирландии, Германии, Нидерландов, 
                    Франции и Латинской Америки.
                </div>
            </div>

            <div class="zavodInfo__product">
                <div class="zavodInfo__product-title"> <b>Продукция</b> </div>
                <div class="zavodInfo__product-text">-Молочные продукты</div>
            </div>

            <div class="zavodInfo__requisites">
                <div class="zavodInfo__requisites-title"> <b>Реквизиты</b> </div>
                <div class="zavodInfo__requisites-list"> 
                    <div class="zavodInfo__requisites-list-box">
                        <div class="zavodInfo__requisites-item"> Название юр лица </div>
                        <div class="zavodInfo__requisites-item"> ДП "Истра-Нутриция", АО </div>
                    </div>
                    
                    <div class="zavodInfo__requisites-list-box">
                        <div class="zavodInfo__requisites-item"> ИНН </div>
                        <div class="zavodInfo__requisites-item"> 5017014392 </div>
                    </div>

                    <div class="zavodInfo__requisites-list-box">
                        <div class="zavodInfo__requisites-item"> ОГРН </div>
                        <div class="zavodInfo__requisites-item"> 1025001816245 </div>
                    </div>
                    
                    <div class="zavodInfo__requisites-list-box">
                        <div class="zavodInfo__requisites-item"> КПП </div>
                        <div class="zavodInfo__requisites-item"> 501701001 </div>
                    </div>

                    <div class="zavodInfo__requisites-list-box">
                        <div class="zavodInfo__requisites-item"> Дата регистрации </div>
                        <div class="zavodInfo__requisites-item"> 12.07.1995 </div>
                    </div>
                </div>
            </div>

            <div class="zavodInfo__contacts">
                <div class="zavodInfo__contacts-title"> <b>Контакты</b> </div>
                    <div class="zavodInfo__contacts-list">
                        <div class="zavodInfo__contacts-list-box">
                            <div class="zavodInfo__contacts-item"> Населенный пункт </div>
                            <div class="zavodInfo__contacts-item"> Истра (Москва и область) </div>
                        </div>

                        <div class="zavodInfo__contacts-list-box">
                            <div class="zavodInfo__contacts-item"> Адрес </div>
                            <div class="zavodInfo__contacts-item"> Истра, ул. Московская, 48 </div>
                        </div>

                        <div class="zavodInfo__contacts-list-box">
                            <div class="zavodInfo__contacts-item"> Телефон </div>
                            <a class="zavodInfo__contacts-item" href="tel:84957394809"> 8(495)739-48-09 </a>
                        </div>

                        <div class="zavodInfo__contacts-list-box">
                            <div class="zavodInfo__contacts-item"> Электронная почта </div>
                            <a class="zavodInfo__contacts-item" href="mailto:Info.Nutricia.Russia@danone.com"> Info.Nutricia.Russia@danone.com </a>
                        </div>
                    </div>
            </div>

            <div class="zavodInfo__map">
                <div class="zavodInfo__map-text"> <b>Местоположение завода</b> </div>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af4e8c6ef203ad559483b781ae11d1e51018ca473332e3db5fd0a5778cd522052&amp;width=800&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </section>

    <?php require_once"blocks/footer.php" ?>

</body>
</html>
