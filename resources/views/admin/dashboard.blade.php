@extends ('admin.layout')
   @section('title', 'Admin Dashboard')
 
@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Go to My Posts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/article/create">Create a new post</a>
    </li>
    @auth
        @if(Auth::user()->role === 'Admin')
            <li class="nav-item">
                <a class="nav-link" href="/article">Show all the posts</a>
            </li>
        @endif
    @endauth
@endsection
 
@section('content')
    <h1>Welcome to the Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Go to My Posts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/article/create">Create a new post</a>
    </li>
    @auth
        @if(Auth::user()->role === 'Admin')
            <li class="nav-item">
                <a class="nav-link" href="/article">Show all the posts</a>
            </li>
        @endif
    @endauth
 
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection