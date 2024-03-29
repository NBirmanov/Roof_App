<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
<header>
    @include('includes.header')
    <div class="header__bottom container">
        <form action="{{route('newPosts')}}" method="get">
            <select name="buy" id="" class="select__size">
                <option value="Продать">Купить</option>
                <option value="Аренда">Арендовать</option>
            </select>
            <select name="type" id="" class="select__size">
                <option value="">Выберите</option>
                <option value="Квартиру">Квартиру</option>
                <option value="Дом и дачу">Дом и дачу</option>
                <option value="Гараж и паркинг">Гараж и паркинг</option>
                <option value="Участок">Учаток</option>
                <option value="Коммерческую недвижимость">Коммерческую недвижимость</option>
                <option value="Бизнес">Бизнес</option>
                <option value="Промбазы и заводы">Промбазы и заводы</option>
                <option value="Прочую недвижимость">Прочую недвижимость</option>
            </select>
            <select name="city" id="" class="select__size">
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
            <input type="text" name="search_field" class="search__size" placeholder="search"/>
            <button type="submit" class="search__btn">Найти</button>
        </form>
    </div>
</header>
<main>
    <section class="content container">
        <div class="parameter">
            <form class="parameter__form" action="{{route('newPosts')}}" method="get">
                <div class="parameter__checkbox">
                    <div class="parameter__checkbox-title">
                        <h2 class="parameter__title">Тип дома</h2>
                    </div>
                    <select name="typeBuildings" id="">
                        <option value="">Не важно</option>
                        <option value="кирпичный">кирпичный</option>
                        <option value="панельный">панельный</option>
                        <option value="монолитный">монолитный</option>
                        <option value="иное">иное</option>
                    </select>
                </div>
                <div class="parameter__checkbox">
                    <div class="parameter__checkbox-title">
                        <h2 class="parameter__title">Год постройки</h2>
                    </div>
                    <input type="number" name="year" placeholder="год" class="numb__size"/>
                </div>
                <div class="parameter__checkbox">
                    <div class="parameter__checkbox-title">
                        <h2 class="parameter__title">Этаж</h2>
                    </div>
                    <input type="number" name="storey" placeholder="от" class="numb__size"/>
                </div>
                <div class="parameter__select">
                    <div class="parameter__checkbox-title">
                        <h2 class="parameter__title">Этажей в доме</h2>
                    </div>
                    <input type="number" name="storey_home" placeholder="от" class="numb__size"/>
                </div>
                <div class="parameter__select">
                    <div class="parameter__checkbox-title">
                        <h2 class="parameter__title">Kоличество комнаты</h2>
                    </div>
                    <input type="number" name="rooms" class="numb__size" placeholder="количество комнаты"/>
                </div>

                <div class="parameter__select">
                    <div class="parameter__checkbox-title">
                        <h2 class="parameter__title">Общая площадь</h2>
                    </div>
                    <input type="number" name="square" placeholder="от" class="numb__size"/>
                </div>
                <div class="parameter__select">
                    <div class="parameter__checkbox-title">
                        <h2 class="parameter__title">Площадь кухни</h2>
                    </div>
                    <input type="number" name="kitchen_area" placeholder="от" class="numb__size"/>
                </div>
                <button type="submit" class="parameter__choose-btn">ВЫБРАТЬ</button>
            </form>
        </div>
        <div class="posts">
            @foreach($newPosts as $post)
                <div class="post__block">
                    <div class="post__img">
                        @foreach($post->images as $key => $image)
                            @if($key === 0)
                                <a  href="{{ route('posts.show',$post->id) }}"><img src="{{asset('/storage/' . $image->image)}}" alt="" class="post__images"></a>
                            @endif

                        @endforeach

                     </div>
                    <div class="post__text">
                        <div class="block__title">
                            <p><a href="{{ route('posts.show',$post->id) }}"  class="post__title">{{ $post->title}}</a></p>
                        </div>
                        <p class="post__address">{{$post->address}}</p>
                        <div class="block__description">
                            <p class="post__description">{{$post->description}}</p>
                        </div>
                        <p class="post__price">{{$post->price}}</p>
                    </div>
                    <div class="show__btn-block">
                        <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                    </div>
                </div>
            @endforeach
        </div>
</section>
</main>
@include('includes.footer')
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
