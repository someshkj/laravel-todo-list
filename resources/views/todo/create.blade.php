<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Create</title>
</head>
<style>
    body {
        color: #ffff;
        background: rgb(223, 153, 106);
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-align: center;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #input-text {

        height: 40px;
        outline: none;
        border-radius: 10px;
        border: 1px solid rgb(14, 5, 5);
        font-size: 27px;
        padding-left: 15px;
    }

    #input-button {


        height: 40px;
        outline: none;
        border-radius: 10px;
        border: 1px solid rgb(14, 5, 5);
        font-size: 27px;
    }

    a {
        color: #000000;
        border: brown solid;
        border-radius: 5px;
        padding: 5px;
    }

    h1 {
        font-weight: bold;
        color: #fff;
        font-size: 60px;
    }
</style>

<body>
    <h1>Create your TODO</h1>
    <h3>
        <x-alert />
    </h3>
    <form action="/upload" method="post">
        @csrf
        <input type="text" name="title" id="input-text" placeholder="Add your todo" />
        <input type="submit" value="Create" id="input-button" />
    </form>
    <br>
    <a href="/index" style="font-size: 25px;">Back</a>
</body>

</html>