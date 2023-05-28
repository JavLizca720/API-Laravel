@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link" rel="stylesheet" href="/css/app.css">
    <title>BLOG</title>
</head>
<body>
    <div class="container">
    @foreach ($posts as $post)
    <table class="table table-success table-striped">
        <thead>
            <th>Title</th>
            <th>Transacciones</th>
        </thead>
        <tbody>
            <td>{{$post->title}}</td>

            <td><a href="posts/{{$post->id}}">Ver</a></td>
        </tbody>
    </table>
        @endforeach
    </div> 

</body>
</html>
@endsection