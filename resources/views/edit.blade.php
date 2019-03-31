<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

    <form action="{{'/mahasiswa/'.$edit->id.'/update'}}" method="post">
        @csrf
        <input type="text" name="nama" id="name" value="{{$edit->nama}}"> <br>
        <input type="text" name="nim" id="nim" value="{{$edit->nim}}"> <br>
        <input type="number" name="umur" id="age" value="{{$edit->umur}}"> <br>
        <input type="number" name="phone" id="phone" value="{{$edit->phone}}"><br>

        <input type="submit" value="Submit">
    </form>

    <a href="{{'/'}}">Back</a>
    
</body>
</html>
