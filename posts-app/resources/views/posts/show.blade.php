<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href={{route('post.create')}} style="float: right">ajouter post</a>
    <div  style="display: flex; gap:20px; flex-wrap: wrap; margin-top:20px">
        @foreach ($posts as $post)
            <div  class="card" style=" width: 250px;">
                <div class="card-body" style="display:flex; flex-direction:column; text-align:center">
                <h2 class="card-title">{{$post->title}}</h2>
                <p class="card-text" style="overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;">{{$post->content}}</p>
                <span class="card-subtitle mb-2 text-muted">{{$post->date}}</span>
                <button class="btn btn-primary"style=" margin-bottom:10px"><a href={{route('post.edit', $post->id)}} style="all:unset; margin-bottom:20px">edit</a> </button>
                <button class="btn btn-danger"><a href={{route('post.delete', $post->id)}} style="all:unset">delete</a> </button>
            </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>