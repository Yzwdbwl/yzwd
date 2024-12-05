@extends ('article.layout')
    @foreach ($list as $item)
        @auth 
        
        <div> 
     @if(Auth::user()->role === 'Admin')<a href="{{ url("/article/{$item->id}/edit") }}" style="text-decoration: none;">Edit: @endif

                <p>{{ $item->title }}</p>

            </a>
                        

            <form method="POST" action="{{ url("/article/{$item->id}") }}">
                @csrf  
            @method('delete') {{-- NOTE METHOD --}}
            @endauth
            @auth
            @if(Auth::user()->role === 'Admin')
            <input type="submit" value="Delete" style="display:inline" >
            @endif
            @endauth
            </form>
        </p>
    @endforeach 
            @auth
      <a href="/dashboard">Back to dashboard</a>
            @endauth

@guest
<a href="/login">Login</a> or <a href="/register">Register as new user</a>.      
@endguest    


