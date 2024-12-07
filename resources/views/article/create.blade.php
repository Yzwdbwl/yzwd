@extends ('article.layout')
    <form id="articleForm" action="/article" method="post">
        @csrf
        <script src="/formValidation.js"></script>
@auth
        <p>
            <label>Title</label>
            <input type="text" name="title" />
        </p>
        <p>
            <label>Content</label>
            <textarea name="body"></textarea>
        </p>
        <p>
            <label>Category</label>
   <select name="category_id">
        <option value="1">Technology & Innovation</option>
        <option value="2">Health & Lifestyle</option>
        <option value="3">Education & Learning</option>
        <option value="4">Environment & Sustainability</option>
        <option value="5">Culture & Arts</option>
    </select></p>
        <p>
            <label>Excerpt</label>
            <input type="text" name="excerpt"></input>
        </p>
        
        <p>
           <button type="submit">Submit</button>
        </p>
        @endauth
@guest
<a href="/login">Login</a> or <a href="/register">Register as new user</a>.      
@endguest
    </form>
<a href="/dashboard">Back to dashboard</a>.      


