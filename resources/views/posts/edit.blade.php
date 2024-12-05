<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>编辑帖子</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">标题</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}" required>
        </div>

        <!-- 其他字段与 create.blade.php 类似，但使用 $post->field 来预填充值 -->

        <button type="submit">更新帖子</button>
    </form>
@endsection