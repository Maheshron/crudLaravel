<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{route('postdata')}}">
    @csrf
    FirstName:<input type="text" name="name"><br>
    Age:<input type="text" name="age"><br>
    Email:<input type="text" name="email">
    <input type="submit" value="submit">
    </form>

</body>
</html>