<!doctype html>
<html lang="en">
@include('includes.head')
<body>
@include('includes.header')
<main>
    <section class="ads container">
        <h2 class="ads__title">Подать объявление</h2>
            <form action="{{ route('posts.store') }} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="ads__inp">
                    <div class="images">
                        <p class="img__title">Фотографии</p>
                        <input type="file" name="images[]"  multiple>
                    </div>
                    <p class="ads__text">Продать</p>
                    <select name="buy" id="" class="typeBuildings size" >
                        <option value="Продать">Продать</option>
                        <option value="Аренда">Аренда</option>
                    </select>
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Типы зданий</p>
                    <select name="type" id="" class="type size">
                        <option value="Квартиру">Квартиру</option>
                        <option value="Дом и дачу">Дом и дачу</option>
                        <option value="Гараж и паркинг">Гараж и паркинг</option>
                        <option value="Участок">Учаток</option>
                        <option value="Коммерческую недвижимость">Коммерческую недвижимость</option>
                        <option value="Бизнес">Бизнес</option>
                        <option value="Промбазы и заводы">Промбазы и заводы</option>
                        <option value="Прочую недвижимость">Прочую недвижимость</option>
                    </select>
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Цена</p>
                    <input type="number" name="price" placeholder="Цена" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Тип строения</p>
                    <select name="typeBuildings" id="" class="typeBuildings size" >
                        <option value="кирпичный">кирпичный</option>
                        <option value="панельный">панельный</option>
                        <option value="монолитный">монолитный</option>
                        <option value="иное">иное</option>
                    </select>
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Год постройки (сдачи в эксплуатацию)</p>
                    <input type="number" name="year" placeholder="Год" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Этаж</p>
                    <input type="number" name="storey" placeholder="Этаж" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Этажей дома</p>
                    <input type="number" name="storey_home" placeholder="Этаж дома" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Площадь, м²</p>
                    <input type="number" name="square" placeholder="Площадь" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Площадь кухни, м²</p>
                    <input type="number" name="kitchen_area" placeholder="Площадь кухни" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Количество комнаты</p>
                    <input type="number" name="rooms" placeholder="количество комнаты" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Расположение</p>
                    <select id="cities" name="city" class="size">
                        <option value="" disabled selected>Выберите город</option>
                        <option value="Астана">Астана</option>
                        <optgroup label="Алматы область">
                            <option value="Алматы">Алматы</option>
                            <option value="Талдыкорган">Талдыкорган</option>
                            <option value="Капчагай">Капчагай</option>
                            <option value="Сарканд">Сарканд</option>
                            <option value="Урыжар">Урыжар</option>
                            <option value="Уштобе">Уштобе</option>
                            <option value="Алаколь">Алаколь</option>
                            <option value="Текели">Текели</option>
                            <option value="Каскелен">Каскелен</option>
                            <option value="Кеген">Кеген</option>
                            <option value="Кербулак">Кербулак</option>
                            <option value="Капшагай">Капшагай</option>
                        </optgroup>
                        <optgroup label="Акмолинская область">
                            <option value="Астана">Астана</option>
                            <option value="Кокшетау">Кокшетау</option>
                            <option value="Атбасар">Атбасар</option>
                            <option value="Щучинск">Щучинск</option>
                            <option value="Степногорск">Степногорск</option>
                            <option value="Аршалы">Аршалы</option>
                            <option value="Ерейментау">Ерейментау</option>
                            <option value="Шортанды">Шортанды</option>
                            <option value="Аксу">Аксу</option>
                        </optgroup>
                        <optgroup label="Актюбинская область">
                            <option value="Актобе">Актобе</option>
                            <option value="Хромтау">Хромтау</option>
                            <option value="Шалкар">Шалкар</option>
                            <option value="Кандыагаш">Кандыагаш</option>
                            <option value="Темир">Темир</option>
                            <option value="Алматинское">Алматинское</option>
                            <option value="Тогузак">Тогузак</option>
                            <option value="Каргалы">Каргалы</option>
                        </optgroup>
                        <optgroup label="Атырауская область">
                            <option value="Атырау">Атырау</option>
                            <option value="Кульсары">Кульсары</option>
                            <option value="Макат">Макат</option>
                            <option value="Махамбет">Махамбет</option>
                        </optgroup>
                        <optgroup label="Восточно-Казахстанская область">
                            <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                            <option value="Семей">Семей</option>
                            <option value="Риддер">Риддер</option>
                            <option value="Аягоз">Аягоз</option>
                            <option value="Шемонаиха">Шемонаиха</option>
                            <option value="Зыряновск">Зыряновск</option>
                            <option value="Глубокое">Глубокое</option>
                        </optgroup>
                        <optgroup label="Жамбылская область">
                            <option value="Тараз">Тараз</option>
                            <option value="Жамбыл">Жамбыл</option>
                            <option value="Мерке">Мерке</option>
                            <option value="Шу">Шу</option>
                            <option value="Ордабасы">Ордабасы</option>
                            <option value="Ленгер">Ленгер</option>
                            <option value="Сарыагаш">Сарыагаш</option>
                            <option value="Айтекеби">Айтекеби</option>
                        </optgroup>
                        <optgroup label="Западно-Казахстанская область">
                            <option value="Уральск">Уральск</option>
                            <option value="Актобе">Актобе</option>
                            <option value="Ататуй">Ататуй</option>
                            <option value="Доссор">Доссор</option>
                            <option value="Жаныбек">Жаныбек</option>
                            <option value="Казталовка">Казталовка</option>
                            <option value="Каратобе">Каратобе</option>
                        </optgroup>
                        <optgroup label="Карагандинская область">
                            <option value="Караганда">Караганда</option>
                            <option value="Темиртау">Темиртау</option>
                            <option value="Жезказган">Жезказган</option>
                            <option value="Балхаш">Балхаш</option>
                            <option value="Шахтинск">Шахтинск</option>
                            <option value="Сарань">Сарань</option>
                            <option value="Атасу">Атасу</option>
                            <option value="Абай">Абай</option>
                            <option value="Каражал">Каражал</option>
                            <option value="Каркаралинск">Каркаралинск</option>
                        </optgroup>
                    </select>
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Улица или микрорайон</p>
                    <input type="text" name="address" placeholder="Улица или микрорайон" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Телефоны</p>
                    <input type="number" name="number" placeholder="Телефоны" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Загаловок</p>
                    <input type="text" name="title" placeholder="Загаловок" class="size">
                </div>
                <div class="ads__inp">
                    <p class="ads__text">Текст объявления</p>
                    <textarea name="description" placeholder="Текст объявления" class="size__desc"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </section>
</main>
@include('includes.footer')
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
