<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>帖子列表</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary">创建新帖子</a>

    @if ($posts->count())
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">编辑</a>

                    <!-- 使用 Gate 或 Policy 进行权限检查 -->
                    @can('delete', $post)
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">删除</button>
                        </form>
                    @endcan
                </li>
            @endforeach
        </ul>
    @else
        <p>没有帖子。</p>
    @endif
@endsection