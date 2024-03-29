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
        <form action="{{route('register')}}" method="post" novalidate>
            @csrf
            <div class="register__block">
                <h2 class="register__title">Регистрация</h2>
                <div class="block___text">
                    <p class="register__text">Name</p>
                    <input type="text" name="name" class="register__inp {{$errors->has('name') ? 'check-red': 'check-gray'}}"  placeholder="name" />
                    @error('name')
                        <p class="check__error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="block__text">
                    <p class="register__text">Email</p>
                    <input type="text" name="email" class="register__inp {{$errors->has('email') ? 'check-red': 'check-gray'}}" placeholder="email" />
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
                <div class="block__text">
                    <p class="register__text">Confirm Password</p>
                    <input type="password" name="password_confirmation" class="register__inp {{$errors->has('password') ? 'check-red': 'check-gray'}}" placeholder="confirm password"/>
                    @error('password')
                    <p class="check__error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="register__button">
                    <button type="submit" class="register__btn">Регистрация</button>
                    <a href="{{route('login')}}" class="reg__btn">Вход</a>
                </div>
            </div>
        </form>
    </section>
</main>
</body>
</html>
