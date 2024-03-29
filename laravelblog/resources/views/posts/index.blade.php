<!doctype html>
<html lang="en">
@include('includes.head')
<body>
<header>
    @include('includes.header')
</header>
<main>
    <section class="user container">
        <h2 class="ads__title">Имя: {{Auth::user()->name}}</h2>
        <form method="post" action="{{route('logout')}}">
            @csrf
            <a class="user__logout" onclick="event.preventDefault(); this.closest('form').submit()" href="{{route('logout')}}">Выйти</a>
        </form>

    </section>
    <section class="user__ads container">
        <div class="user__title">
            <h2 class="ads__title">Ваше объявление</h2>
            <a href="{{ route('posts.create') }}" class="auth__btn">Подать объявление</a>
        </div>
        @foreach($userPost as $user)
            @foreach($posts as $post)
            @csrf
                @if(Auth::user()->id == $user->user_id && $user->post_id == $post->id)
                    <div class="ads__block">
                    <div class="post__block post__block-size">
                        <div class="post__img">
                            @foreach($post->images as $key => $image)
                                @if($key === 0)
                                    <a  href="{{ route('posts.show',$post->id) }}"><img src="{{asset('/storage/' . $image->image)}}" alt="" class="post__images"></a>
                                @endif

                            @endforeach
                        </div>
                        <div class="post__text">
                            <div class="block__title">
                                <p><a href=""  class="post__title">{{ $post->title}}</a></p>
                            </div>
                            <p class="post__address">{{$post->address}}</p>
                            <div class="block__description">
                                <p class="post__description">{{$post->description}}</p>
                            </div>
                            <p class="post__price">{{$post->price}}</p>
                        </div>

                    </div>
                        <div class="post__btn">
                            <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                            <a class="btn btn-primary btn-info" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>

                            </form>
                        </div>

                    </div>
               @endif
            @endforeach
        @endforeach
    </section>
</main>

@include('includes.footer')
</body>
</html>
