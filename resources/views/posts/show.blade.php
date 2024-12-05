<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>

    <div>
        <strong>摘要:</strong> {{ $post->excerpt }}
    </div>

    <div>
        <strong>正文:</strong> {!! $post->body !!}
    </div>

    <div>
        <strong>类别:</strong> {{ $post->category->name }}
    </div>

    <div>
        <strong>发布日期:</strong> {{ $post->published_at ? $post->published_at->format('Y-m-d') : '未发布' }}
    </div>

    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">编辑</a>

    <!-- 使用 Gate 或 Policy 进行权限检查 -->
    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">删除</button>
        </form>
    @endcan
@endsection