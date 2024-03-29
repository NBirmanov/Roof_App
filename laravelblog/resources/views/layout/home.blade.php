<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
<header>
    @include('includes.header')
</header>
<main>
    <section class="home container">
        <div class="home__text">
            <p class="subtitle">Новый способ поиска недвижимости</p>
            <h1 class="home__title">Roof</h1>
            <p class="home__subtitle">Здесь можно купить, продать и сдать в аренду огромное количество объектов недвижимости. </p>
            @auth
                <a href="{{route('posts.index')}}" class="home__link">Добро пожаловать {{Auth::user()->name}}</a>
            @endauth
            @guest
                <a href="{{route('login')}}" class="auth__btn">Войти</a>
            @endguest
        </div>
        <div class="home__img">
            <img class="home_images" src="{{asset('images/modern-residential-district-with-green-roof-and-balcony-generated-by-ai.jpg')}}">
        </div>
    </section>
    <section class="home__content container">
        <h2 class="content__title">Найдите свой дом мечты.</h2>
        <div class="content__block">
            <div class="content__block-type">
                <img class="content_images" src="{{asset('images/information_items_property_254476.webp')}}">
                <p class="content__text">Котедж</p>
            </div>
            <div class="content__block-type">
                <img class="content_images" src="{{asset('images/dizayn-interyera-kvartiry-v-sovremennom-stile-gostinaja-2.jpg')}}">
                <p class="content__text">Квартира</p>
            </div>
            <div class="content__block-type">
                <img class="content_images" src="{{asset('images/33a6cb20af834f599102c5c65f69690b_00000.jpg')}}">
                <p class="content__text">Участок</p>
            </div>
            <div class="content__block-type">
                <img class="content_images" src="{{asset('images/aoSYHGeZQqmYyynpe5lPLQrnCqYR_1601902761.jpeg')}}">
                <p class="content__text">Коммерческую недвижимость</p>
            </div>
        </div>
    </section>
    <section class="home__check container">
        <h2 class="title">О нашем блоге</h2>
        <div class="blog__block">
            <div class="blog">
                <p class="blog__top-title">Наш блог</p>
                <h2 class="blog__title">Всегда проверяйте нашу последнюю публикацию в блоге.</h2>
                <p class="blog__subtitle">Здесь можно купить, продать и сдать в аренду огромное количество объектов недвижимости. Также вы найдете здесь коливинг, где у вас есть множество возможностей выбрать и получить огромную скидку.</p>
                <a class="blog__link" href="{{route('newPosts')}}">View all Post</a>
            </div>
            <div class="blog">
               <a href="{{'news'}}"><img class="blog__img" src="{{asset('images/gallery-2.jpg')}}"></a>
                <h2 class="blog__title">Как оценить расходы на аренду недвижимости.22
                    Совет о последних условиях недвижимости от агента.
                    23 ноября 5</h2>
            </div>
            <div class="blog">
                <a href="{{'news'}}"><img class="blog__img" src="{{asset('images/51b84db4b03a31024_c_1.jpg')}}"></a>
                <h2 class="blog__title">Совет о последних условиях недвижимости от агента.</h2>
            </div>
        </div>
    </section>
</main>
@include('includes.footer')
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
