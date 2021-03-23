<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>wakana bbs</title>
    <style>
        body {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>wakana bbs</h1>
    <p> {{$message}} </p>
    <?php foreach ($articles as $article) : ?>
        <p>
            <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
                {{ $article->content }}
            </a>
        </p>
    <?php endforeach; ?>
</body>

</html>