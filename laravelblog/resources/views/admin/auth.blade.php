<!doctype html>
<html lang="en">
@include('includes.head')
<body>
<main>
    <section class="show__main container">
        <p ><a href="{{ route('newPosts') }}" class="logo__text">Roof</a></p>
        <a class="btn-primary" href="{{ route('newPosts') }}"> Back</a>
    </section>
    <section class="register">
        <form action="{{route('login')}}" method="post" novalidate>
            @csrf
            <div class="auth__block">
                <h2 class="register__title">Вход</h2>
                <div class="block__text">
                    <p class="register__text">Email</p>
                    <input type="text" name="email" class="register__inp {{$errors->has('email') ? 'check-red': 'check-gray'}}" autofocus placeholder="email" />
                    @error('email')
                        <p class="check__error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="block__text">
                    <p class="register__text">Password</p>
                    <input type="password" name="password" class="register__inp {{$errors->has('password') ? 'check-red': 'check-gray'}}" placeholder="password" />
                    @error('password')
                        <p class="check__error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="register__button">
                    <a href="{{route('register')}}" class="auth__btn">Регистрация</a>
                    <button type="submit" class="register__btn">Вход</button>
                </div>
            </div>
        </form>
    </section>
</main>
</body>
</html>
