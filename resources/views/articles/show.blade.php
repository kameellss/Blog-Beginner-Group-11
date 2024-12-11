<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
</head>
<body>
    <div class="container">
        <h1>{{ $article->title }}</h1>
        @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
        @endif
        <p>{{ $article->full_text }}</p>
    </div>
</body>
</html>
