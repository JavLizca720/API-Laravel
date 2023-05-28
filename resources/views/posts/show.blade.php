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


    <table class="table table-success table-striped">
        
        <thead>
            <th>Id</th>
            <th>Body</th>
        </thead>
       
        <tbody>

            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>


        </tbody>
    </table>


        


    </div> 

</body>
</html>
@endsection