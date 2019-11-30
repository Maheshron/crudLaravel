<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class = "container">
    <h1>Hello World</h1>
    <br>
<a class="btn btn-primary" href="{{route('addpost')}}">Add Post </a>
    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach($data as $item)
        <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->age }}</td>
        <td>{{ $item->email }}</td>
        <td><a class="btn btn-primary" href="{{route('edit',$item->id)}}">Edit</a></td>
        <td><a class="btn btn-danger" href="{{route('delete',$item->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>