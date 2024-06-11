<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/import')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <input type="submit" value="Import Data">
        <a href="{{url('export')}}">Export Data</a>
    </form>
</body>
</html>