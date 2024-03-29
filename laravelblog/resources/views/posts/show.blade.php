<!doctype html>
<html lang="en">
@include('includes.head')
<body>
@include('includes.header')
<main>
    <section class="show__main container">
        <a class="btn-primary" href="{{ route('newPosts') }}"> Back</a>
    </section>
    <section class="title__sect container">
        <h1 class="title">{{ $post->title }}</h1>
    </section>
    <section class="show container">
        <div class="show__image">
            @foreach($post->images as $postImage)
                <img src="{{asset('/storage/' . $postImage->image)}}" alt="" class="show__images">
            @endforeach
        <div></div>
        </div>
        <div class="show__text">
            <p class="price">{{ $post->price }} Тг</p>
            <ul class="show__ul">
                <li class="show__list">Город:  {{ $post->city }}</li>
                <li class="show__list">{{ $post->type}}</li>
                <li class="show__list">Материал постройки:  {{ $post->typeBuildings }}</li>
                <li class="show__list">Площадь: {{$post->square}}</li>
                <li class="show__list">Площадь кухни: {{$post->kitchen_area}}</li>
                <li class="show__list">Этаж: {{$post->storey}}</li>
                <li class="show__list">Этажей в доме: {{$post->storey_home}}</li>
                <li class="show__list">Коли́чество комнаты: {{$post->rooms}}</li>
                <li class="show__list">Год постройки: {{$post->year}}</li>
            </ul>
            <div class="number">
                <p class="user__number">Хозяин недвижимости</p>
                <p class="user__number">{{ Auth::user()->name}}</p>
                <p class="user__number">Телефон:{{$post->number}}</p>
            </div>
        </div>
    </section>
    <section class="description__sect container">
        <h2 class="des__title">Описание</h2>
        <p class="show__description">
            {{ $post->description }}
        </p>
    </section>
</main>
@include('includes.footer')
</body>
</html>
