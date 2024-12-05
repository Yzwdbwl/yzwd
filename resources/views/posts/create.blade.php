<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>创建新帖子</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">标题</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="excerpt">摘要</label>
            <textarea id="excerpt" name="excerpt" required></textarea>
        </div>

        <div>
            <label for="body">正文</label>
            <textarea id="body" name="body" required></textarea>
        </div>

        <div>
            <label for="category_id">类别</label>
            <select id="category_id" name="category_id" required>
                @foreach ($categories as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" required>
        </div>

        <div>
            <label for="published_at">发布日期</label>
            <input type="date" id="published_at" name="published_at">
        </div>

        <button type="submit">创建帖子</button>
    </form>
@endsection