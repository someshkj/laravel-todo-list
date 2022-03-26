<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Home</title>
</head>
<style>
    body {
        color: #ffff;
        background: rgb(142, 73, 232);
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-align: center;
        position: fixed;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    a {
        color: #ffffff;
        border: black solid;
        border-radius: 5px;
        padding: 5px;
    }

    h1 {
        font-weight: bold;
        color: #fff;
        font-size: 70px;
    }
</style>

<body>
    <h1>my Todo</h1>
    <h3>
        <a href="/create" style="border : pink solid; color:black">Create</a>
    </h3>
    <br>
    <h3>
        <x-alert />
    </h3>
    @foreach($todos as $todo)
    <li style="font-size: 20px">
        @if($todo->completed)
        <span style="text-decoration:line-through">{{$todo->title}}</span>
        @else
        {{$todo->title}}
        @endif
        <a href="{{asset('/' . $todo->id . '/edit')}}">Edit</a>
        <a href="{{asset('/' . $todo->id . '/completed')}}">Completed</a>
        <a href="{{asset('/' . $todo->id . '/delete')}}">Delete</a>
    </li>
    <br>
    @endforeach
</body>

</html>