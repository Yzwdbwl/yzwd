@extends ('article.layout')
  <form action="{{ route('article.update', ['article' => $detail->id]) }}" method="POST">

    @csrf

    @method('PATCH') 
        <p>
            <label>Title</label>
            <input type="text" name="title" value="{{$detail->title}}"/>
        </p>
        <p>
            <label>Content</label>
            <textarea name="body">{{$detail->body}}</textarea>
        </p>
   <p>
    <label>Category</label>
    <select name="category_id">
        <option value="1" {{ $detail->category_id == 1 ? 'selected' : '' }}>Technology & Innovation</option>
        <option value="2" {{ $detail->category_id == 2 ? 'selected' : '' }}>Health & Lifestyle</option>
        <option value="3" {{ $detail->category_id == 3 ? 'selected' : '' }}>Education & Learning</option>
        <option value="4" {{ $detail->category_id == 4 ? 'selected' : '' }}>Environment & Sustainability</option>
        <option value="5" {{ $detail->category_id == 5 ? 'selected' : '' }}>Culture & Arts</option>
    </select>
</p>
        <p>
            <label>Excerpt</label>
            <input type="text" name="excerpt" value="{{$detail->excerpt}}"></input>
        </p>
        @auth 
        @if(Auth::user()->role === 'Admin')

        <p>
           <button type="submit">Submit</button>
        </p>
        @endif
        @endauth 
    </form>
     <a href="/dashboard">Back to dashboard</a>.      
