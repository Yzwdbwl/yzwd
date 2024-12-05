@extends ('layout')
    @guest
<div class="top-right-corner">
    <a href="/login">Log in</a>
    <a href="/register">Register</a>
</div>
    @endguest

    @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
        <div class="logout-container" style="background-color: white; color:black;
        padding: 10px 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Log Out') }}    
        <a href="/dashboard"> Back to dashboard</a>
          </div>    
                </x-responsive-nav-link>  
            </form>
        @endauth

@section('content')
    @foreach ($posts as $post)
       <article>
        <h2>
          <a href="/posts/{{ $post->slug }}">{{ $post->title}}
           </a>
          </h2>

       <p>
          By<a href="/authors/{{ $post->author->username }}">{{ $post->author->name}}</a>in<a href="/categories/{{ $post->category->slug  }}">{{ $post->category->name }}</a>
      </p>
        <div>
          {{ $post->excerpt }}
        </div>
        </article>
    @endforeach
@endsection


