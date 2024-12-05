<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class ArticleController extends Controller
{
    // list
    public function index()
    {
        $list = Post::get();
        return view('article.index',['list'=>$list]);
    }


    // detail
    public function show($article)
    {
        $detail = Post::find($article);
        return view('article.show',['detail'=>$detail]);
    }

    // add article
    public function create()
    {
        return view('article.create');

    }

    // add function
    public function store()
    {
        $params = request()->only(['title', 'body', 'category_id', 'excerpt']);
        $params['user_id'] = Auth::id();
     
        // clear and make slug
        $title = $params['title'];
        $slug = Str::slug($title) . '-' . (Post::count() + 1); 
     
    //check the slug exist
        $counter = 1;
        $uniqueSlug = $slug;
        while (Post::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = Str::slug($title) . '-' . (Post::count() + 1 + $counter);
            $counter++;
        }
        $tempSlug = Str::random(10) . '-' . time();
        $post = Post::create($params + ['slug' => $tempSlug]);
     $post->update(['slug' => $uniqueSlug]);
     
        return redirect('/dashboard')->with('success', 'Post created successfully!');
    }

    public function edit($article)
    {
        $detail = Post::find($article);

        return view('article.edit',['detail'=>$detail]);
    }

    public function update($article)
    {
        $detail = Post::findOrFail($article);
        $params = request()->only(['title', 'body', 'category_id', 'slug', 'excerpt']);
 
        $existingSlugRule = "unique:posts,slug,{$detail->id}";
 
 
        $res = $detail->update($params);
        return redirect('/dashboard')->with('success', 'Post updated successfully!');

    }

    public function destroy($article)
    {
        Post::find($article)->delete($article);
        return redirect('/dashboard')->with('success', 'Post delete successfully!');
    }
}