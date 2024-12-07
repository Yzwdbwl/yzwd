@extends ('article.layout')
<body>
        <h1>{{ $detail->title }}</h1>
   <p><strong>Excerpt:</strong> {{ $detail->excerpt }}</p>
    <p><strong>Category:</strong> {{ $detail->category->name }}</p>
   
    <p><strong>Body:</strong>            
    {!! $detail->body !!}</p>
        <a href="{{ url('/dashboard') }}">Back to Dashboard</a>
    </div>
</body>
</html>
