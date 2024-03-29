<div class="header__top container">
        <div class="logo">
          <p ><a href="{{ '/' }}" class="logo__text">Roof</a></p>
        </div>
        <nav class="nav">
          <ul class="nav__list">
            <li class="header__link-li"><a href="{{ route('newPosts') }}" class="nav__link">Продажа</a></li>
{{--            <li class="header__link-li"><a href="" class="nav__link">Аренда</a></li>--}}
            <li class="header__link-li"><a href="{{ route('posts.create') }}" class="nav__link">Подать объявление</a></li>
            <li class="header__link-li"><a href="{{'news'}}" class="nav__link">Новости</a></li>
          </ul>
        </nav>
        <div class="auth__button">
            @auth
                <a href="{{route('posts.index')}}" class="auth__btn">Личный кабинет</a>
                <a href="{{route('posts.index')}}"><img  class="auth__btn-icon" src="{{asset('images/account_username_people_avatar_profile_person_user_icon_258905.svg')}}"></a>
            @endauth
            @guest
                <div class="auth__btn-dis">
                    <a href="{{route('register')}}" class="auth__btn">Регистрация</a>
                    <a href="{{route('login')}}" class="auth__btn">Личный кабинет</a>
                    <a href="{{route('register')}}"><img  class="auth__btn-icon" src="{{asset('images/check_yes_mark_ok_accept_icon_262045 (1).svg')}}"></a>
                    <a href="{{route('login')}}"><img  class="auth__btn-icon" src="{{asset('images/account_username_people_avatar_profile_person_user_icon_258905.svg')}}"></a>
                </div>

                @endguest
        </div>
</div>
