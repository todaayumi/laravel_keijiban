<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>掲示板</title>
<link 
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
</head>
<div class="container">
<form method="post" action="" class="my-3">
@csrf
<input type="text" name="name"><br>
<textarea name="body"></textarea><br>
<input type="submit" value="post">
</form>

<div class="posts">
@if(count($posts) == 0)
<p>no posts.</p>
@else
@foreach($posts as $post)
<div class="post">
<p>{{$post->id}} . {{$post->name}}</p>
<p>{{$post->body}}</p>
</div>
@endforeach
@endif
</div>

</div>
</body>
</html>
